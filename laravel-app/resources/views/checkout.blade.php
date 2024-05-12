@extends("layouts.app")

@section("title", "Cart")

@section("content")

  <div class="flex flex-row gap-4 p-4">
    <p class="mx-2 text-gray-700 md:mx-7">1. Shopping Cart</p>
    <p class="mx-2 font-bold md:mx-7">2. Checkout</p>
    <p class="mx-2 text-gray-700 md:mx-7">3. Order Succeed</p>
  </div>

  @if (count($errors) > 0)

    <div class="flex w-full justify-center">
      <div class="m-2 max-w-screen-lg rounded-[8px] bg-red-50 px-4 py-4 md:mx-0 md:px-8">
        @foreach ($errors as $error)
          <p class="text-red-500">{{ $error }}</p>
        @endforeach
      </div>
    </div>

  @endif
  <form id="submit-checkout-form" action="/order" method="POST">
    <main class="mx-auto flex max-w-screen-xl flex-col lg:flex-row">
      <!-- all inputs -->
      <section class="flex flex-col lg:w-3/4">
        <!-- Personal information -->
        <p class="mx-8 mt-8 text-2xl font-bold">Personal information</p>
        <div class="mx-2 flex items-center justify-center p-6 md:w-4/5">
          <!-- https://tailwindcomponents.com/component/tailwind-css-reservation-form -->
          <div class="max-w-3/4 mx-auto w-full">
            <div class="w-full px-3">
              <div class="mb-5">
                <label class="mb-3 block font-bold" for="email">
                  E-mail address
                </label>
                <input
                  class="w-full rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                  id="email" name="email" placeholder="john.doe@gmail.com" type="text" required />
              </div>
            </div>
            <div class="w-full px-3">
              <div class="mb-5">
                <label class="mb-3 block font-bold" for="first_name">
                  Name
                </label>
                <input
                  class="w-full rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                  id="first_name" name="first_name" placeholder="John" type="text" required />
              </div>
            </div>
            <div class="w-full px-3">
              <div class="mb-5">
                <label class="mb-3 block font-bold" for="last_name">
                  Last Name
                </label>
                <input
                  class="w-full rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                  id="last_name" name="last_name" placeholder="Doe" type="text" required />
              </div>
            </div>
            <div class="w-full px-3">
              <div class="mb-5">
                <label class="mb-3 block font-bold" for="Street">
                  Street
                </label>
                <input
                  class="w-full rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                  id="street" name="Street" placeholder="High street" type="text" required />
              </div>
            </div>
            <div class="w-full px-3">
              <div class="mb-5">
                <label class="mb-3 block font-bold" for="city"> City </label>
                <input
                  class="w-full rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                  id="city" name="City" placeholder="London" type="text" required />
              </div>
            </div>
            <div class="w-full px-3">
              <div class="mb-5">
                <label class="mb-3 block font-bold" for="country">
                  Country
                </label>
                <input
                  class="w-full rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                  id="country" name="country" placeholder="England" type="text" required />
              </div>
            </div>
            <div class="w-full px-3">
              <div class="mb-5">
                <label class="mb-3 block font-bold" for="p_code">
                  Post Code
                </label>
                <input
                  class="w-full rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                  id="p_code" name="p_code" placeholder="12345" type="text" required />
              </div>
            </div>
            <div class="w-full px-3">
              <div class="mb-5">
                <label class="mb-3 block font-bold" for="tel_num">
                  Phone Number
                </label>
                <input
                  class="w-full rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                  id="tel_num" name="tel_num" placeholder="+421 912 345 789" type="number" required />
              </div>
            </div>
          </div>
        </div>

        <!-- line -->
        <div class="mx-10 border-t border-slate-900 border-opacity-50 md:mx-14"></div>

        <!-- Shipping method -->
        <p class="mx-8 mt-8 text-2xl font-bold">Shipping method</p>
        <div class="p-3 sm:ml-8 md:w-11/12 md:p-6">
          <div class="flex flex-row gap-2 md:gap-8">
            <input class="h-5 w-5" id="radioButtonDHL" name="shipping" type="radio" value="dhl" />

            <label class="w-96" for="radioButtonDHL">
              DHL - ready for shipping in 5-7 business days
            </label>
            <p>+$0</p>
          </div>
          <div class="my-4 flex flex-row gap-2 md:gap-8">
            <input checked class="h-5 w-5" id="radioButtonSPS" name="shipping" type="radio" value="sps" />

            <label class="w-96" for="radioButtonSPS">
              SPS - ready for shipping in 2-4 business days
            </label>
            <p>+$0</p>
          </div>
          <div class="flex flex-row gap-2 md:gap-8">
            <input class="h-5 w-5" id="radioButtonPacketa" name="shipping" type="radio" value="packeta" />

            <label class="w-96" for="radioButtonPacketa">
              Packeta - ready for shipping in 4-6 business days
            </label>
            <p>+$0</p>
          </div>
        </div>

        <!-- line -->
        <div class="mx-10 border-t border-slate-900 border-opacity-50 md:mx-14"></div>

        <!-- Payment -->
        <p class="mx-8 mt-8 text-2xl font-bold">Payment</p>
        <div class="p-3 sm:ml-8 md:w-11/12 md:p-6">
          <div class="flex flex-row gap-1 md:gap-8">
            <input class="h-5 w-5" id="radioButtonCashOnD" name="payment" type="radio" value="cash_on_delivery" />

            <label class="w-96" for="radioButtonCashOnD">
              Cash on delivery
            </label>
            <p>+$0</p>
          </div>
          <div class="my-4 flex flex-row gap-1 md:gap-8">
            <input checked class="h-5 w-5" id="radioButtonOnlineP" name="payment" type="radio"
              value="online_card_payment" />

            <label class="w-96" for="radioButtonOnlineP">
              Online card payment
            </label>
            <p>+$0</p>
          </div>
          <div class="flex flex-row gap-1 md:gap-8">
            <input class="h-5 w-5" id="radioButtonBankT" name="payment" type="radio" value="bank_transfer" />

            <label class="w-96" for="radioButtonBankT">
              Online payment by bank transfer
            </label>
            <p>+$0</p>
          </div>
        </div>

        <div class="mx-2 flex w-96">
          <div class="max-w-3/4 ml-9">
            <div class="w-full px-3" id="online_payment">
              <div class="mb-5">
                <label class="mb-3 block font-bold" for="card_n">Card number</label><input
                  class="w-full rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                  id="card_n" name="card_n" placeholder="Card number" type="text" inputmode="numeric"
                  maxlength="19" />
              </div>
              <div class="mb-5 flex gap-6">
                <div>
                  <label class="mb-3 block font-bold" for="exp_date">Exp.</label><input
                    class="w-28 rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                    id="exp_date" name="exp_date" placeholder="MM/YY" type="text" maxlength="5" />
                </div>

                <div>
                  <label class="mb-3 block font-bold" for="cvc">CVC</label><input
                    class="w-28 rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                    id="cvc" name="cvc" placeholder="123" type="text" maxlength="3" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- summary section -->
      <div class="mx-10 border-t border-slate-900 border-opacity-50 md:mx-14"></div>
      <section
        class="min-w-96 mx-auto my-2 mb-6 mt-6 flex flex-col rounded-[4px] bg-slate-200 p-6 lg:fixed lg:right-0 lg:mx-2 lg:w-1/4 lg:min-w-0 lg:max-w-full">
        <h2 class="mb-5 text-center text-xl font-bold">Summary</h2>
        <div class="my-2 flex justify-between">
          <p class="text-lg font-bold">Subtotal</p>
          <div>
            <p class="mb-1 text-lg font-bold" id="subtotal">{{ number_format($total_price, 2) }}</p>
          </div>
        </div>
        <div class="my-2 flex justify-between">
          <p class="text-lg font-bold">Postage</p>
          <div>
            <p class="mb-1 text-lg font-bold" id="postage">$0.0</p>
          </div>
        </div>
        <div class="my-4 border-t border-gray-300"></div>
        <div class="my-2 flex justify-between">
          <p class="text-lg font-bold">Total</p>
          <div>
            <p class="mb-1 text-lg font-bold" id="total">{{ number_format($total_price, 2) }}</p>
          </div>
        </div>
        <button id="submit-checkout-btn" type="submit"
          class="mt-6 w-4/5 self-center rounded-[8px] bg-blue-600 px-6 py-2 font-medium text-white transition duration-200 ease-in-out hover:bg-blue-700 focus:outline-none">
          Pay Now
        </button>
      </section>
    </main>
  </form>
@endsection

@push("scripts")
  @vite(["resources/js/checkout_handlers.js"])
@endpush
