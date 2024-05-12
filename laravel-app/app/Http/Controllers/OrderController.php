<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\ProductOrderDetail;
use App\Models\Stock;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $cartData = json_decode($request->input("cart", "[]"), true); // Decode JSON string to array
        if ($cartData == []) {
            return view("cart", ["data" => []]);
        }
        $rules = [
            "*" => "required|array", // Ensure each item is an array
            "*.stockId" => "required|integer|min:1", // Validate stockId as unsigned integer
            "*.quantity" => "required|integer|min:1", // Validate quantity as unsigned integer
        ];
        $errors = [];

        $validator = Validator::make($cartData, $rules);
        if ($validator->fails()) {
            // If validation fails, return a response with the errors
            $errors[] = $validator->errors();
        }

        $data = [];
        $total_price = 0;
        foreach ($cartData as $item) {
            $stock = Stock::withProductDetails()->find($item["stockId"]);

            if (!$stock) {
                $errors[] = $stock->product->name . " does not exists.";
                continue;
            }

            if ($stock->stock_amount < $item["quantity"]) {
                $errors[] = "There are only " . $stock->stock_amount . " piece(s) left on stock for '" . $stock->product->name . "' with flavour '" . $stock->flavour->label . "' and size '" . $stock->size->label . "'.";
            }

            $total_price += (1 - $stock->discount_percentage / 100) * $stock->price_in_dollars * $item["quantity"];
            $data[] = [
                "stock" => $stock,
                "quantity" => $item["quantity"],
            ];
        }

        if ($errors) {
            //return $errors;
            return view("cart", ["data" => $data, "errors" => $errors]);
        }

        $user_data = [];
        if (auth()->check()) {
            // return auth()->id();
            // get latest user order data
        }

        return view("checkout", [
            "data" => $data,
            "user_data" => [],
            "total_price" => $total_price,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cartData = json_decode($request->input("cart", "[]"), true); // Decode JSON string to array
        $email = $request->input("email", "");
        $name = $request->input("first_name", "") . " " . $request->input("last_name", "");
        $street = $request->input("Street", "");
        $city = $request->input("City", "");
        $country = $request->input("country", "");
        $p_code = $request->input("p_code", "");
        $tel_num = $request->input("tel_num", "");
        $shipping = $request->input("shipping", "");
        $payment = $request->input("payment", "");
        $card_n = $request->input("card_n", "");
        $exp_date = $request->input("exp_date", "");
        $cvc = $request->input("cvc", "");

        if ($cartData == null) {
            return view("cart", ["data" => []]);
        }
        // Information validation
        $rules = [
            "cart" => "required|json",
            "email" => "required|email",
            "first_name" => "required|string|max:25",
            "last_name" => "required|string|max:25",
            "Street" => "required|string|max:100",
            "City" => "required|string|max:189",
            "country" => "required|string|max:90",
            "p_code" => "required|string|max:18",
            "tel_num" => "required|string|max:15",
            "shipping" => "required|string|in:dhl,sps,packeta",
            "payment" => "required|string|in:online_card_payment,cash_on_delivery,bank_transfer",
            "card_n" => "nullable|required_if:payment,online_card_payment|string",
            "exp_date" => "nullable|required_if:payment,online_card_payment|date_format:m/y",
            "cvc" => "nullable|required_if:payment,online_card_payment|numeric|digits:3",
            "cart.*.stockId" => "required|integer|min:1",
            "cart.*.quantity" => "required|integer|min:1",
        ];

        // Validate input
        $validator = Validator::make($request->all(), $rules);
        $errors = [];
        $is_form_error = false;

        if ($validator->fails()) {
            // If validation fails, return a response with the errors
            $errors[] = $validator->errors();
            $is_form_error = true;
        }

        $data = [];
        $total_price = 0;
        foreach ($cartData as $item) {
            $stock = Stock::withProductDetails()->find($item["stockId"]);

            if (!$stock) {
                $errors[] = $stock->product->name . " does not exists.";
                continue;
            }

            if ($stock->stock_amount < $item["quantity"]) {
                $errors[] = "There are only " . $stock->stock_amount . " piece(s) left on stock for '" . $stock->product->name . "' with flavour '" . $stock->flavour->label . "' and size '" . $stock->size->label . "'.";
            }

            $total_price += (1 - $stock->discount_percentage / 100) * $stock->price_in_dollars;
            $data[] = [
                "stock" => $stock,
                "quantity" => $item["quantity"],
            ];
        }

        if ($errors) {
            if (!$is_form_error) {
                return view("cart", ["data" => $data, "errors" => $errors]);
            } else {
                return view("checkout", [
                    "data" => $data,
                    "errors" => $errors,
                    "total_price" => $total_price,
                ]);
            }
        }

        $order = new Order();
        $order->user_id = auth()->id(); // Linking the order to the logged-in user
        $order->email = $email;
        $order->name = $name;
        $order->street = $street;
        $order->city = $city;
        $order->country = $country;
        $order->zip_code = $p_code;
        $order->status = "new";
        $order->phone_number = $tel_num;
        $order->shipping_method = $shipping;
        $order->payment_method = $payment;
        $order->total_price = $total_price;

        $order->save(); // Save the order to generate an order ID

        foreach ($cartData as $item) {
            $stock = Stock::find($item["stockId"]);

            // Update stock levels and sold amount
            $stock->stock_amount -= $item["quantity"];
            $stock->sold_amount += $item["quantity"];
            $stock->save(); // Save the updated stock to the database

            // Create order product detail record
            $orderProductDetail = new ProductOrderDetail([
                "order_id" => $order->id,
                "product_id" => $stock->product_id,
                "flavour_id" => $stock->flavour_id,
                "size_id" => $stock->size_id,
                "quantity" => $item["quantity"],
                "price_in_dollars" => $stock->price_in_dollars,
                "discount_percentage" => $stock->discount_percentage,
            ]);

            $orderProductDetail->save();
        }

        return redirect()->route("order.confirmation", ["order_id" => $order->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $email = Order::find($id)->email;
        return view("comp_order", [
            "order_id" => $id,
            "email" => $email,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
