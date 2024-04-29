<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>strength4u</title>
    <link href="./../css/output.css" rel="stylesheet" />
    <script src="./../js/nav_handlers.js"></script>
    <script src="./../js/amount_handler.js"></script>
  </head>
  <body class="bg-primary-grey-100 font-dm">
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
      <p class="mx-2 font-bold md:mx-7">1. Shopping Cart</p>
      <p class="mx-2 text-gray-700 md:mx-7">2. Checkout</p>
      <p class="mx-2 text-gray-700 md:mx-7">3. Order Succeed</p>
    </div>
    <h2 class="w-full p-8 text-center text-4xl font-bold text-slate-800">
      My Cart
    </h2>
    <main
      class="mx-auto flex max-w-screen-xl flex-col gap-2 lg:mb-8 lg:flex-row 2xl:gap-8"
    >
      <!-- Cart content section -->
      <section class="flex flex-col shadow-sm lg:w-3/4">
        <ul class="flex min-h-[60vh] flex-col gap-4 rounded-[4px] bg-white p-4">
          <!-- Cart headers -->
          <li
            class="hidden justify-between border-b border-slate-400 pb-2 font-bold text-slate-800 md:flex"
          >
            <p class="w-5/12 text-center">Product</p>
            <p class="w-2/12 text-center">Amount</p>
            <p class="w-2/12 text-center">Unit Price</p>
            <p class="w-2/12 text-center">Total price</p>
            <p class="w-1/12 text-center"></p>
            <!-- Can be 'Delete' here but looks OK now-->
          </li>

          <!-- Product -->
          <li
            class="grid grid-cols-[2fr_1fr] justify-items-center gap-2 border-b border-slate-200 pb-2 text-slate-800 sm:grid-cols-[3fr_2fr] md:flex md:items-center md:justify-between md:gap-0"
          >
            <div
              class="col-start-1 col-end-2 row-start-1 flex w-full gap-4 self-center md:w-5/12 md:gap-8"
            >
              <div
                class="w-2/5 min-w-[40%] overflow-hidden rounded-[8px] sm:w-1/5 sm:min-w-[20%]"
              >
                <img
                  class="w-full rounded-[8px] bg-cover"
                  src="./../../images/protein-protein.webp"
                />
              </div>
              <div class="flex flex-col">
                <p class="text-sm font-bold text-slate-500">PROtein</p>
                <a
                  class="text-blue-500 hover:underline"
                  href="./product-detail.html"
                  >Pure Whey Protein</a
                >

                <p class="text-sm font-light lowercase text-slate-800">
                  Chocolate
                </p>
              </div>
            </div>
            <div
              class="col-start-1 col-end-2 row-start-2 flex w-full justify-center justify-self-start md:w-2/12"
            >
              <!--https://tailwindcomponents.com/component/number-input-counter -->
              <div
                class="custom-number-input flex w-full flex-row rounded-[8px] text-center md:w-4/6"
              >
                <button
                  class="h-full w-1/4 cursor-pointer rounded-l-[8px] bg-slate-200 text-gray-600 transition duration-200 ease-in-out hover:bg-slate-300"
                  data-action="decrement"
                >
                  <span class="m-auto text-2xl md:font-thin">−</span>
                </button>

                <input
                  class="text-md md:text-basecursor-default custom-number-input-rm-arrows flex w-2/4 items-center bg-primary-grey-100 text-center font-light text-slate-700 outline-none focus:bg-blue-50 focus:outline-none"
                  min="0"
                  name="custom-input-number"
                  type="number"
                  value="0"
                />
                <button
                  class="h-full w-1/4 cursor-pointer rounded-r-[8px] bg-slate-200 text-gray-600 transition duration-200 ease-in-out hover:bg-slate-300"
                  data-action="increment"
                >
                  <span class="m-auto text-2xl md:font-thin">+</span>
                </button>
              </div>
            </div>
            <!-- Per-piece price -->
            <div class="hidden w-2/12 text-center md:block">
              <p>$45.99</p>
            </div>
            <!-- Total price -->
            <div class="w-2/12 text-center">
              <p>$45.99</p>
            </div>

            <div class="w-1/12 text-center">
              <button
                id=""
                class="rounded-full p-2 transition duration-200 ease-in-out hover:bg-slate-400 hover:bg-opacity-10 hover:text-red-600"
              >
                <svg
                  class="fill-current"
                  xmlns="http://www.w3.org/2000/svg"
                  height="24"
                  viewBox="0 -960 960 960"
                  width="24"
                >
                  <path
                    d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"
                  />
                </svg>
              </button>
            </div>
          </li>

          <!-- Product -->
          <li
            class="grid grid-cols-[2fr_1fr] justify-items-center gap-2 border-b border-slate-200 pb-2 text-slate-800 sm:grid-cols-[3fr_2fr] md:flex md:items-center md:justify-between md:gap-0"
          >
            <div
              class="col-start-1 col-end-2 row-start-1 flex w-full gap-4 self-center md:w-5/12 md:gap-8"
            >
              <div
                class="w-2/5 min-w-[40%] overflow-hidden rounded-[8px] sm:w-1/5 sm:min-w-[20%]"
              >
                <img
                  class="w-full rounded-[8px] bg-cover"
                  src="./../../images/protein-furious.webp"
                />
              </div>
              <div class="flex flex-col">
                <p class="text-sm font-bold text-slate-500">Furious</p>
                <a
                  class="text-blue-500 hover:underline"
                  href="./product-detail.html"
                  >Delicious whey protein from grass-fed cows</a
                >
                <p class="text-sm font-light lowercase text-slate-800">
                  Chocalate chip
                </p>
              </div>
            </div>
            <div
              class="col-start-1 col-end-2 row-start-2 flex w-full justify-center justify-self-start md:w-2/12"
            >
              <!--https://tailwindcomponents.com/component/number-input-counter -->
              <div
                class="custom-number-input flex w-full flex-row rounded-[8px] text-center md:w-4/6"
              >
                <button
                  class="h-full w-1/4 cursor-pointer rounded-l-[8px] bg-slate-200 text-gray-600 transition duration-200 ease-in-out hover:bg-slate-300"
                  data-action="decrement"
                >
                  <span class="m-auto text-2xl md:font-thin">−</span>
                </button>

                <input
                  class="text-md md:text-basecursor-default custom-number-input-rm-arrows flex w-2/4 items-center bg-primary-grey-100 text-center font-light text-slate-700 outline-none focus:bg-blue-50 focus:bg-opacity-70 focus:outline-none"
                  min="0"
                  name="custom-input-number"
                  type="number"
                  value="0"
                />
                <button
                  class="h-full w-1/4 cursor-pointer rounded-r-[8px] bg-slate-200 text-gray-600 transition duration-200 ease-in-out hover:bg-slate-300"
                  data-action="increment"
                >
                  <span class="m-auto text-2xl md:font-thin">+</span>
                </button>
              </div>
            </div>
            <!-- Price per piece-->
            <div class="hidden w-2/12 text-center md:block">
              <p>$89.90</p>
            </div>
            <!-- Price total -->
            <div class="w-2/12 text-center">
              <p>$89.90</p>
            </div>

            <div class="w-1/12 text-center">
              <button
                id=""
                class="rounded-full p-2 transition duration-200 ease-in-out hover:bg-slate-400 hover:bg-opacity-10 hover:text-red-600"
              >
                <svg
                  class="fill-current"
                  xmlns="http://www.w3.org/2000/svg"
                  height="24"
                  viewBox="0 -960 960 960"
                  width="24"
                >
                  <path
                    d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"
                  />
                </svg>
              </button>
            </div>
          </li>

          <!-- Product -->
          <li
            class="grid grid-cols-[2fr_1fr] justify-items-center gap-2 border-b border-slate-200 pb-2 text-slate-800 sm:grid-cols-[3fr_2fr] md:flex md:items-center md:justify-between md:gap-0"
          >
            <div
              class="col-start-1 col-end-2 row-start-1 flex w-full gap-4 self-center md:w-5/12 md:gap-8"
            >
              <div
                class="w-2/5 min-w-[40%] overflow-hidden rounded-[8px] sm:w-1/5 sm:min-w-[20%]"
              >
                <img
                  class="w-full rounded-[8px] bg-cover"
                  src="../../images/creatine.webp"
                />
              </div>
              <div class="flex flex-col">
                <p class="text-sm font-bold text-slate-500">PROtein</p>
                <a
                  class="text-blue-500 hover:underline"
                  href="./product-detail.html"
                  >Creapure creatine</a
                >
                <p class="text-sm font-light lowercase text-slate-800">
                  Natural
                </p>
              </div>
            </div>
            <div
              class="col-start-1 col-end-2 row-start-2 flex w-full justify-center justify-self-start md:w-2/12"
            >
              <!--https://tailwindcomponents.com/component/number-input-counter -->
              <div
                class="custom-number-input flex w-full flex-row rounded-[8px] text-center md:w-4/6"
              >
                <button
                  class="h-full w-1/4 cursor-pointer rounded-l-[8px] bg-slate-200 text-gray-600 transition duration-200 ease-in-out hover:bg-slate-300"
                  data-action="decrement"
                >
                  <span class="m-auto text-2xl md:font-thin">−</span>
                </button>

                <input
                  class="text-md md:text-basecursor-default custom-number-input-rm-arrows flex w-2/4 items-center bg-primary-grey-100 text-center font-light text-slate-700 outline-none focus:bg-blue-50 focus:bg-opacity-70 focus:outline-none"
                  min="0"
                  name="custom-input-number"
                  type="number"
                  value="0"
                />
                <button
                  class="h-full w-1/4 cursor-pointer rounded-r-[8px] bg-slate-200 text-gray-600 transition duration-200 ease-in-out hover:bg-slate-300"
                  data-action="increment"
                >
                  <span class="m-auto text-2xl md:font-thin">+</span>
                </button>
              </div>
            </div>
            <!-- Price per piece -->
            <div class="hidden w-2/12 text-center md:block">
              <p class="text-slate-600 line-through">$25.99</p>
              <p class="font-bold text-red-600">$20.79</p>
            </div>
            <!-- Price total -->
            <div class="w-2/12 text-center">
              <p class="text-slate-600 line-through">$25.99</p>
              <p class="font-bold text-red-600">$20.79</p>
            </div>

            <div class="w-1/12 text-center">
              <button
                id=""
                class="rounded-full p-2 transition duration-200 ease-in-out hover:bg-slate-400 hover:bg-opacity-10 hover:text-red-600"
              >
                <svg
                  class="fill-current"
                  xmlns="http://www.w3.org/2000/svg"
                  height="24"
                  viewBox="0 -960 960 960"
                  width="24"
                >
                  <path
                    d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"
                  />
                </svg>
              </button>
            </div>
          </li>

          <!-- Product -->
          <li
            class="grid grid-cols-[2fr_1fr] justify-items-center gap-2 border-b border-slate-200 pb-2 text-slate-800 sm:grid-cols-[3fr_2fr] md:flex md:items-center md:justify-between md:gap-0"
          >
            <div
              class="col-start-1 col-end-2 row-start-1 flex w-full gap-4 self-center md:w-5/12 md:gap-8"
            >
              <div
                class="w-2/5 min-w-[40%] overflow-hidden rounded-[8px] sm:w-1/5 sm:min-w-[20%]"
              >
                <img
                  class="w-full rounded-[8px] bg-cover"
                  src="./../../images/creatine-7-strong-brothers.webp"
                />
              </div>
              <div class="flex flex-col">
                <p class="text-sm font-bold text-slate-500">PROtein</p>
                <a
                  class="text-blue-500 hover:underline"
                  href="./product-detail.html"
                  >Strongest creatine monohydrate
                </a>
                <p class="text-sm font-light lowercase text-slate-800">
                  Lemon ice tea
                </p>
              </div>
            </div>
            <div
              class="col-start-1 col-end-2 row-start-2 flex w-full justify-center justify-self-start md:w-2/12"
            >
              <!--https://tailwindcomponents.com/component/number-input-counter -->
              <div
                class="custom-number-input flex w-full flex-row rounded-[8px] text-center md:w-4/6"
              >
                <button
                  class="h-full w-1/4 cursor-pointer rounded-l-[8px] bg-slate-200 text-gray-600 transition duration-200 ease-in-out hover:bg-slate-300"
                  data-action="decrement"
                >
                  <span class="m-auto text-2xl md:font-thin">−</span>
                </button>

                <input
                  class="text-md md:text-basecursor-default custom-number-input-rm-arrows flex w-2/4 items-center bg-primary-grey-100 text-center font-light text-slate-700 outline-none focus:bg-blue-50 focus:bg-opacity-70 focus:outline-none"
                  min="0"
                  name="custom-input-number"
                  type="number"
                  value="0"
                />
                <button
                  class="h-full w-1/4 cursor-pointer rounded-r-[8px] bg-slate-200 text-gray-600 transition duration-200 ease-in-out hover:bg-slate-300"
                  data-action="increment"
                >
                  <span class="m-auto text-2xl md:font-thin">+</span>
                </button>
              </div>
            </div>
            <!-- Price per piece -->
            <div class="hidden w-2/12 text-center md:block">
              <p class="text-slate-600 line-through">$145.99</p>
              <p class="font-bold text-red-600">$116.79</p>
            </div>
            <!-- Price total -->
            <div class="w-2/12 text-center">
              <p class="text-slate-600 line-through">$145.99</p>
              <p class="font-bold text-red-600">$116.79</p>
            </div>

            <div class="w-1/12 text-center">
              <button
                id=""
                class="rounded-full p-2 transition duration-200 ease-in-out hover:bg-slate-400 hover:bg-opacity-10 hover:text-red-600"
              >
                <svg
                  class="fill-current"
                  xmlns="http://www.w3.org/2000/svg"
                  height="24"
                  viewBox="0 -960 960 960"
                  width="24"
                >
                  <path
                    d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"
                  />
                </svg>
              </button>
            </div>
          </li>
        </ul>
      </section>

      <!-- Price and checkout section -->
      <section
        class="mx-auto my-2 mb-6 mt-6 flex min-w-80 flex-col rounded-lg border bg-gray-200 p-6 lg:fixed lg:right-0 lg:mx-2 lg:w-1/4 lg:min-w-0 lg:max-w-full"
      >
        <h2 class="mb-5 text-center text-xl font-bold">Cart Total</h2>
        <div class="my-2 flex justify-between">
          <p class="text-lg font-bold">Subtotal</p>
          <div>
            <p class="mb-1 text-lg font-bold" id="subtotal">$200</p>
          </div>
        </div>
        <a
          href="checkout.html"
          class="mt-6 w-4/5 self-center rounded-md border-2 border-gray-900 bg-black px-6 py-2 text-center font-medium text-white transition duration-200 ease-in hover:bg-white hover:text-black focus:outline-none"
        >
          Checkout
        </a>
      </section>
    </main>

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
