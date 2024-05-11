@extends("layouts.app")

@section("title", "Cart")

@section("content")
  <div class="flex flex-row gap-4 p-4">
    <p class="mx-2 font-bold md:mx-7">1. Shopping Cart</p>
    <p class="mx-2 text-gray-700 md:mx-7">2. Checkout</p>
    <p class="mx-2 text-gray-700 md:mx-7">3. Order Succeed</p>
  </div>
  <h2 class="w-full p-8 text-center text-4xl font-bold text-slate-800">
    My Cart
  </h2>
  <main class="mx-auto flex max-w-screen-xl flex-col gap-2 lg:mb-8 lg:flex-row 2xl:gap-8">
    <!-- Cart content section -->
    <section class="flex flex-col shadow-sm lg:w-3/4">
      <ul class="flex min-h-[60vh] flex-col gap-4 rounded-[4px] bg-white p-4">
        <!-- Cart headers -->
        <li class="hidden justify-between border-b border-slate-400 pb-2 font-bold text-slate-800 md:flex">
          <p class="w-5/12 text-center">Product</p>
          <p class="w-2/12 text-center">Amount</p>
          <p class="w-2/12 text-center">Unit Price</p>
          <p class="w-2/12 text-center">Total price</p>
          <p class="w-1/12 text-center"></p>
          <!-- Can be 'Delete' here but looks OK now-->
        </li>

        @forelse ($data as $item)
          <x-cart-product-row :stock_item='$item["stock"]' :quantity='$item["quantity"]'></x-cart-product-row>
        @empty
          <p class="text-center text-slate-500">Your cart is empty</p>
        @endforelse
      </ul>
    </section>

    <!-- Price and checkout section -->
    <section
      class="min-w-64 mx-auto my-2 mb-6 mt-6 flex flex-col rounded-[4px] border bg-slate-200 p-6 lg:fixed lg:right-0 lg:mx-2 lg:w-1/4 lg:min-w-0 lg:max-w-full">
      <h2 class="mb-5 text-center text-xl font-bold">Cart Total</h2>
      <div class="my-2 flex justify-between">
        <p class="text-lg font-bold">Subtotal</p>
        <div>
          <p class="mb-1 text-lg font-bold" id="subtotal">$200</p>
        </div>
      </div>
      <a href="checkout.html"
        class="mt-6 w-full self-center rounded-[8px] border-2 bg-blue-600 px-6 py-2 text-center font-medium text-white transition duration-200 ease-in-out hover:bg-blue-700 focus:outline-none">
        Checkout
      </a>
    </section>
  </main>

@endsection

@push("scripts")
  @vite(["resources/js/amount_handler.js", "resources/js/reload-cart.js"])
@endpush
