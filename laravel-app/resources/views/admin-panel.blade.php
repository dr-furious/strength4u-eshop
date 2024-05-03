<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>strength4u</title>
    <link href="./../css/output.css" rel="stylesheet" />
    <script src="./../js/nav_handlers.js"></script>
  </head>
  <body class="bg-primary-grey-100 font-dm">
    <div class="bg-white px-4 py-4 text-xl font-bold">
      <a href="./index.html">strength4u</a>
    </div>
    <header class="sticky top-0 z-50">
      <nav
        class="flex items-center justify-end bg-primary-grey-100 px-4 py-4 font-light shadow-md"
      >
        <ul class="flex w-full items-center justify-end gap-8 px-14">
          <li class="relative mr-auto flex items-center text-lg">
            <a
              href="admin-panel.html"
              class="custom-underline-transition custom-number-bubble-after"
            >
              My Panel
            </a>
          </li>
          <li class="">
            <a
              class="transform rounded-[8px] bg-blue-600 px-4 py-2 capitalize text-slate-100 duration-200 ease-in-out hover:bg-blue-700"
              href="./add-product.html"
            >
              Add new
            </a>
          </li>
          <li class="relative flex items-center">
            <button
              id="user-btn"
              class="custom-underline-transition custom-number-bubble-after"
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
                class="absolute -right-4 -top-3 flex h-7 w-7 items-center justify-center rounded-full border border-primary-grey-100 border-transparent bg-green-500 bg-opacity-20"
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
            <div
              id="user-nav"
              class="absolute -right-1/2 top-full mt-2 hidden w-36 overflow-hidden rounded-[8px] border border-slate-200 bg-white text-slate-800 shadow-md lg:-right-full"
            >
              <ul class="flex flex-col">
                <li class="rounded-t-[8px]">
                  <a
                    id="login-link"
                    href="./index.html"
                    class="block px-4 py-2 hover:bg-gray-100 hover:text-red-600 hover:underline"
                    >Log out</a
                  >
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
    </header>

    <main class="mx-8 flex max-w-screen-xl flex-col px-2 lg:mb-8 xl:mx-auto">
      <section class="mt-8 flex w-full flex-col">
        <h2 class="p-4 text-4xl font-bold text-slate-800">Admin Panel</h2>

        <ul
          class="mt-4 flex min-h-[60vh] flex-col gap-4 rounded-[4px] bg-white p-4"
        >
          <li
            class="hidden justify-between border-b border-slate-400 pb-2 font-bold text-slate-800 md:flex"
          >
            <p class="w-[25%] text-center">Product</p>
            <p class="w-[15%] text-center">Category</p>
            <p class="w-[12.5%] text-center">Flavours</p>
            <p class="w-[12.5%] text-center">Amount</p>
            <p class="w-[12.5%] text-center">Discounted</p>
            <p class="w-[22.5%] text-center">Actions</p>
          </li>

          <!-- Product -->
          <li
            class="flex items-center border-b border-slate-200 pb-2 text-slate-800"
          >
            <div class="flex w-[25%] items-center gap-4">
              <div
                class="w-1/4 min-w-[25%] max-w-[25%] overflow-hidden rounded-[8px]"
              >
                <img
                  class="w-full bg-cover"
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
              </div>
            </div>
            <p class="w-[15%] text-center">Proteins</p>
            <p class="flex w-[12.5%] justify-center">14</p>
            <p class="w-[12.5%] text-center">10</p>
            <p class="w-[12.5%] text-center">5</p>
            <div class="flex w-[22.5%] items-center justify-center gap-4">
              <a
                href="edit-product.html"
                class="rounded-[8px] border border-blue-600 px-6 py-1 text-blue-600 transition duration-200 ease-in-out hover:bg-slate-400 hover:bg-opacity-10"
              >
                Edit
              </a>
              <button
                id=""
                class="rounded-[8px] border border-slate-400 border-opacity-10 bg-slate-400 bg-opacity-10 px-4 py-1 transition duration-200 ease-in-out hover:text-red-600"
              >
                Delete
              </button>
            </div>
          </li>

          <!-- Product -->
          <li
            class="flex items-center border-b border-slate-200 pb-2 text-slate-800"
          >
            <div class="flex w-[25%] items-center gap-4">
              <div
                class="w-1/4 min-w-[25%] max-w-[25%] overflow-hidden rounded-[8px]"
              >
                <img
                  class="w-full bg-cover"
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
              </div>
            </div>
            <p class="w-[15%] text-center">Proteins</p>
            <p class="flex w-[12.5%] justify-center">14</p>
            <p class="w-[12.5%] text-center">10</p>
            <p class="w-[12.5%] text-center">5</p>
            <div class="flex w-[22.5%] items-center justify-center gap-4">
              <a
                href="edit-product.html"
                class="rounded-[8px] border border-blue-600 px-6 py-1 text-blue-600 transition duration-200 ease-in-out hover:bg-slate-400 hover:bg-opacity-10"
              >
                Edit
              </a>
              <button
                id=""
                class="rounded-[8px] border border-slate-400 border-opacity-10 bg-slate-400 bg-opacity-10 px-4 py-1 transition duration-200 ease-in-out hover:text-red-600"
              >
                Delete
              </button>
            </div>
          </li>

          <!-- Product -->
          <li
            class="flex items-center border-b border-slate-200 pb-2 text-slate-800"
          >
            <div class="flex w-[25%] items-center gap-4">
              <div
                class="w-1/4 min-w-[25%] max-w-[25%] overflow-hidden rounded-[8px]"
              >
                <img class="w-full bg-cover" src="../../images/creatine.webp" />
              </div>
              <div class="flex flex-col">
                <p class="text-sm font-bold text-slate-500">Creapure</p>
                <a
                  class="text-blue-500 hover:underline"
                  href="./product-detail.html"
                  >Creapure creatine</a
                >
              </div>
            </div>
            <p class="w-[15%] text-center">Amino Acids</p>
            <p class="flex w-[12.5%] justify-center">2</p>
            <p class="w-[12.5%] text-center">1000</p>
            <p class="w-[12.5%] text-center">500</p>
            <div class="flex w-[22.5%] items-center justify-center gap-4">
              <a
                href="edit-product.html"
                class="rounded-[8px] border border-blue-600 px-6 py-1 text-blue-600 transition duration-200 ease-in-out hover:bg-slate-400 hover:bg-opacity-10"
              >
                Edit
              </a>
              <button
                id=""
                class="rounded-[8px] border border-slate-400 border-opacity-10 bg-slate-400 bg-opacity-10 px-4 py-1 transition duration-200 ease-in-out hover:text-red-600"
              >
                Delete
              </button>
            </div>
          </li>

          <!-- Product -->
          <li
            class="flex items-center border-b border-slate-200 pb-2 text-slate-800"
          >
            <div class="flex w-[25%] items-center gap-4">
              <div
                class="w-1/4 min-w-[25%] max-w-[25%] overflow-hidden rounded-[8px]"
              >
                <img
                  class="w-full bg-cover"
                  src="./../../images/creatine-7-strong-brothers.webp"
                />
              </div>
              <div class="flex flex-col">
                <p class="text-sm font-bold text-slate-500">
                  7 Strong Brothers
                </p>
                <a
                  class="text-blue-500 hover:underline"
                  href="./product-detail.html"
                  >Strongest creatine monohydrate</a
                >
              </div>
            </div>
            <p class="w-[15%] text-center">Amino Acids</p>
            <p class="flex w-[12.5%] justify-center">4</p>
            <p class="w-[12.5%] text-center">10000</p>
            <p class="w-[12.5%] text-center">5000</p>
            <div class="flex w-[22.5%] items-center justify-center gap-4">
              <a
                href="edit-product.html"
                class="rounded-[8px] border border-blue-600 px-6 py-1 text-blue-600 transition duration-200 ease-in-out hover:bg-slate-400 hover:bg-opacity-10"
              >
                Edit
              </a>
              <button
                id=""
                class="rounded-[8px] border border-slate-400 border-opacity-10 bg-slate-400 bg-opacity-10 px-4 py-1 transition duration-200 ease-in-out hover:text-red-600"
              >
                Delete
              </button>
            </div>
          </li>

          <!-- Product -->
          <li
            class="flex items-center border-b border-slate-200 pb-2 text-slate-800"
          >
            <div class="flex w-[25%] items-center gap-4">
              <div
                class="w-1/4 min-w-[25%] max-w-[25%] overflow-hidden rounded-[8px]"
              >
                <img
                  class="w-full bg-cover"
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
              </div>
            </div>
            <p class="w-[15%] text-center">Proteins</p>
            <p class="flex w-[12.5%] justify-center">14</p>
            <p class="w-[12.5%] text-center">10</p>
            <p class="w-[12.5%] text-center">5</p>
            <div class="flex w-[22.5%] items-center justify-center gap-4">
              <a
                href="edit-product.html"
                class="rounded-[8px] border border-blue-600 px-6 py-1 text-blue-600 transition duration-200 ease-in-out hover:bg-slate-400 hover:bg-opacity-10"
              >
                Edit
              </a>
              <button
                id=""
                class="rounded-[8px] border border-slate-400 border-opacity-10 bg-slate-400 bg-opacity-10 px-4 py-1 transition duration-200 ease-in-out hover:text-red-600"
              >
                Delete
              </button>
            </div>
          </li>

          <!-- Product -->
          <li
            class="flex items-center border-b border-slate-200 pb-2 text-slate-800"
          >
            <div class="flex w-[25%] items-center gap-4">
              <div
                class="w-1/4 min-w-[25%] max-w-[25%] overflow-hidden rounded-[8px]"
              >
                <img
                  class="w-full bg-cover"
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
              </div>
            </div>
            <p class="w-[15%] text-center">Proteins</p>
            <p class="flex w-[12.5%] justify-center">14</p>
            <p class="w-[12.5%] text-center">10</p>
            <p class="w-[12.5%] text-center">5</p>
            <div class="flex w-[22.5%] items-center justify-center gap-4">
              <a
                href="edit-product.html"
                class="rounded-[8px] border border-blue-600 px-6 py-1 text-blue-600 transition duration-200 ease-in-out hover:bg-slate-400 hover:bg-opacity-10"
              >
                Edit
              </a>
              <button
                id=""
                class="rounded-[8px] border border-slate-400 border-opacity-10 bg-slate-400 bg-opacity-10 px-4 py-1 transition duration-200 ease-in-out hover:text-red-600"
              >
                Delete
              </button>
            </div>
          </li>

          <!-- Product -->
          <li
            class="flex items-center border-b border-slate-200 pb-2 text-slate-800"
          >
            <div class="flex w-[25%] items-center gap-4">
              <div
                class="w-1/4 min-w-[25%] max-w-[25%] overflow-hidden rounded-[8px]"
              >
                <img class="w-full bg-cover" src="../../images/creatine.webp" />
              </div>
              <div class="flex flex-col">
                <p class="text-sm font-bold text-slate-500">Creapure</p>
                <a
                  class="text-blue-500 hover:underline"
                  href="./product-detail.html"
                  >Creapure creatine</a
                >
              </div>
            </div>
            <p class="w-[15%] text-center">Amino Acids</p>
            <p class="flex w-[12.5%] justify-center">2</p>
            <p class="w-[12.5%] text-center">1000</p>
            <p class="w-[12.5%] text-center">500</p>
            <div class="flex w-[22.5%] items-center justify-center gap-4">
              <a
                href="edit-product.html"
                class="rounded-[8px] border border-blue-600 px-6 py-1 text-blue-600 transition duration-200 ease-in-out hover:bg-slate-400 hover:bg-opacity-10"
              >
                Edit
              </a>
              <button
                id=""
                class="rounded-[8px] border border-slate-400 border-opacity-10 bg-slate-400 bg-opacity-10 px-4 py-1 transition duration-200 ease-in-out hover:text-red-600"
              >
                Delete
              </button>
            </div>
          </li>

          <!-- Product -->
          <li
            class="flex items-center border-b border-slate-200 pb-2 text-slate-800"
          >
            <div class="flex w-[25%] items-center gap-4">
              <div
                class="w-1/4 min-w-[25%] max-w-[25%] overflow-hidden rounded-[8px]"
              >
                <img
                  class="w-full bg-cover"
                  src="./../../images/creatine-7-strong-brothers.webp"
                />
              </div>
              <div class="flex flex-col">
                <p class="text-sm font-bold text-slate-500">
                  7 Strong Brothers
                </p>
                <a
                  class="text-blue-500 hover:underline"
                  href="./product-detail.html"
                  >Strongest creatine monohydrate</a
                >
              </div>
            </div>
            <p class="w-[15%] text-center">Amino Acids</p>
            <p class="flex w-[12.5%] justify-center">4</p>
            <p class="w-[12.5%] text-center">10000</p>
            <p class="w-[12.5%] text-center">5000</p>
            <div class="flex w-[22.5%] items-center justify-center gap-4">
              <a
                href="edit-product.html"
                class="rounded-[8px] border border-blue-600 px-6 py-1 text-blue-600 transition duration-200 ease-in-out hover:bg-slate-400 hover:bg-opacity-10"
              >
                Edit
              </a>
              <button
                id=""
                class="rounded-[8px] border border-slate-400 border-opacity-10 bg-slate-400 bg-opacity-10 px-4 py-1 transition duration-200 ease-in-out hover:text-red-600"
              >
                Delete
              </button>
            </div>
          </li>
        </ul>
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