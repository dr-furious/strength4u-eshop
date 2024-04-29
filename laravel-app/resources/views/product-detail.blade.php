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
  <body class="font-dm">
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

    <main
      class="mb-8 flex flex-col px-1 md:mt-8 md:flex-row md:px-4 2xl:mx-auto 2xl:max-w-[1280px]"
    >
      <section class="flex flex-col items-start justify-start md:w-1/2">
        <div class="mt-5 flex items-center justify-center">
          <img alt="" class="w-5/6 lg:w-2/3" src="./../../images/protein.png" />
        </div>
        <div class="mt-5 flex flex-row items-center justify-center">
          <img
            alt=""
            class="mx-2 w-1/4 md:w-1/5"
            src="./../../images/protein_back.png"
          />
          <img
            alt=""
            class="mx-2 w-1/4 md:w-1/5"
            src="./../../images/protein_upper.png"
          />
          <img
            alt=""
            class="mx-2 w-1/4 md:w-1/5"
            src="./../../images/protein_gym.png"
          />
        </div>
      </section>
      <section class="mx-5 flex flex-col items-start md:mx-0 md:w-1/2">
        <h2
          class="mb-5 mt-8 self-center text-4xl font-bold md:mb-10 md:mr-5 md:self-start md:text-6xl"
        >
          Whey Protein Ultra
        </h2>
        <h2 class="my-5 text-2xl font-bold md:text-4xl">$55.99</h2>
        <h3 class="mb-1 text-xl font-bold">Details Product</h3>
        <article class="text-base md:mr-10 xl:mr-40">
          <p>
            Highly nutritious whey protein with exceptional biological value,
            enriched with digestive enzymes for optimal absorption. A global
            bestseller, featuring premium whey protein isolate, complemented by
            whey protein concentrate and hydrolyzed whey isolate for
            comprehensive muscle support.
          </p>
          <br />
          <p>
            Each serving delivers not only the essential amino acids your body
            needs to thrive but also is fortified with digestive enzymes. This
            thoughtful addition guarantees optimal protein absorption and
            digestion, making it a gentle choice for your stomach while
            maximizing the nutritional benefits.
          </p>
        </article>

        <div class="mt-12 flex w-full flex-col justify-end gap-8 lg:w-8/12">
          <div class="flex w-full flex-row gap-4">
            <h3 class="my-auto mb-1 w-1/4 text-xl font-bold">Quantity</h3>
            <!--https://tailwindcomponents.com/component/number-input-counter -->
            <div
              class="custom-number-input flex h-10 w-3/4 flex-row rounded-[8px] text-center"
            >
              <button
                class="h-full w-1/4 cursor-pointer rounded-l-[8px] bg-slate-200 text-gray-600 transition duration-200 ease-in-out hover:bg-slate-300"
                data-action="decrement"
              >
                <span class="m-auto text-2xl font-thin">−</span>
              </button>

              <input
                class="text-md md:text-basecursor-default flex w-2/4 items-center bg-primary-grey-100 text-center font-light text-slate-700 outline-none focus:bg-blue-50 focus:outline-none"
                min="0"
                name="custom-input-number"
                type="number"
                value="0"
              />
              <button
                class="h-full w-1/4 cursor-pointer rounded-r-[8px] bg-slate-200 text-gray-600 transition duration-200 ease-in-out hover:bg-slate-300"
                data-action="increment"
              >
                <span class="m-auto text-2xl font-thin">+</span>
              </button>
            </div>
          </div>

          <!-- Flavour -->
          <div class="flex w-full flex-row gap-4">
            <h3 class="my-auto mb-1 w-1/4 min-w-20 text-xl font-bold">
              Flavour
            </h3>
            <div
              class="flex h-10 w-3/4 items-center justify-center text-center"
            >
              <select
                class="h-full w-full rounded-[8px] bg-slate-200 p-2 text-center outline-none focus:outline-none"
              >
                <option value="">Select Flavour</option>
                <option value="chocolate">Chocolate</option>
                <option value="vanilla">Vanilla</option>
                <option value="chocolate-mint">Chocolate-Mint</option>
                <option value="banana">Banana</option>
              </select>
            </div>
          </div>

          <!-- Size -->
          <div class="flex w-full flex-row gap-4">
            <h3 class="mb-1 w-1/4 min-w-20 text-xl font-bold">Size</h3>
            <div
              class="flex h-10 w-3/4 items-center justify-center text-center"
            >
              <select
                class="h-full w-full rounded-[8px] bg-slate-200 p-2 text-center outline-none focus:outline-none"
              >
                <option value="">Select Size</option>
                <option value="250g">250g</option>
                <option value="500g">500g</option>
                <option value="2025g">2025g</option>
                <option value="4000g">4000g</option>
              </select>
            </div>
          </div>

          <!-- Action button -->
          <div class="flex items-center justify-end text-center">
            <button
              class="flex flex-row rounded-lg bg-blue-600 px-6 py-3 text-white transition duration-200 ease-in hover:bg-blue-700 focus:outline-none"
            >
              Add to cart
              <svg
                class="ml-2 h-6 w-6"
                fill="none"
                stroke="currentColor"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                />
              </svg>
            </button>
          </div>
        </div>
      </section>
    </main>
    <div class="w-full bg-primary-grey-100">
      <section class="mx-5 flex max-w-screen-lg flex-col md:mx-auto md:w-1/2">
        <h2
          class=":text-2xl mb-5 mt-8 self-start font-bold md:mb-10 md:text-4xl"
        >
          Description
        </h2>
        <p>
          Introducing the ultimate whey protein powder crafted for the modern
          man, where unmatched taste meets supreme nutrition. This powerhouse
          protein blend is not just a supplement; it's a testament to strength,
          vigour, and the relentless pursuit of greatness. Each scoop is packed
          with high-quality, micro-filtered whey protein concentrate and
          isolate, delivering a whopping 25 grams of pure muscle-building
          protein to support recovery, muscle growth, and strength.
        </p>
        <br />
        <p>
          But it's not just about the protein. This blend is infused with a
          robust, manly flavour profile that sets it apart from the rest.
          Imagine the rich, deep taste of dark chocolate, seamlessly combined
          with the bold, earthy notes of espresso and a hint of smoky bourbon.
          It's a flavour that commands attention, satisfying the palate with
          every sip, making your protein shake not just a part of your routine,
          but a luxurious ritual.
        </p>
        <br />
        <p class="mb-16">
          Ultra Whey Protein is suitable for use in any sports, especially
          during intense strength training. It is ideal for supplementing the
          daily dose of protein with an active lifestyle that emphasizes
          accelerated muscle regeneration. Whether you want to gain volume or
          get rid of excess fat, Ultra Whey Protein is the right choice.
        </p>
      </section>
    </div>
    <footer class="bg-slate-800 px-4 py-4 text-white">
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
