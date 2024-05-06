@extends("layouts.app")

@section("title", "Shop")

@section("content")
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
              class="mt-4 font-medium max-h-80 overflow-y-auto transition-all duration-200 ease-in-out"
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
              class="mt-4 font-medium max-h-80 overflow-y-auto transition-all duration-200 ease-in-out"
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
              class="mt-4 font-medium max-h-0 overflow-y-auto transition-all duration-200 ease-in-out"
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
              class="mt-4 font-medium max-h-0 overflow-y-auto transition-all duration-200 ease-in-out"
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

          <button class="mt-4 px-4 py-2 border border-slate-500 rounded-[8px] text-slate-700 bg-slate-50 hover:bg-white transition-colors duration-200">
            Apply Filters
          </button>
        </div>

        <!-- Products -->
        <ul
          class="grid grid-cols-1 gap-6 gap-y-10 sm:grid-cols-2 md:grid-cols-3 lg:w-3/4"
        >
        @forelse ($data as $item)
            
        @empty
            <p>No products</p>
        @endforelse
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

@endsection

@push("scripts")
@vite(['resources/js/ordering-filter_handlers.js'])
@endpush