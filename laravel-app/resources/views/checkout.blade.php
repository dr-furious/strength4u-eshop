<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>strength4u</title>
    <link href="./../css/output.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../js/checkout_handlers.js" defer></script>
    <script src="./../js/nav_handlers.js"></script>
  </head>
  <body class="bg-gray-100 font-dm">
    <div class="bg-white px-4 py-4 text-xl font-bold">
      <a href="./index.html">strength4u</a>
    </div>

    <header
      class="sticky top-0 z-50 w-full bg-primary-grey-100 shadow-md lg:px-10"
    >
      <nav
        class="relative flex max-w-screen-2xl items-center justify-between gap-8 bg-primary-grey-100 px-4 py-4 font-light lg:gap-20 xl:mx-auto xl:gap-24"
      >
        <!-- this part of navbar disappears for devices with width bellow 768px -->
        <div
          id="mobile-nav"
          class="absolute left-0 right-0 top-full flex h-[20rem] max-h-[0] w-full flex-col-reverse items-start justify-end gap-8 overflow-hidden border-b-2 border-b-primary-grey-100 bg-black bg-opacity-95 shadow-2xl transition-all duration-500 ease-in-out md:static md:h-auto md:max-h-[unset] md:flex-row md:items-center md:justify-between md:border-none md:bg-inherit md:bg-opacity-100 md:p-0 md:shadow-none md:transition-none lg:gap-20 xl:gap-24"
        >
          <ul
            class="flex w-fit flex-col gap-6 px-4 text-lg text-slate-100 md:flex-row md:text-inherit"
          >
            <li>
              <a class="custom-underline-transition" href="./index.html"
                >Home</a
              >
            </li>
            <li>
              <a class="custom-underline-transition" href="./shop.html">Shop</a>
            </li>
            <li>
              <a
                class="custom-underline-transition"
                href="./index.html#about-us"
                >About
              </a>
            </li>
          </ul>

          <form
            action="/search"
            method="GET"
            class="relative mt-4 w-full px-4 md:mt-0"
          >
            <label for="search-bar" class="hidden">Search</label>
            <input
              class="h-12 w-full rounded-[4px] border border-slate-200 px-4 font-light outline-blue-600"
              type="search"
              name="query"
              id="search-bar"
              placeholder="Search for your favourite product..."
            />
            <button
              type="submit"
              class="absolute right-6 inline-flex h-full items-center"
            >
              <svg
                class="fill-slate-500"
                xmlns="http://www.w3.org/2000/svg"
                height="32"
                viewBox="0 -960 960 960"
                width="32"
              >
                <path
                  d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"
                />
              </svg>
            </button>
          </form>
        </div>

        <ul class="flex w-full items-center justify-end gap-8 md:w-fit">
          <!-- Burger icon to display menu for small devices bellow 768px -->
          <li class="mr-auto md:hidden" id="show-nav-li">
            <button id="show-mobile-nav-btn" class="">
              <svg
                class="inline-flex items-center fill-slate-800"
                xmlns="http://www.w3.org/2000/svg"
                height="32"
                viewBox="0 -960 960 960"
                width="32"
              >
                <path
                  d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"
                />
              </svg>
            </button>
          </li>

          <!-- Cross icon to hide menu for small devices bellow 768px -->
          <li class="mr-auto hidden md:hidden" id="hide-nav-li">
            <button id="hide-mobile-nav-btn" class="">
              <svg
                class="inline-flex items-center fill-slate-800"
                xmlns="http://www.w3.org/2000/svg"
                height="32"
                viewBox="0 -960 960 960"
                width="32"
              >
                <path
                  d="M256-192.348 192.348-256l224-224-224-224L256-767.652l224 224 224-224L767.652-704l-224 224 224 224L704-192.348l-224-224-224 224Z"
                />
              </svg>
            </button>
          </li>

          <li class="relative">
            <a
              class="custom-underline-transition custom-number-bubble-after flex items-center"
              href="./cart.html"
              ><svg
                class="fill-slate-800"
                xmlns="http://www.w3.org/2000/svg"
                height="32"
                viewBox="0 -960 960 960"
                width="32"
              >
                <path
                  d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68-39.5t-2-78.5l54-98-144-304H40v-80h130l38 80Zm134 280h280-280Z"
                />
              </svg>
              <div
                class="absolute -right-4 -top-3 flex h-7 w-7 items-center justify-center rounded-full border border-primary-grey-100 bg-slate-800 text-slate-100"
              >
                9+
              </div>
            </a>
          </li>

          <li class="relative">
            <button
              id="user-btn"
              class="custom-underline-transition custom-number-bubble-after flex items-center"
            >
              <svg
                class="fill-slate-800"
                xmlns="http://www.w3.org/2000/svg"
                height="32"
                viewBox="0 -960 960 960"
                width="32"
              >
                <path
                  d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"
                />
              </svg>
              <div
                id="user-signed"
                class="absolute -right-4 -top-3 flex h-7 w-7 items-center justify-center rounded-full border border-primary-grey-100 bg-green-500 bg-opacity-20"
              >
                <svg
                  class="fill-green-700"
                  xmlns="http://www.w3.org/2000/svg"
                  height="24"
                  viewBox="0 -960 960 960"
                  width="24"
                >
                  <path
                    d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z"
                  />
                </svg>
              </div>
            </button>

            <!-- User navigation -->
            <div
              id="user-nav"
              class="absolute -right-1/2 top-full mt-2 hidden w-36 overflow-hidden rounded-[8px] border border-slate-200 bg-white text-slate-800 shadow-md lg:-right-full"
            >
              <ul class="flex flex-col">
                <li class="rounded-t-[8px]">
                  <a
                    id="login-link"
                    href="./login.html"
                    class="block px-4 py-2 hover:bg-gray-100 hover:underline"
                    >Log in</a
                  >
                </li>
                <li>
                  <a
                    id="signup-link"
                    href="./signup.html"
                    class="block px-4 py-2 hover:bg-gray-100 hover:underline"
                    >Sign up</a
                  >
                </li>
                <li class="rounded-b-[8px] border-t">
                  <a
                    id="admin-link"
                    href="./admin-panel.html"
                    class="block px-4 py-2 hover:bg-gray-100 hover:underline"
                    >Admin</a
                  >
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
    </header>

    <div class="flex flex-row gap-4 p-4">
      <p class="mx-2 text-gray-700 md:mx-7">1. Shopping Cart</p>
      <p class="mx-2 font-bold md:mx-7">2. Checkout</p>
      <p class="mx-2 text-gray-700 md:mx-7">3. Order Succeed</p>
    </div>
    <form action="comp_order.html">
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
                    id="email"
                    name="email"
                    placeholder="john.doe@gmail.com"
                    type="text"
                    required
                  />
                </div>
              </div>
              <div class="w-full px-3">
                <div class="mb-5">
                  <label class="mb-3 block font-bold" for="first_name">
                    Name
                  </label>
                  <input
                    class="w-full rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                    id="first_name"
                    name="first_name"
                    placeholder="John"
                    type="text"
                    required
                  />
                </div>
              </div>
              <div class="w-full px-3">
                <div class="mb-5">
                  <label class="mb-3 block font-bold" for="last_name">
                    Last Name
                  </label>
                  <input
                    class="w-full rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                    id="last_name"
                    name="last_name"
                    placeholder="Doe"
                    type="text"
                    required
                  />
                </div>
              </div>
              <div class="w-full px-3">
                <div class="mb-5">
                  <label class="mb-3 block font-bold" for="Street">
                    Street
                  </label>
                  <input
                    class="w-full rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                    id="Street"
                    name="Street"
                    placeholder="High street"
                    type="text"
                    required
                  />
                </div>
              </div>
              <div class="w-full px-3">
                <div class="mb-5">
                  <label class="mb-3 block font-bold" for="city"> City </label>
                  <input
                    class="w-full rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                    id="city"
                    name="City"
                    placeholder="London"
                    type="text"
                    required
                  />
                </div>
              </div>
              <div class="w-full px-3">
                <div class="mb-5">
                  <label class="mb-3 block font-bold" for="country">
                    Country
                  </label>
                  <input
                    class="w-full rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                    id="country"
                    name="country"
                    placeholder="England"
                    type="text"
                    required
                  />
                </div>
              </div>
              <div class="w-full px-3">
                <div class="mb-5">
                  <label class="mb-3 block font-bold" for="p_code">
                    Post Code
                  </label>
                  <input
                    class="w-full rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                    id="p_code"
                    name="p_code"
                    placeholder="12345"
                    type="text"
                    required
                    oninput="numbers_only_input(id)"
                  />
                </div>
              </div>
              <div class="w-full px-3">
                <div class="mb-5">
                  <label class="mb-3 block font-bold" for="tel_num">
                    Phone Number
                  </label>
                  <input
                    class="w-full rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                    id="tel_num"
                    name="tel_num"
                    placeholder="+421 912 345 789"
                    type="number"
                    required
                  />
                </div>
              </div>
            </div>
          </div>

          <!-- line -->
          <div
            class="mx-10 border-t border-slate-900 border-opacity-50 md:mx-14"
          ></div>

          <!-- Shipping method -->
          <p class="mx-8 mt-8 text-2xl font-bold">Shipping method</p>
          <div class="p-3 text-center sm:ml-8 md:w-11/12 md:p-6">
            <div class="flex flex-row gap-2 md:gap-8">
              <input
                class="h-5 w-5"
                id="radioButtonDHL"
                name="shipping"
                type="radio"
              />

              <label class="w-96" for="radioButtonDHL">
                DHL - ready for shipping in 5-7 business days
              </label>
              <p>$5.5</p>
            </div>
            <div class="my-4 flex flex-row gap-2 md:gap-8">
              <input
                class="h-5 w-5"
                id="radioButtonSPS"
                name="shipping"
                type="radio"
              />

              <label class="w-96" for="radioButtonSPS">
                SPS - ready for shipping in 2-4 business days
              </label>
              <p>$7.5</p>
            </div>
            <div class="flex flex-row gap-2 md:gap-8">
              <input
                class="h-5 w-5"
                id="radioButtonPacketa"
                name="shipping"
                type="radio"
              />

              <label class="w-96" for="radioButtonPacketa">
                Packeta - ready for shipping in 4-6 business days
              </label>
              <p>$6.5</p>
            </div>
          </div>

          <!-- line -->
          <div
            class="mx-10 border-t border-slate-900 border-opacity-50 md:mx-14"
          ></div>

          <!-- Payment -->
          <p class="mx-8 mt-8 text-2xl font-bold">Payment</p>
          <div class="p-3 text-center sm:ml-8 md:w-11/12 md:p-6">
            <div class="flex flex-row gap-1 md:gap-8">
              <input
                class="h-5 w-5"
                id="radioButtonCashOnD"
                name="payment"
                type="radio"
              />

              <label class="w-96" for="radioButtonCashOnD">
                Cash on delivery
              </label>
              <p>+$1.5</p>
            </div>
            <div class="my-4 flex flex-row gap-1 md:gap-8">
              <input
                class="h-5 w-5"
                id="radioButtonOnlineP"
                name="payment"
                type="radio"
              />

              <label class="w-96" for="radioButtonOnlineP">
                Online card payment
              </label>
              <p>+$0.0</p>
            </div>
            <div class="flex flex-row gap-1 md:gap-8">
              <input
                class="h-5 w-5"
                id="radioButtonBankT"
                name="payment"
                type="radio"
              />

              <label class="w-96" for="radioButtonBankT">
                Online payment by bank transfer
              </label>
              <p>+$0.0</p>
            </div>
          </div>

          <div class="mx-2 flex w-96">
            <div class="max-w-3/4 ml-9">
              <div class="w-full px-3" id="online_payment">
                <div class="mb-5">
                  <label class="mb-3 block font-bold" for="card_n"
                    >Card number</label
                  ><input
                    class="w-full rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                    id="card_n"
                    name="card_n"
                    placeholder="Card number"
                    type="text"
                    inputmode="numeric"
                    maxlength="19"
                    oninput="formatCardNumber()"
                  />
                </div>
                <div class="mb-5 flex gap-6">
                  <div>
                    <label class="mb-3 block font-bold" for="exp_date"
                      >Exp.</label
                    ><input
                      class="w-28 rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                      id="exp_date"
                      name="exp_date"
                      placeholder="MM/YY"
                      type="text"
                      maxlength="5"
                      oninput="formatExpDate()"
                    />
                  </div>

                  <div>
                    <label class="mb-3 block font-bold" for="cvc">CVC</label
                    ><input
                      class="w-28 rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                      id="cvc"
                      name="cvc"
                      placeholder="123"
                      type="text"
                      maxlength="3"
                      oninput="numbers_only_input(id)"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- summary section -->
        <div
          class="mx-10 border-t border-slate-900 border-opacity-50 md:mx-14"
        ></div>
        <section
          class="mx-auto my-2 mb-6 mt-6 flex min-w-96 flex-col rounded-lg border bg-gray-200 p-6 lg:fixed lg:right-0 lg:mx-2 lg:w-1/4 lg:min-w-0 lg:max-w-full"
        >
          <h2 class="mb-5 text-center text-xl font-bold">Summary</h2>
          <div class="my-2 flex justify-between">
            <p class="text-lg font-bold">Subtotal</p>
            <div>
              <p class="mb-1 text-lg font-bold" id="subtotal"></p>
            </div>
          </div>
          <div class="my-2 flex justify-between">
            <p class="text-lg font-bold">Postage</p>
            <div>
              <p class="mb-1 text-lg font-bold" id="postage"></p>
            </div>
          </div>
          <div class="my-4 border-t border-gray-300"></div>
          <div class="my-2 flex justify-between">
            <p class="text-lg font-bold">Total</p>
            <div>
              <p class="mb-1 text-lg font-bold" id="total"></p>
            </div>
          </div>
          <button
            class="mt-6 w-4/5 self-center rounded-md border-2 border-gray-900 bg-black px-6 py-2 font-medium text-white transition duration-200 ease-in hover:bg-white hover:text-black focus:outline-none"
            type="submit"
          >
            Pay Now
          </button>
        </section>
      </main>
    </form>

    <footer class="mt-12 bg-slate-800 px-4 py-4 text-white">
      <div class="mb-8 text-xl font-bold text-white">
        <a href="./index.html">strength4u</a>
      </div>

      <hr class="mx-auto mb-8 w-3/4 opacity-50" />

      <div class="flex flex-col items-center justify-center">
        <ul
          class="mb-6 flex gap-8 rounded-full border border-solid border-transparent bg-slate-200 px-4 py-1 text-slate-800"
        >
          <li>
            <a class="flex h-12 w-12 items-center justify-center" href="#">
              <img
                class="h-10 w-10"
                src="./../../icons/instagram-svgrepo-com.svg"
                alt="instagram icon"
              />
            </a>
          </li>
          <li>
            <a class="flex h-12 w-12 items-center justify-center" href="#">
              <img
                class="h-10 w-10"
                src="./../../icons/facebook-svgrepo-com.svg"
                alt="facebook icon"
              />
            </a>
          </li>
          <li>
            <a class="flex h-12 w-12 items-center justify-center" href="#">
              <img
                class="h-10 w-10"
                src="./../../icons/twitter-color-svgrepo.svg"
                alt="facebook icon"
              />
            </a>
          </li>
          <li>
            <a class="flex h-12 w-12 items-center justify-center" href="#">
              <img
                class="h-10 w-10"
                src="./../../icons/youtube-svgrepo-com.svg"
                alt="facebook icon"
              />
            </a>
          </li>
        </ul>
        <p class="font-extralight">&copy;Copyright. All rights reserved.</p>
      </div>
    </footer>
  </body>
</html>
