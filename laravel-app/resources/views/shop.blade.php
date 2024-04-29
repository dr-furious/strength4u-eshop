<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>strength4u</title>
    <link href="./../css/output.css" rel="stylesheet" />
    @vite([
      'resources/css/app.css', 
      'resources/js/nav_handlers.js', 
      'resources/js/ordering-filter_handlers.js', 
      'resources/js/app.js'
      ])
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

    <!-- Hero section-->
    <section
      id="shop-hero"
      class="relative h-96 bg-cover bg-left"
    >
      <!-- image source: https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.goodfon.com%2Fsports%2Fwallpaper-vzgliad-poza-fitnes-muscle-myshtsy-press-atlet-trenazhery--2.html&psig=AOvVaw2aRlvOzRpAvhKRhCyPRjhW&ust=1709931702088000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCMiK6JWG44QDFQAAAAAdAAAAABAD -->
      <div class="absolute inset-0 bg-black opacity-65"></div>

      <div
        class="z-2 absolute bottom-24 left-6 flex flex-col items-start gap-6 pr-2 text-white md:left-20"
      >
        <h1 class="text-4xl font-bold capitalize">Let us be your strength!</h1>
        <p class="text-lg font-light">
          We want you to be the best version of yourself.
        </p>
      </div>
    </section>

    <!-- Products and filters section -->
    <section
      class="mx-4 flex flex-col items-center gap-4 pt-12 md:mt-8 lg:gap-12 xl:mx-24 2xl:mx-auto 2xl:max-w-[1280px]"
    >
      <h2 class="text-center text-5xl font-bold capitalize text-slate-800">
        Shop
      </h2>

      <!-- Buttons for ordering and filtering for screens bellow 1024px -->
      <div
        class="mb-6 flex w-full justify-between gap-8 border-b border-slate-200 py-4 text-lg text-slate-800 sm:justify-end lg:hidden"
      >
        <button
          id="display-filter-btn"
          class="flex gap-2 rounded-[8px] border border-slate-300 bg-slate-200 px-4 py-2 shadow-md hover:bg-slate-300 active:bg-slate-300"
        >
          <p>Filter</p>
          <svg
            class="flex items-center fill-current"
            xmlns="http://www.w3.org/2000/svg"
            height="24"
            viewBox="0 -960 960 960"
            width="24"
          >
            <path
              d="M440-160q-17 0-28.5-11.5T400-200v-240L168-736q-15-20-4.5-42t36.5-22h560q26 0 36.5 22t-4.5 42L560-440v240q0 17-11.5 28.5T520-160h-80Zm40-308 198-252H282l198 252Zm0 0Z"
            />
          </svg>
        </button>
        <button
          id="display-ordering-btn"
          class="flex gap-2 rounded-[8px] border border-slate-300 bg-slate-200 px-4 py-2 shadow-md hover:bg-slate-300 active:bg-slate-300"
        >
          <p>Order</p>
          <svg
            class="flex items-center fill-current"
            xmlns="http://www.w3.org/2000/svg"
            height="24"
            viewBox="0 -960 960 960"
            width="24"
          >
            <path
              d="M314.022-439.522v-274.565l-97.5 97.5-64.653-63.652 207.653-207.892 207.652 207.892-64.652 63.652-97.5-97.5v274.565h-91ZM600.478-71.869 392.826-279.761l64.652-63.652 97.5 97.5v-274.565h91v274.565l97.5-97.5 64.653 63.652L600.478-71.869Z"
            />
          </svg>
        </button>
      </div>

      <!-- Ordering -->
      <div
        id="ordering-menu"
        class="fixed bottom-0 left-0 right-0 top-0 z-50 ml-auto flex w-full translate-x-full transform flex-col gap-6 bg-primary-grey-100 p-4 font-semibold text-slate-800 transition-transform duration-500 ease-in-out md:pr-48 lg:static lg:z-auto lg:w-3/4 lg:translate-x-0 lg:flex-row lg:p-0 lg:pl-12 lg:transition-none"
      >
        <p class="text-2xl">Order By:</p>
        <ul
          class="flex flex-col items-start gap-8 text-xl text-slate-400 lg:flex-row lg:items-center"
        >
          <li>
            <button class="cm-order-btn text-slate-700 hover:text-slate-700">
              Newest
            </button>
          </li>
          <li>
            <button class="cm-order-btn hover:text-slate-700">Oldest</button>
          </li>
          <li>
            <button class="cm-order-btn hover:text-slate-700">Discount</button>
          </li>
          <li>
            <button class="cm-order-btn hover:text-slate-700">Price up</button>
          </li>
          <li>
            <button class="cm-order-btn hover:text-slate-700">
              Price down
            </button>
          </li>
        </ul>
        <button
          id="hide-ordering-btn"
          class="fixed right-0 top-0 p-4 lg:hidden"
        >
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
      </div>

      <div class="flex flex-col gap-16 lg:flex-row">
        <!-- Filters -->
        <div
          id="filter-menu"
          class="fixed bottom-0 left-0 right-0 top-0 z-50 flex w-full translate-x-full transform flex-col gap-3 overflow-y-auto bg-primary-grey-100 px-4 font-semibold text-slate-800 transition-transform duration-500 ease-in-out md:pr-48 lg:static lg:z-auto lg:w-1/4 lg:translate-x-0 lg:pr-0 lg:transition-none"
        >
          <button
            id="hide-filter-btn"
            class="fixed right-0 top-0 p-4 lg:hidden"
          >
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
          <div
            class="flex items-center justify-between py-4 text-2xl font-semibold text-slate-800 lg:pt-0"
          >
            <p>Filter By:</p>
          </div>

          <!-- Price Range -->
          <div
            class="border-b border-b-slate-400 border-opacity-50 pb-3 text-slate-700"
          >
            <div class="flex items-center justify-between">
              <p class="text-xl font-semibold">Price</p>
              <button
                id="price-btn"
                class="rounded-full p-1 transition duration-200 ease-in-out hover:bg-slate-600 hover:bg-opacity-10"
              >
                <svg
                  class="cm-filter-chevron-icon rotate-90 fill-current transition duration-200 ease-in-out"
                  xmlns="http://www.w3.org/2000/svg"
                  height="24"
                  viewBox="0 -960 960 960"
                  width="24"
                >
                  <path
                    d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"
                  />
                </svg>
              </button>
            </div>
            <div
              id="price-list"
              class="mt-4 max-h-80 overflow-y-auto transition-all duration-200 ease-in-out"
            >
              <!-- Price Range Slider -->
              <!-- Display Current Value -->
              <p class="mt-2">
                Current Price: $0 - $<span id="currentPrice">200</span>
              </p>
              <input
                type="range"
                id="priceRange"
                min="5"
                max="200"
                value="200"
                class="w-full cursor-pointer"
                oninput="updatePriceValue(this.value)"
              />
              <div class="flex justify-between text-sm">
                <span>$5</span>
                <span>$200</span>
              </div>
            </div>
          </div>

          <!-- Category Filter Section -->
          <div
            class="relative border-b border-b-slate-400 border-opacity-50 pb-3 text-slate-700"
          >
            <div class="flex items-center justify-between">
              <p class="text-xl font-semibold">Category</p>
              <button
                id="category-btn"
                class="rounded-full p-1 transition duration-200 ease-in-out hover:bg-slate-600 hover:bg-opacity-10"
              >
                <svg
                  class="cm-filter-chevron-icon rotate-90 fill-current transition duration-200 ease-in-out"
                  xmlns="http://www.w3.org/2000/svg"
                  height="24"
                  viewBox="0 -960 960 960"
                  width="24"
                >
                  <path
                    d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"
                  />
                </svg>
              </button>
            </div>
            <!-- Dropdown List -->
            <div
              id="category-list"
              class="mt-4 max-h-80 overflow-y-auto transition-all duration-200 ease-in-out"
            >
              <label class="ml-4 mt-2 block">
                <input type="checkbox" class="cursor-pointer" />
                <span class="ml-2">Proteins</span>
              </label>
              <label class="ml-4 mt-2 block">
                <input type="checkbox" class="cursor-pointer" />
                <span class="ml-2">Amino Acids</span>
              </label>
              <label class="ml-4 mt-2 block">
                <input type="checkbox" class="cursor-pointer" />
                <span class="ml-2">Vitamins</span>
              </label>
              <label class="ml-4 mt-2 block">
                <input type="checkbox" class="cursor-pointer" />
                <span class="ml-2">Minerals</span>
              </label>
              <label class="ml-4 mt-2 block">
                <input type="checkbox" class="cursor-pointer" />
                <span class="ml-2">Healthy Food</span>
              </label>
              <label class="ml-4 mt-2 block">
                <input type="checkbox" class="cursor-pointer" />
                <span class="ml-2">Special Offers</span>
              </label>
              <div
                class="cm-scroll-indicator pointer-events-none absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-primary-grey-100 to-transparent"
              ></div>
            </div>
          </div>

          <!-- Flavour Filter Section -->
          <div
            class="relative border-b border-b-slate-400 border-opacity-50 pb-3 text-slate-700"
          >
            <div class="flex items-center justify-between">
              <p class="text-xl font-semibold">Flavour</p>
              <button
                id="flavour-btn"
                class="rounded-full p-1 transition duration-200 ease-in-out hover:bg-slate-600 hover:bg-opacity-10"
              >
                <svg
                  class="cm-filter-chevron-icon fill-current transition duration-200 ease-in-out"
                  xmlns="http://www.w3.org/2000/svg"
                  height="24"
                  viewBox="0 -960 960 960"
                  width="24"
                >
                  <path
                    d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"
                  />
                </svg>
              </button>
            </div>
            <!-- Dropdown List -->
            <div
              id="flavour-list"
              class="mt-4 max-h-0 overflow-y-auto transition-all duration-200 ease-in-out"
            >
              <label class="ml-4 mt-2 block">
                <input type="checkbox" class="cursor-pointer" />
                <span class="ml-2">Vanilla</span>
              </label>
              <label class="ml-4 mt-2 block">
                <input type="checkbox" class="cursor-pointer" />
                <span class="ml-2">Strawberry</span>
              </label>
              <label class="ml-4 mt-2 block">
                <input type="checkbox" class="cursor-pointer" />
                <span class="ml-2">Mint Chocolate Chip</span>
              </label>
              <label class="ml-4 mt-2 block">
                <input type="checkbox" class="cursor-pointer" />
                <span class="ml-2">Cookies and Cream</span>
              </label>
              <label class="ml-4 mt-2 block">
                <input type="checkbox" class="cursor-pointer" />
                <span class="ml-2">Pistachio</span>
              </label>
              <label class="ml-4 mt-2 block">
                <input type="checkbox" class="cursor-pointer" />
                <span class="ml-2">Salted Caramel</span>
              </label>
              <label class="ml-4 mt-2 block">
                <input type="checkbox" class="cursor-pointer" />
                <span class="ml-2">Raspberry</span>
              </label>
              <label class="ml-4 mt-2 block">
                <input type="checkbox" class="cursor-pointer" />
                <span class="ml-2">Natural</span>
              </label>
              <label class="ml-4 mt-2 block">
                <input type="checkbox" class="cursor-pointer" />
                <span class="ml-2">Chocolate</span>
              </label>
              <label class="ml-4 mt-2 block">
                <input type="checkbox" class="cursor-pointer" />
                <span class="ml-2">Rocky Road</span>
              </label>
              <label class="ml-4 mt-2 block">
                <input type="checkbox" class="cursor-pointer" />
                <span class="ml-2">Banana</span>
              </label>
              <label class="ml-4 mt-2 block">
                <input type="checkbox" class="cursor-pointer" />
                <span class="ml-2">Coconut</span>
              </label>
              <label class="ml-4 mt-2 block">
                <input type="checkbox" class="cursor-pointer" />
                <span class="ml-2">Coffee</span>
              </label>
              <div
                class="cm-scroll-indicator pointer-events-none absolute bottom-0 left-0 right-0 hidden h-16 bg-gradient-to-t from-primary-grey-100 to-transparent"
              ></div>
            </div>
          </div>

          <!-- Brand Filter Section -->
          <div
            class="relative border-b border-b-slate-400 border-opacity-50 pb-3 text-slate-700"
          >
            <div class="flex items-center justify-between">
              <p class="text-xl font-semibold">Brand</p>
              <button
                id="brand-btn"
                class="rounded-full p-1 transition duration-200 ease-in-out hover:bg-slate-600 hover:bg-opacity-10"
              >
                <svg
                  class="cm-filter-chevron-icon fill-current transition duration-200 ease-in-out"
                  xmlns="http://www.w3.org/2000/svg"
                  height="24"
                  viewBox="0 -960 960 960"
                  width="24"
                >
                  <path
                    d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"
                  />
                </svg>
              </button>
            </div>
            <!-- Dropdown List -->
            <div
              id="brand-list"
              class="mt-4 max-h-0 overflow-y-auto transition-all duration-200 ease-in-out"
            >
              <label class="ml-4 mt-2 block">
                <input type="checkbox" class="cursor-pointer" />
                <span class="ml-2">PROtein</span>
              </label>
              <label class="ml-4 mt-2 block">
                <input type="checkbox" class="cursor-pointer" />
                <span class="ml-2">Furious</span>
              </label>
              <label class="ml-4 mt-2 block">
                <input type="checkbox" class="cursor-pointer" />
                <span class="ml-2">Creapure</span>
              </label>
              <label class="ml-4 mt-2 block">
                <input type="checkbox" class="cursor-pointer" />
                <span class="ml-2">7 Strong Brothers</span>
              </label>
              <label class="ml-4 mt-2 block">
                <input type="checkbox" class="cursor-pointer" />
                <span class="ml-2">Nutriblast</span>
              </label>
              <label class="ml-4 mt-2 block">
                <input type="checkbox" class="cursor-pointer" />
                <span class="ml-2">Vitalist</span>
              </label>
              <label class="ml-4 mt-2 block">
                <input type="checkbox" class="cursor-pointer" />
                <span class="ml-2">GreenGain</span>
              </label>
              <label class="ml-4 mt-2 block">
                <input type="checkbox" class="cursor-pointer" />
                <span class="ml-2">PurePower</span>
              </label>
              <label class="ml-4 mt-2 block">
                <input type="checkbox" class="cursor-pointer" />
                <span class="ml-2">OmegaPeak</span>
              </label>
              <label class="ml-4 mt-2 block">
                <input type="checkbox" class="cursor-pointer" />
                <span class="ml-2">HerbalHarvest</span>
              </label>
              <label class="ml-4 mt-2 block">
                <input type="checkbox" class="cursor-pointer" />
                <span class="ml-2">Essentials</span>
              </label>
              <label class="ml-4 mt-2 block">
                <input type="checkbox" class="cursor-pointer" />
                <span class="ml-2">Beasts</span>
              </label>
              <label class="ml-4 mt-2 block">
                <input type="checkbox" class="cursor-pointer" />
                <span class="ml-2">Aura</span>
              </label>
              <div
                class="cm-scroll-indicator pointer-events-none absolute bottom-0 left-0 right-0 hidden h-16 bg-gradient-to-t from-primary-grey-100 to-transparent"
              ></div>
            </div>
          </div>
        </div>

        <!-- Products -->
        <ul
          class="grid grid-cols-1 gap-6 gap-y-10 sm:grid-cols-2 md:grid-cols-3 lg:w-3/4"
        >
          <li
            class="relative flex flex-col gap-1 rounded-[4px] border border-transparent bg-white p-4 shadow-lg transition-shadow duration-300 ease-in-out hover:shadow-xl"
          >
            <div
              class="absolute -left-2 -top-4 flex w-max gap-2 text-sm uppercase"
            >
              <p
                class="rounded-full border border-transparent bg-red-300 bg-opacity-60 px-2 text-red-900"
              >
                20% off
              </p>
              <p
                class="rounded-full border border-transparent bg-slate-300 bg-opacity-60 px-2 text-slate-800"
              >
                9+ Flavours
              </p>
            </div>
            <div
              class="w-full self-center overflow-hidden rounded-[8px] border border-transparent"
            >
              <img
                class="h-auto w-full object-cover"
                src="./../../images/protein-protein.webp"
                alt="protein image"
              />
            </div>
            <div>
              <p class="text-slate-600">PROtein</p>

              <p class="flex gap-2 text-lg">
                <span class="font-bold text-red-600">$36.79</span>
                <span class="text-slate-600 line-through">$45.99</span>
              </p>
            </div>
            <p
              class="flex w-fit items-center rounded-[8px] bg-slate-100 px-2 py-1 text-sm lowercase text-slate-800"
            >
              Chocalate Chip Oreo Cookies
            </p>
            <a
              class="text-lg text-blue-500 hover:underline"
              href="./product-detail.html"
              >Pure whey protein</a
            >
            <p class="text-sm text-slate-800">
              This is a very long desctiption of the product but only xy chars
              will be shown, the rest could be seen on the products detail
              page...
            </p>
            <div
              class="mt-auto flex w-full flex-col items-end justify-end gap-2 pt-2"
            >
              <button
                class="flex w-full transform items-center justify-center rounded-[8px] border border-transparent bg-blue-500 px-4 py-2 text-slate-100 duration-200 ease-in-out hover:bg-blue-600"
              >
                <svg
                  class="fill-slate-100"
                  xmlns="http://www.w3.org/2000/svg"
                  height="32"
                  viewBox="0 -960 960 960"
                  width="32"
                >
                  <path
                    d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z"
                  />
                </svg>
              </button>
            </div>
          </li>

          <li
            class="relative flex flex-col gap-1 rounded-[4px] border border-transparent bg-white p-4 shadow-lg transition-shadow duration-300 ease-in-out hover:shadow-xl"
          >
            <div
              class="absolute -left-2 -top-4 flex w-max gap-2 text-sm uppercase"
            >
              <p
                class="rounded-full border border-transparent bg-red-300 bg-opacity-60 px-2 text-red-900"
              >
                20% off
              </p>
              <p
                class="rounded-full border border-transparent bg-slate-300 bg-opacity-60 px-2 text-slate-800"
              >
                5 Flavours
              </p>
            </div>
            <div
              class="w-full self-center overflow-hidden rounded-[8px] border border-transparent"
            >
              <img
                class="h-auto w-full object-cover"
                src="./../../images/protein-furious.webp"
                alt="protein image"
              />
            </div>
            <div>
              <p class="text-slate-600">Furious</p>
              <p class="flex gap-2 text-lg">
                <span class="font-bold text-red-600">$71.92</span>
                <span class="text-slate-600 line-through">$89.90</span>
              </p>
            </div>
            <p
              class="flex w-fit items-center rounded-[8px] bg-slate-100 px-2 py-1 text-sm lowercase text-slate-800"
            >
              Chocalate Chip Oreo Cookies
            </p>
            <a
              class="text-lg text-blue-500 hover:underline"
              href="./product-detail.html"
              >Delicious whey protein from grass-fed cows</a
            >

            <p class="text-sm text-slate-800">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Consequuntur, esse.
            </p>
            <div
              class="mt-auto flex w-full flex-col items-end justify-end gap-2 pt-2"
            >
              <button
                class="flex w-full transform items-center justify-center rounded-[8px] border border-transparent bg-blue-500 px-4 py-2 text-slate-100 duration-200 ease-in-out hover:bg-blue-600"
              >
                <svg
                  class="fill-slate-100"
                  xmlns="http://www.w3.org/2000/svg"
                  height="32"
                  viewBox="0 -960 960 960"
                  width="32"
                >
                  <path
                    d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z"
                  />
                </svg>
              </button>
            </div>
          </li>

          <li
            class="relative flex flex-col gap-1 rounded-[4px] border border-transparent bg-white p-4 shadow-lg transition-shadow duration-300 ease-in-out hover:shadow-xl"
          >
            <div
              class="absolute -left-2 -top-4 flex w-max gap-2 text-sm uppercase"
            >
              <p
                class="rounded-full border border-transparent bg-slate-300 bg-opacity-60 px-2 text-slate-800"
              >
                2 Flavours
              </p>
            </div>
            <div
              class="w-full self-center overflow-hidden rounded-[8px] border border-transparent"
            >
              <img
                class="h-auto w-full object-cover"
                src="./../../images/creatine.webp"
                alt="protein image"
              />
            </div>
            <div>
              <p class="text-slate-600">Creapure</p>
              <p class="text-lg font-bold">$25.99</p>
            </div>
            <p
              class="flex w-fit items-center rounded-[8px] bg-slate-100 px-2 py-1 text-sm lowercase text-slate-800"
            >
              natural
            </p>
            <a
              class="text-lg text-blue-500 hover:underline"
              href="./product-detail.html"
              >Creapure creatine</a
            >
            <p class="text-sm text-slate-800">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt
              iste optio magni.
            </p>
            <div
              class="mt-auto flex w-full flex-col items-end justify-end gap-2 pt-2"
            >
              <button
                class="flex w-full transform items-center justify-center rounded-[8px] border border-transparent bg-blue-500 px-4 py-2 text-slate-100 duration-200 ease-in-out hover:bg-blue-600"
              >
                <svg
                  class="fill-slate-100"
                  xmlns="http://www.w3.org/2000/svg"
                  height="32"
                  viewBox="0 -960 960 960"
                  width="32"
                >
                  <path
                    d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z"
                  />
                </svg>
              </button>
            </div>
          </li>

          <li
            class="relative flex flex-col gap-1 rounded-[4px] border border-transparent bg-white p-4 shadow-lg transition-shadow duration-300 ease-in-out hover:shadow-xl"
          >
            <div
              class="absolute -left-2 -top-4 flex w-max gap-2 text-sm uppercase"
            >
              <p
                class="rounded-full border border-transparent bg-red-300 bg-opacity-70 px-2 text-red-900"
              >
                20% off
              </p>
              <p
                class="rounded-full border border-transparent bg-slate-300 bg-opacity-60 px-2 text-slate-800"
              >
                4 Flavours
              </p>
            </div>
            <div
              class="w-full self-center overflow-hidden rounded-[8px] border border-transparent"
            >
              <img
                class="h-auto w-full object-cover"
                src="./../../images/creatine-7-strong-brothers.webp"
                alt="protein image"
              />
            </div>
            <div>
              <p class="text-slate-600">7 Strong Brothers</p>
              <p class="flex gap-2 text-lg">
                <span class="font-bold text-red-600">$116.79</span>
                <span class="text-slate-600 line-through">$145.99</span>
              </p>
            </div>
            <p
              class="flex w-fit items-center rounded-[8px] bg-slate-100 px-2 py-1 text-sm lowercase text-slate-800"
            >
              Chocalate
            </p>
            <a
              class="text-lg text-blue-500 hover:underline"
              href="./product-detail.html"
              >Strongest creatine monohydrate</a
            >
            <p class="text-sm text-slate-800">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum quas
              asperiores sapiente! Deleniti, recusandae ullam.
            </p>
            <div
              class="mt-auto flex w-full flex-col items-end justify-end gap-2 pt-2"
            >
              <button
                class="flex w-full transform items-center justify-center rounded-[8px] border border-transparent bg-blue-500 px-4 py-2 text-slate-100 duration-200 ease-in-out hover:bg-blue-600"
              >
                <svg
                  class="fill-slate-100"
                  xmlns="http://www.w3.org/2000/svg"
                  height="32"
                  viewBox="0 -960 960 960"
                  width="32"
                >
                  <path
                    d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z"
                  />
                </svg>
              </button>
            </div>
          </li>

          <li
            class="relative flex flex-col gap-1 rounded-[4px] border border-transparent bg-white p-4 shadow-lg transition-shadow duration-300 ease-in-out hover:shadow-xl"
          >
            <div
              class="absolute -left-2 -top-4 flex w-max gap-2 text-sm uppercase"
            >
              <p
                class="rounded-full border border-transparent bg-red-300 bg-opacity-60 px-2 text-red-900"
              >
                20% off
              </p>
              <p
                class="rounded-full border border-transparent bg-slate-300 bg-opacity-60 px-2 text-slate-800"
              >
                1 Flavour
              </p>
            </div>
            <div
              class="w-full self-center overflow-hidden rounded-[8px] border border-transparent"
            >
              <img
                class="h-auto w-full object-cover"
                src="./../../images/protein-protein.webp"
                alt="protein image"
              />
            </div>
            <div>
              <p class="text-slate-600">PROtein</p>
              <p class="flex gap-2 text-lg">
                <span class="font-bold text-red-600">$36.79</span>
                <span class="text-slate-600 line-through">$45.99</span>
              </p>
            </div>
            <p
              class="flex w-fit items-center rounded-[8px] bg-slate-100 px-2 py-1 text-sm lowercase text-slate-800"
            >
              natural
            </p>
            <a
              class="text-lg text-blue-500 hover:underline"
              href="./product-detail.html"
              >Pure whey protein</a
            >
            <p class="text-sm text-slate-800">
              This is a very long desctiption of the product but only xy chars
              will be shown, the rest could be seen on the products detail
              page...
            </p>
            <div
              class="mt-auto flex w-full flex-col items-end justify-end gap-2 pt-2"
            >
              <button
                class="flex w-full transform items-center justify-center rounded-[8px] border border-transparent bg-blue-500 px-4 py-2 text-slate-100 duration-200 ease-in-out hover:bg-blue-600"
              >
                <svg
                  class="fill-slate-100"
                  xmlns="http://www.w3.org/2000/svg"
                  height="32"
                  viewBox="0 -960 960 960"
                  width="32"
                >
                  <path
                    d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z"
                  />
                </svg>
              </button>
            </div>
          </li>

          <li
            class="relative flex flex-col gap-1 rounded-[4px] border border-transparent bg-white p-4 shadow-lg transition-shadow duration-300 ease-in-out hover:shadow-xl"
          >
            <div
              class="absolute -left-2 -top-4 flex w-max gap-2 text-sm uppercase"
            >
              <p
                class="rounded-full border border-transparent bg-red-300 bg-opacity-70 px-2 text-red-900"
              >
                20% off
              </p>
              <p
                class="rounded-full border border-transparent bg-slate-300 bg-opacity-60 px-2 text-slate-800"
              >
                6 Flavours
              </p>
            </div>
            <div
              class="w-full self-center overflow-hidden rounded-[8px] border border-transparent"
            >
              <img
                class="h-auto w-full object-cover"
                src="./../../images/protein-furious.webp"
                alt="protein image"
              />
            </div>
            <div>
              <p class="text-slate-600">Furious</p>
              <p class="flex gap-2 text-lg">
                <span class="font-bold text-red-600">$71.92</span>
                <span class="text-slate-600 line-through">$89.90</span>
              </p>
            </div>
            <p
              class="flex w-fit items-center rounded-[8px] bg-slate-100 px-2 py-1 text-sm lowercase text-slate-800"
            >
              Strawberry
            </p>
            <a
              class="text-lg text-blue-500 hover:underline"
              href="./product-detail.html"
              >Delicious whey protein from grass-fed cows</a
            >
            <p class="text-sm text-slate-800">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Consequuntur, esse.
            </p>
            <div
              class="mt-auto flex w-full flex-col items-end justify-end gap-2 pt-2"
            >
              <button
                class="flex w-full transform items-center justify-center rounded-[8px] border border-transparent bg-blue-500 px-4 py-2 text-slate-100 duration-200 ease-in-out hover:bg-blue-600"
              >
                <svg
                  class="fill-slate-100"
                  xmlns="http://www.w3.org/2000/svg"
                  height="32"
                  viewBox="0 -960 960 960"
                  width="32"
                >
                  <path
                    d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z"
                  />
                </svg>
              </button>
            </div>
          </li>

          <li
            class="relative flex flex-col gap-1 rounded-[4px] border border-transparent bg-white p-4 shadow-lg transition-shadow duration-300 ease-in-out hover:shadow-xl"
          >
            <div
              class="absolute -left-2 -top-4 flex w-max gap-2 text-sm uppercase"
            >
              <p
                class="rounded-full border border-transparent bg-red-300 bg-opacity-70 px-2 text-orange-900"
              >
                20% off
              </p>
              <p
                class="rounded-full border border-transparent bg-slate-300 bg-opacity-60 px-2 text-slate-800"
              >
                2 Flavours
              </p>
            </div>
            <div
              class="w-full self-center overflow-hidden rounded-[8px] border border-transparent"
            >
              <img
                class="h-auto w-full object-cover"
                src="./../../images/creatine.webp"
                alt="protein image"
              />
            </div>
            <div>
              <p class="text-slate-600">Creapure</p>
              <p class="flex gap-2 text-lg">
                <span class="font-bold text-red-600">$20.79</span>
                <span class="text-slate-600 line-through">$25.99</span>
              </p>
            </div>
            <p
              class="flex w-fit items-center rounded-[8px] bg-slate-100 px-2 py-1 text-sm lowercase text-slate-800"
            >
              peach ice tea
            </p>
            <a
              class="text-lg text-blue-500 hover:underline"
              href="./product-detail.html"
              >Creapure creatine</a
            >
            <p class="text-sm text-slate-800">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt
              iste optio magni.
            </p>
            <div
              class="mt-auto flex w-full flex-col items-end justify-end gap-2 pt-2"
            >
              <button
                class="flex w-full transform items-center justify-center rounded-[8px] border border-transparent bg-blue-500 px-4 py-2 text-slate-100 duration-200 ease-in-out hover:bg-blue-600"
              >
                <svg
                  class="fill-slate-100"
                  xmlns="http://www.w3.org/2000/svg"
                  height="32"
                  viewBox="0 -960 960 960"
                  width="32"
                >
                  <path
                    d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z"
                  />
                </svg>
              </button>
            </div>
          </li>

          <li
            class="relative flex flex-col gap-1 rounded-[4px] border border-transparent bg-white p-4 shadow-lg transition-shadow duration-300 ease-in-out hover:shadow-xl"
          >
            <div
              class="absolute -left-2 -top-4 flex w-max gap-2 text-sm uppercase"
            >
              <p
                class="rounded-full border border-transparent bg-slate-300 bg-opacity-60 px-2 text-slate-800"
              >
                3 Flavours
              </p>
            </div>
            <div
              class="w-full self-center overflow-hidden rounded-[8px] border border-transparent"
            >
              <img
                class="h-auto w-full object-cover"
                src="./../../images/creatine-7-strong-brothers.webp"
                alt="protein image"
              />
            </div>
            <div>
              <p class="text-slate-600">7 Strong Brothers</p>
              <p class="text-lg font-bold">$145.99</p>
            </div>
            <p
              class="flex w-fit items-center rounded-[8px] bg-slate-100 px-2 py-1 text-sm lowercase text-slate-800"
            >
              natural
            </p>
            <a
              class="text-lg text-blue-500 hover:underline"
              href="./product-detail.html"
              >Strongest creatine monohydrate</a
            >
            <p class="text-sm text-slate-800">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum quas
              asperiores sapiente! Deleniti, recusandae ullam.
            </p>
            <div
              class="mt-auto flex w-full flex-col items-end justify-end gap-2 pt-2"
            >
              <button
                class="flex w-full transform items-center justify-center rounded-[8px] border border-transparent bg-blue-500 px-4 py-2 text-slate-100 duration-200 ease-in-out hover:bg-blue-600"
              >
                <svg
                  class="fill-slate-100"
                  xmlns="http://www.w3.org/2000/svg"
                  height="32"
                  viewBox="0 -960 960 960"
                  width="32"
                >
                  <path
                    d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z"
                  />
                </svg>
              </button>
            </div>
          </li>

          <li
            class="relative flex flex-col gap-1 rounded-[4px] border border-transparent bg-white p-4 shadow-lg transition-shadow duration-300 ease-in-out hover:shadow-xl"
          >
            <div
              class="absolute -left-2 -top-4 flex w-max gap-2 text-sm uppercase"
            >
              <p
                class="rounded-full border border-transparent bg-red-300 bg-opacity-60 px-2 text-red-900"
              >
                20% off
              </p>
              <p
                class="rounded-full border border-transparent bg-slate-300 bg-opacity-60 px-2 text-slate-800"
              >
                3 Flavours
              </p>
            </div>
            <div
              class="w-full self-center overflow-hidden rounded-[8px] border border-transparent"
            >
              <img
                class="h-auto w-full object-cover"
                src="./../../images/protein-protein.webp"
                alt="protein image"
              />
            </div>
            <div>
              <p class="text-slate-600">PROtein</p>
              <p class="flex gap-2 text-lg">
                <span class="font-bold text-red-600">$36.79</span>
                <span class="text-slate-600 line-through">$45.99</span>
              </p>
            </div>
            <p
              class="flex w-fit items-center rounded-[8px] bg-slate-100 px-2 py-1 text-sm lowercase text-slate-800"
            >
              Rocky Road
            </p>
            <a
              class="text-lg text-blue-500 hover:underline"
              href="./product-detail.html"
              >Pure whey protein</a
            >
            <p class="text-sm text-slate-800">
              This is a very long desctiption of the product but only xy chars
              will be shown, the rest could be seen on the products detail
              page...
            </p>
            <div
              class="mt-auto flex w-full flex-col items-end justify-end gap-2 pt-2"
            >
              <button
                class="flex w-full transform items-center justify-center rounded-[8px] border border-transparent bg-blue-500 px-4 py-2 text-slate-100 duration-200 ease-in-out hover:bg-blue-600"
              >
                <svg
                  class="fill-slate-100"
                  xmlns="http://www.w3.org/2000/svg"
                  height="32"
                  viewBox="0 -960 960 960"
                  width="32"
                >
                  <path
                    d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z"
                  />
                </svg>
              </button>
            </div>
          </li>

          <li
            class="relative flex flex-col gap-1 rounded-[4px] border border-transparent bg-white p-4 shadow-lg transition-shadow duration-300 ease-in-out hover:shadow-xl"
          >
            <div
              class="absolute -left-2 -top-4 flex w-max gap-2 text-sm uppercase"
            >
              <p
                class="rounded-full border border-transparent bg-red-300 bg-opacity-60 px-2 text-red-900"
              >
                20% off
              </p>
              <p
                class="rounded-full border border-transparent bg-slate-300 bg-opacity-60 px-2 text-slate-800"
              >
                8 Flavours
              </p>
            </div>
            <div
              class="w-full self-center overflow-hidden rounded-[8px] border border-transparent"
            >
              <img
                class="h-auto w-full object-cover"
                src="./../../images/protein-furious.webp"
                alt="protein image"
              />
            </div>
            <div>
              <p class="text-slate-600">Furious</p>
              <p class="flex gap-2 text-lg">
                <span class="font-bold text-red-600">$71.92</span>
                <span class="text-slate-600 line-through">$89.90</span>
              </p>
            </div>
            <p
              class="flex w-fit items-center rounded-[8px] bg-slate-100 px-2 py-1 text-sm lowercase text-slate-800"
            >
              Caramel capuccino
            </p>
            <a
              class="text-lg text-blue-500 hover:underline"
              href="./product-detail.html"
              >Delicious whey protein from grass-fed cows</a
            >
            <p class="text-sm text-slate-800">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Consequuntur, esse.
            </p>
            <div
              class="mt-auto flex w-full flex-col items-end justify-end gap-2 pt-2"
            >
              <button
                class="flex w-full transform items-center justify-center rounded-[8px] border border-transparent bg-blue-500 px-4 py-2 text-slate-100 duration-200 ease-in-out hover:bg-blue-600"
              >
                <svg
                  class="fill-slate-100"
                  xmlns="http://www.w3.org/2000/svg"
                  height="32"
                  viewBox="0 -960 960 960"
                  width="32"
                >
                  <path
                    d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z"
                  />
                </svg>
              </button>
            </div>
          </li>

          <li
            class="relative flex flex-col gap-1 rounded-[4px] border border-transparent bg-white p-4 shadow-lg transition-shadow duration-300 ease-in-out hover:shadow-xl"
          >
            <div
              class="absolute -left-2 -top-4 flex w-max gap-2 text-sm uppercase"
            >
              <p
                class="rounded-full border border-transparent bg-slate-300 bg-opacity-60 px-2 text-slate-800"
              >
                3 Flavours
              </p>
            </div>
            <div
              class="w-full self-center overflow-hidden rounded-[8px] border border-transparent"
            >
              <img
                class="h-auto w-full object-cover"
                src="./../../images/creatine.webp"
                alt="protein image"
              />
            </div>
            <div>
              <p class="text-slate-600">Creapure</p>
              <p class="text-lg font-bold">$25.99</p>
            </div>
            <p
              class="flex w-fit items-center rounded-[8px] bg-slate-100 px-2 py-1 text-sm lowercase text-slate-800"
            >
              orange
            </p>
            <a
              class="text-lg text-blue-500 hover:underline"
              href="./product-detail.html"
              >Creapure creatine</a
            >
            <p class="text-sm text-slate-800">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt
              iste optio magni.
            </p>
            <div
              class="mt-auto flex w-full flex-col items-end justify-end gap-2 pt-2"
            >
              <button
                class="flex w-full transform items-center justify-center rounded-[8px] border border-transparent bg-blue-500 px-4 py-2 text-slate-100 duration-200 ease-in-out hover:bg-blue-600"
              >
                <svg
                  class="fill-slate-100"
                  xmlns="http://www.w3.org/2000/svg"
                  height="32"
                  viewBox="0 -960 960 960"
                  width="32"
                >
                  <path
                    d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z"
                  />
                </svg>
              </button>
            </div>
          </li>

          <li
            class="relative flex flex-col gap-1 rounded-[4px] border border-transparent bg-white p-4 shadow-lg transition-shadow duration-300 ease-in-out hover:shadow-xl"
          >
            <div
              class="absolute -left-2 -top-4 flex w-max gap-2 text-sm uppercase"
            >
              <p
                class="rounded-full border border-transparent bg-red-300 bg-opacity-70 px-2 text-red-900"
              >
                20% off
              </p>
              <p
                class="rounded-full border border-transparent bg-slate-300 bg-opacity-60 px-2 text-slate-800"
              >
                9+ Flavours
              </p>
            </div>
            <div
              class="w-full self-center overflow-hidden rounded-[8px] border border-transparent"
            >
              <img
                class="h-auto w-full object-cover"
                src="./../../images/creatine-7-strong-brothers.webp"
                alt="protein image"
              />
            </div>
            <div>
              <p class="text-slate-600">7 Strong Brothers</p>
              <p class="flex gap-2 text-lg">
                <span class="font-bold text-red-600">$116.79</span>
                <span class="text-slate-600 line-through">$145.99</span>
              </p>
            </div>
            <p
              class="flex w-fit items-center rounded-[8px] bg-slate-100 px-2 py-1 text-sm lowercase text-slate-800"
            >
              Fruit punch
            </p>
            <a
              class="text-lg text-blue-500 hover:underline"
              href="./product-detail.html"
              >Strongest creatine monohydrate</a
            >
            <p class="text-sm text-slate-800">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum quas
              asperiores sapiente! Deleniti, recusandae ullam.
            </p>
            <div
              class="mt-auto flex w-full flex-col items-end justify-end gap-2 pt-2"
            >
              <button
                class="flex w-full transform items-center justify-center rounded-[8px] border border-transparent bg-blue-500 px-4 py-2 text-slate-100 duration-200 ease-in-out hover:bg-blue-600"
              >
                <svg
                  class="fill-slate-100"
                  xmlns="http://www.w3.org/2000/svg"
                  height="32"
                  viewBox="0 -960 960 960"
                  width="32"
                >
                  <path
                    d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z"
                  />
                </svg>
              </button>
            </div>
          </li>
        </ul>
      </div>

      <!-- Pagination -->
      <nav
        class="ml-auto w-full scale-75 pb-8 pt-4 sm:scale-100 lg:w-3/4 lg:pt-8"
      >
        <ul class="flex items-center justify-center gap-4 text-slate-600">
          <li>
            <a
              class="flex h-12 w-12 items-center justify-center rounded-full border border-slate-500 bg-slate-100 transition duration-200 ease-in-out hover:bg-slate-200 active:bg-slate-300"
              href="#"
              ><svg
                class="h-3/4 w-3/5 stroke-slate-500"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M15 19l-7-7 7-7"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                /></svg
            ></a>
          </li>

          <li>
            <a
              class="cm-page__current flex h-10 w-10 items-center justify-center rounded-full border border-slate-500 bg-slate-100 transition duration-200 ease-in-out hover:bg-slate-200 active:bg-slate-300"
              href="#"
              >1</a
            >
          </li>

          <li>
            <a
              class="flex h-10 w-10 items-center justify-center rounded-full border border-slate-500 bg-slate-100 transition duration-200 ease-in-out hover:bg-slate-200 active:bg-slate-300"
              href="#"
              >2</a
            >
          </li>

          <li>
            <a
              class="flex h-10 w-10 items-center justify-center rounded-full border border-slate-500 bg-slate-100 transition duration-200 ease-in-out hover:bg-slate-200 active:bg-slate-300"
              href="#"
              >3</a
            >
          </li>

          <li>
            <a
              class="flex h-10 w-10 items-center justify-center rounded-full border border-slate-500 bg-slate-100 transition duration-200 ease-in-out hover:bg-slate-200 active:bg-slate-300"
              href="#"
              >4</a
            >
          </li>

          <li>
            <div
              class="flex h-10 w-10 items-center justify-center tracking-widest"
              href="#"
            >
              ...
            </div>
          </li>

          <li>
            <a
              class="flex h-10 w-10 items-center justify-center rounded-full border border-slate-500 bg-slate-100 transition duration-200 ease-in-out hover:bg-slate-200 active:bg-slate-300"
              href="#"
              >17</a
            >
          </li>

          <li class="rounded-full bg-slate-400">
            <a
              class="flex h-12 w-12 items-center justify-center rounded-full border border-slate-500 bg-slate-100 transition duration-200 ease-in-out hover:bg-slate-200 active:bg-slate-300"
              href="#"
              ><svg
                class="h-3/4 w-3/5 stroke-slate-500"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9 5l7 7-7 7"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                /></svg
            ></a>
          </li>
        </ul>
      </nav>
    </section>

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
