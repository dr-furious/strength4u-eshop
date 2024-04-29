<!doctype html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>strength4u</title>
    @vite(['resources/css/app.css', 'resources/js/carousel-handler.js', 'resources/js/app.js'])
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

    <!-- Hero section -->
    <section
      id="index-hero"
      class="relative h-96 bg-cover bg-left"
    >
      <!-- image source: https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.goodfon.com%2Fsports%2Fwallpaper-vzgliad-poza-fitnes-muscle-myshtsy-press-atlet-trenazhery--2.html&psig=AOvVaw2aRlvOzRpAvhKRhCyPRjhW&ust=1709931702088000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCMiK6JWG44QDFQAAAAAdAAAAABAD -->
      <div class="absolute inset-0 bg-black opacity-60"></div>

      <div
        class="z-2 absolute bottom-24 left-6 flex flex-col items-start gap-6 pr-2 text-white md:left-20"
      >
        <h1 class="text-4xl font-bold capitalize">Make your workout count!</h1>
        <p class="text-lg font-light">
          Choose between the best supplements on the market. <br />
          It's fast, it's easy.
        </p>
        <a
          class="transform rounded-[8px] bg-blue-600 px-6 py-3 text-lg text-slate-100 duration-200 ease-in-out hover:bg-blue-700"
          href="./shop.html"
          >Shop now</a
        >
      </div>
    </section>

    <!-- Bestselleres section -->
    <section
      class="mx-4 flex flex-col items-center gap-8 pt-6 md:mt-12 lg:mx-16 xl:mx-24 2xl:mx-auto 2xl:max-w-[1280px]"
    >
      <h2 class="text-center text-3xl font-bold text-slate-800">Bestsellers</h2>
      <ul
        class="mt-4 grid grid-cols-1 gap-6 gap-y-10 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4"
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
              src="{{ Vite::asset('resources/assets/images/protein-protein.webp') }}"
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
            will be shown, the rest could be seen on the products detail page...
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
            will be shown, the rest could be seen on the products detail page...
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
            will be shown, the rest could be seen on the products detail page...
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
      <a
        class="transform rounded-[8px] bg-blue-600 px-6 py-3 text-lg text-slate-100 duration-200 ease-in-out hover:bg-blue-700"
        href="./shop.html"
        >Shop now</a
      >
    </section>

    <!-- Special offers section -->
    <section
      class="mx-4 flex flex-col items-center gap-8 pt-12 md:mt-8 xl:mx-24 2xl:mx-auto 2xl:max-w-[1280px]"
    >
      <h2 class="text-center text-3xl font-bold capitalize text-slate-800">
        Don't miss out this special offers!
      </h2>

      <ul
        class="mt-4 grid grid-cols-1 gap-6 gap-y-10 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4"
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
            will be shown, the rest could be seen on the products detail page...
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
              class="rounded-full border border-transparent bg-red-300 bg-opacity-60 px-2 text-red-900"
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
            will be shown, the rest could be seen on the products detail page...
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
              class="rounded-full border border-transparent bg-red-300 bg-opacity-70 px-2 text-red-900"
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
            will be shown, the rest could be seen on the products detail page...
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
              class="rounded-full border border-transparent bg-red-300 bg-opacity-70 px-2 text-orange-900"
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
      <a
        class="transform rounded-[8px] bg-blue-600 px-6 py-3 text-lg text-slate-100 duration-200 ease-in-out hover:bg-blue-700"
        href="./shop.html"
        >Shop now</a
      >
    </section>

    <!-- About us section-->
    <section
      id="about-us"
      class="mx-4 flex flex-col items-center gap-8 pt-12 md:mt-12 lg:mx-16 xl:mx-24 2xl:mx-auto 2xl:max-w-[1280px]"
    >
      <h2 class="text-center text-3xl font-bold capitalize text-slate-800">
        Our story
      </h2>

      <div
        class="mt-4 flex flex-col items-center gap-4 md:flex-row md:items-start md:justify-normal md:gap-6"
      >
        <div
          class="overflow-hidden rounded-[8px] border border-transparent md:w-1/2"
        >
          <img
            class="h-auto w-full rounded-[8px] border border-transparent object-cover"
            src={{ Vite::asset("resources/assets/images/man-biceps.jpg!d") }}
            alt="A black and white photo of man doing a biceps curl with a dumbell"
          />
        </div>
        <div
          class="font-lg flex w-full flex-col justify-start gap-4 text-slate-700 md:w-1/2 md:gap-8"
        >
          <p class="">
            At Strength4U, we believe that true strength starts from within.
            Founded on the principle that everyone deserves access to the
            building blocks of a healthy, vibrant life, our journey began with a
            simple mission: to bring high-quality dietary supplements directly
            to you. From the power-packed proteins to the vital amino acids,
            enriching vitamins, and beyond, every product we offer is selected
            with the utmost care and a deep understanding of the body's needs.
            Born out of a passion for wellness and fuelled by a commitment to
            excellence, Strength4U is more than just a brand; we're your trusted
            partner in the pursuit of strength, health, and vitality. Join us on
            this journey, and let's unlock the power of your potential together.
          </p>
          <a
            href="#"
            class="text-center text-lg font-bold text-blue-500 underline hover:text-blue-600 md:text-start"
            >Read full story</a
          >
        </div>
      </div>
    </section>

    <!-- Testimonials section -->
    <section
      class="mx-4 flex flex-col items-center gap-8 pt-12 md:mt-12 lg:mx-16 xl:mx-24 2xl:mx-auto 2xl:max-w-[1280px]"
    >
      <h2 class="text-center text-3xl font-bold capitalize text-slate-800">
        Trusted by you
      </h2>

      <div
        class="relative flex w-full max-w-full flex-col gap-1 rounded-[4px] border border-transparent bg-white px-8 py-4 shadow-md lg:px-16 lg:py-8"
      >
        <!-- left arrow button -->
        <button
          id="left-arrow-btn"
          class="custom-button-shadow bottom absolute left-0 top-1/2 hidden h-16 w-16 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full bg-white lg:flex"
        >
          <svg
            class="h-3/4 w-3/5 stroke-slate-500 transition duration-200 ease-in-out hover:stroke-blue-500 active:stroke-blue-600"
            fill="none"
            stroke="currentColor"
            stroke-width="3"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M15 19l-7-7 7-7"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
        </button>

        <!-- right arrow button -->
        <button
          class="custom-button-shadow absolute right-0 top-1/2 hidden h-16 w-16 -translate-y-1/2 translate-x-1/2 items-center justify-center rounded-full bg-white lg:flex"
          id="right-arrow-btn"
        >
          <svg
            class="h-3/4 w-3/5 stroke-slate-500 transition duration-200 ease-in-out hover:stroke-blue-500 active:stroke-blue-600"
            fill="none"
            stroke="currentColor"
            stroke-width="3"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M9 5l7 7-7 7"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
        </button>

        <!-- carousel container -->
        <div id="carousel-container" class="flex flex-nowrap overflow-hidden">
          <!-- carousel item -->
          <div class="cm-carousel-item w-full flex-shrink-0">
            <div class="flex flex-col gap-4 md:flex-row lg:gap-8">
              <div class="overflow-hidden rounded-[8px] md:w-1/3">
                <img
                  class="h-full w-full max-w-full rounded-[8px] object-cover"
                  alt="Lewis Hamilton in F1 car"
                  src={{ Vite::asset("resources/assets/images/man2.jpg") }}
                />
              </div>
              <div class="flex flex-col-reverse gap-6 md:w-2/3 md:flex-col">
                <blockquote class="text-slate-800 lg:text-lg">
                  "Discovering strength4u's range of nutritional supplements has
                  significantly boosted my training sessions. The quality and
                  effectiveness of their products are unmatched, providing me
                  with the extra edge I need to push my limits."
                </blockquote>
                <div>
                  <p class="text-slate-700 lg:text-lg">
                    Einrí Kendal McAlister
                  </p>
                  <p class="capitalize text-slate-600">
                    Calysthenics Enthusiast
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- carousel item -->
          <div class="cm-carousel-item w-full flex-shrink-0">
            <div class="flex flex-col gap-4 md:flex-row lg:gap-8">
              <div class="overflow-hidden rounded-[8px] md:w-1/3">
                <img
                  class="h-full w-full max-w-full rounded-[8px] object-cover"
                  alt="Lewis Hamilton in F1 car"
                  src={{ Vite::asset("resources/assets/images/woman2.jpg") }}
                />
              </div>
              <div class="flex flex-col-reverse gap-6 md:w-2/3 md:flex-col">
                <blockquote class="text-slate-800 lg:text-lg">
                  "Creativity requires energy, and strength4u's supplements have
                  been a game-changer for me. Their products help me maintain my
                  focus and energy during long studio sessions, allowing my
                  creativity to flow uninterrupted."
                </blockquote>
                <div>
                  <p class="text-slate-700 lg:text-lg">
                    Mary Jane Michelangela
                  </p>
                  <p class="capitalize text-slate-600">Artist</p>
                </div>
              </div>
            </div>
          </div>

          <!-- carousel item -->
          <div class="cm-carousel-item w-full flex-shrink-0">
            <div class="flex flex-col gap-4 md:flex-row lg:gap-8">
              <div class="overflow-hidden rounded-[8px] md:w-1/3">
                <img
                  class="h-full w-full max-w-full rounded-[8px] object-cover"
                  alt="Lewis Hamilton in F1 car"
                  src={{ Vite::asset("resources/assets/images/man1.jpg") }}
                />
              </div>
              <div class="flex flex-col-reverse gap-6 md:w-2/3 md:flex-col">
                <blockquote class="text-slate-800 lg:text-lg">
                  "In the world of data analysis, mental clarity and focus are
                  paramount. Vitamins and minerals are a must for brain health -
                  and strength4u offers the best ones. They have made a
                  noticeable difference in my ability to concentrate and work
                  efficiently on complex problems."
                </blockquote>
                <div>
                  <p class="text-slate-700 lg:text-lg">Ebrahim Ali Jafari</p>
                  <p class="capitalize text-slate-600">Data Analyst</p>
                </div>
              </div>
            </div>
          </div>

          <!-- carousel item -->
          <div class="cm-carousel-item w-full flex-shrink-0">
            <div class="flex flex-col gap-4 md:flex-row lg:gap-8">
              <div class="overflow-hidden rounded-[8px] md:w-1/3">
                <img
                  class="h-full w-full max-w-full rounded-[8px] object-cover"
                  alt="Lewis Hamilton in F1 car"
                  src={{ Vite::asset("resources/assets/images/woman1.jpg") }}
                />
              </div>
              <div class="flex flex-col-reverse gap-6 md:w-2/3 md:flex-col">
                <blockquote class="text-slate-800 lg:text-lg">
                  "As a professional athlete, my body is my tool, and
                  strength4u's supplements ensure it runs like a well-oiled
                  machine. Their amino acids and minerals are integral to my
                  training regimen, regeneration, and success."
                </blockquote>
                <div>
                  <p class="text-slate-700 lg:text-lg">Iris Sundberg</p>
                  <p class="capitalize text-slate-600">Athlete</p>
                </div>
              </div>
            </div>
          </div>

          <!-- carousel item -->
          <div class="cm-carousel-item w-full flex-shrink-0">
            <div class="flex flex-col gap-4 md:flex-row lg:gap-8">
              <div class="overflow-hidden rounded-[8px] md:w-1/3">
                <img
                  class="h-full w-full max-w-full rounded-[8px] object-cover"
                  alt="Lewis Hamilton in F1 car"
                  src={{ Vite::asset("resources/assets/images/man3.jpeg") }}
                />
              </div>
              <div class="flex flex-col-reverse gap-6 md:w-2/3 md:flex-col">
                <blockquote class="text-slate-700 lg:text-lg">
                  "Managing a fast-paced work environment demands both physical
                  and mental stamina. Energy supplements keep me sharp and
                  energized, enabling me to lead my team effectively and handle
                  challenges with ease - deffinitely recommend!"
                </blockquote>
                <div>
                  <p class="text-slate-800 lg:text-lg">Kaden Barrett</p>
                  <p class="capitalize text-slate-900">Manager</p>
                </div>
              </div>
            </div>
          </div>

          <!-- carousel item -->
          <div class="cm-carousel-item w-full flex-shrink-0">
            <div class="flex flex-col gap-4 md:flex-row lg:gap-8">
              <div class="max-h-[200px] overflow-hidden rounded-[8px] md:w-1/3">
                <img
                  class="h-full w-full max-w-full rounded-[8px] object-cover"
                  alt="Lewis Hamilton in F1 car"
                  src={{ Vite::asset("resources/assets/images/woman3.jpeg") }}
                />
              </div>
              <div class="flex flex-col-reverse gap-6 md:w-2/3 md:flex-col">
                <blockquote class="text-slate-800 lg:text-lg">
                  "Balancing client meetings, design projects, and tight
                  deadlines can be overwhelming. Thanks to strength4u and their
                  stress management supplements, I can maintain my calm,
                  creativity, and focus, ensuring every space I design reflects
                  perfection."
                </blockquote>
                <div>
                  <p class="text-slate-700 lg:text-lg">
                    Marie-Claire Éloïse Boucher
                  </p>
                  <p class="capitalize text-slate-600">Interior Designer</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Circle nav buttons -->
      <div id="circle-btns" class="flex items-center justify-center gap-3">
        <!-- Left mobile button -->
        <button id="left-mobile-btn" class="h-8 w-8 lg:hidden">
          <svg
            class="stroke-slate-700 transition duration-200 ease-in-out hover:stroke-blue-500 active:stroke-blue-600"
            fill="none"
            stroke="currentColor"
            stroke-width="3"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M15 19l-7-7 7-7"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
        </button>

        <button
          class="cm-circle-btn h-4 w-4 rounded-full border-2 border-slate-500 transition duration-200 ease-in-out hover:border-slate-700"
        ></button>
        <button
          class="cm-circle-btn h-4 w-4 rounded-full border-2 border-slate-500 transition duration-200 ease-in-out hover:border-slate-700"
        ></button>
        <button
          class="cm-circle-btn hover:border-slate-90 h-4 w-4 rounded-full border-2 border-slate-500 transition duration-200 ease-in-out hover:border-slate-700"
        ></button>
        <button
          class="cm-circle-btn h-4 w-4 rounded-full border-2 border-slate-500 transition duration-200 ease-in-out hover:border-slate-700"
        ></button>
        <button
          class="cm-circle-btn h-4 w-4 rounded-full border-2 border-slate-500 transition duration-200 ease-in-out hover:border-slate-700"
        ></button>

        <button
          class="cm-circle-btn h-4 w-4 rounded-full border-2 border-slate-500 transition duration-200 ease-in-out hover:border-slate-700"
        ></button>

        <!-- Right mobile button -->
        <button id="right-mobile-btn" class="h-8 w-8 lg:hidden">
          <svg
            class="stroke-slate-700 transition duration-200 ease-in-out hover:stroke-blue-500 active:stroke-blue-600"
            fill="none"
            stroke="currentColor"
            stroke-width="3"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M9 5l7 7-7 7"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
        </button>
      </div>
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
                src={{ Vite::asset("resources/assets/icons/instagram-svgrepo-com.svg") }}
                alt="instagram icon"
              />
            </a>
          </li>
          <li>
            <a class="flex h-12 w-12 items-center justify-center" href="#">
              <img
                class="h-10 w-10"
                src={{ Vite::asset("resources/assets/icons/facebook-svgrepo-com.svg") }}
                alt="facebook icon"
              />
            </a>
          </li>
          <li>
            <a class="flex h-12 w-12 items-center justify-center" href="#">
              <img
                class="h-10 w-10"
                src={{ Vite::asset("resources/assets/icons/twitter-color-svgrepo.svg") }}
                alt="facebook icon"
              />
            </a>
          </li>
          <li>
            <a class="flex h-12 w-12 items-center justify-center" href="#">
              <img
                class="h-10 w-10"
                src={{ Vite::asset("resources/assets/icons/youtube-svgrepo-com.svg") }}
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
