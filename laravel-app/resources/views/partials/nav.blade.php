<nav
  class="relative flex max-w-screen-2xl items-center justify-between gap-8 bg-primary-grey-100 px-4 py-4 font-light lg:gap-20 xl:mx-auto xl:gap-24">
  <!-- this part of navbar disappears for devices with width bellow 768px -->
  <div id="mobile-nav"
    class="absolute left-0 right-0 top-full flex h-[20rem] max-h-[0] w-full flex-col-reverse items-start justify-end gap-8 overflow-hidden border-b-2 border-b-primary-grey-100 bg-black bg-opacity-95 shadow-2xl transition-all duration-500 ease-in-out md:static md:h-auto md:max-h-[unset] md:flex-row md:items-center md:justify-between md:border-none md:bg-inherit md:bg-opacity-100 md:p-0 md:shadow-none md:transition-none lg:gap-20 xl:gap-24">
    <ul class="flex w-fit flex-col gap-6 px-4 text-lg text-slate-100 md:flex-row md:text-inherit">
      <li>
        <a class="custom-underline-transition" href="{{ route("index") }}">Home</a>
      </li>
      <li>
        <a class="custom-underline-transition" href="{{ route("shop") }}">Shop</a>
      </li>
      <li>
        <a class="custom-underline-transition" href="{{ route("index") }}#about-us">About
        </a>
      </li>
    </ul>

    <form action="{{ route("shop-search") }}#shop" method="GET" class="relative mt-4 w-full px-4 md:mt-0">
      <label for="search-bar" class="hidden">Search</label>
      <input class="h-12 w-full rounded-[4px] border border-slate-200 px-4 font-light outline-blue-600" type="search"
        name="search" id="search-bar" placeholder="Search for your favourite product..." />
      <button type="submit" class="absolute right-6 inline-flex h-full items-center">
        <svg class="fill-slate-500" xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 -960 960 960"
          width="32">
          <path
            d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
        </svg>
      </button>
    </form>
  </div>

  <ul class="flex w-full items-center justify-end gap-8 md:w-fit">
    <!-- Burger icon to display menu for small devices bellow 768px -->
    <li class="mr-auto md:hidden" id="show-nav-li">
      <button id="show-mobile-nav-btn" class="">
        <svg class="inline-flex items-center fill-slate-800" xmlns="http://www.w3.org/2000/svg" height="32"
          viewBox="0 -960 960 960" width="32">
          <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
        </svg>
      </button>
    </li>

    <!-- Cross icon to hide menu for small devices bellow 768px -->
    <li class="mr-auto hidden md:hidden" id="hide-nav-li">
      <button id="hide-mobile-nav-btn" class="">
        <svg class="inline-flex items-center fill-slate-800" xmlns="http://www.w3.org/2000/svg" height="32"
          viewBox="0 -960 960 960" width="32">
          <path
            d="M256-192.348 192.348-256l224-224-224-224L256-767.652l224 224 224-224L767.652-704l-224 224 224 224L704-192.348l-224-224-224 224Z" />
        </svg>
      </button>
    </li>

    <li class="relative">
      <a class="custom-underline-transition custom-number-bubble-after flex cursor-pointer items-center"
        id="display-shopping-cart-btn">
        <svg class="fill-slate-800" xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 -960 960 960"
          width="32">
          <path
            d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68-39.5t-2-78.5l54-98-144-304H40v-80h130l38 80Zm134 280h280-280Z" />
        </svg>
        <div id="cart-items-count"
          class="absolute -right-4 -top-3 hidden h-7 w-7 items-center justify-center rounded-full border border-primary-grey-100 bg-slate-800 text-slate-100">
          9+
        </div>
      </a>
    </li>

    <li class="relative">
      <button id="user-btn" class="custom-underline-transition custom-number-bubble-after flex items-center">
        <svg class="fill-slate-800" xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 -960 960 960"
          width="32">
          <path
            d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z" />
        </svg>
        @if (auth()->check())
          <div id="user-signed"
            class="absolute -right-4 -top-3 flex h-7 w-7 items-center justify-center rounded-full border border-primary-grey-100 bg-green-500 bg-opacity-20">
            <svg class="fill-green-700" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
              width="24">
              <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
            </svg>
          </div>
        @endif
      </button>

      <!-- User navigation -->
      <div id="user-nav"
        class="absolute -right-1/2 top-full mt-2 hidden w-36 overflow-hidden rounded-[8px] border border-slate-200 bg-white text-slate-800 shadow-md lg:-right-full">
        <ul class="flex flex-col">
          @guest
            <li class="rounded-t-[8px]">
              <a id="login-link" href="{{ route("login") }}" class="block px-4 py-2 hover:bg-gray-100 hover:underline">Log
                in</a>
            </li>
            <li>
              <a id="signup-link" href="{{ route("register") }}"
                class="block px-4 py-2 hover:bg-gray-100 hover:underline">Sign up</a>
            </li>
          @endguest
          @if (auth()->check())
            <form method="POST" action="{{ route("logout") }}">
              @csrf
              <x-responsive-nav-link :href='route("logout")' onclick="event.preventDefault(); this.closest('form').submit();">
                {{ __("Log Out") }}
              </x-responsive-nav-link>
            </form>
          @endif
          @if (auth()->check() && Auth::user()->isAdministrator())
            <li class="rounded-b-[8px] border-t">
              <a id="admin-link" href="{{ route("admin") }}"
                class="block px-4 py-2 hover:bg-gray-100 hover:underline">Admin</a>
            </li>
          @endif
        </ul>
      </div>
    </li>
  </ul>
</nav>
