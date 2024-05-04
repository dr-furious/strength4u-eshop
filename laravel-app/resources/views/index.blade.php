@extends("layouts.app")

@section("title", "Home")

@section("content")
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
        @foreach ($popularProducts as $popularProduct)
        <li class="relative flex flex-col gap-1 rounded-[4px] border border-transparent bg-white p-4 shadow-lg transition-shadow duration-300 ease-in-out hover:shadow-xl">
            <div class="absolute -left-2 -top-4 flex w-max gap-2 text-sm uppercase">
                <p class="rounded-full border border-transparent bg-red-300 bg-opacity-60 px-2 text-red-900">
                    {{ $popularProduct->discount_percentage }}% off
                </p>
                <p class="rounded-full border border-transparent bg-slate-300 bg-opacity-60 px-2 text-slate-800">
                    {{ "0" }}+ Flavours
                </p>
            </div>
            <div class="w-full self-center overflow-hidden rounded-[8px] border border-transparent">
                <img class="h-auto w-full object-cover" src="{{ asset('storage/'.$popularProduct->image) }}" alt="{{ $popularProduct->name }} image">
            </div>
            <div>
                <p class="text-slate-600">{{ $popularProduct->name }}</p>
                <p class="flex gap-2 text-lg">
                    <span class="font-bold text-red-600">${{ number_format($popularProduct->price_in_dollars - ($popularProduct->price_in_dollars * $popularProduct->discount_percentage / 100), 2) }}

                    </span>
                    <span class="text-slate-600 line-through">${{ $popularProduct->price_in_dollars }}</span>
                </p>
            </div>
            <div>
              <span class="inline-flex w-fit items-center rounded-[8px] bg-slate-100 px-2 py-1 text-sm lowercase text-slate-800">
                {{ $popularProduct->flavour_label }}
              </span>
              <span class="inline-flex w-fit items-center rounded-[8px] bg-slate-100 px-2 py-1 text-sm lowercase text-slate-800">
                {{ $popularProduct->size_label }}
              </span>
            </div>
            <a class="text-lg text-blue-500 hover:underline" href="{{ route('product-detail') }}"> {{ $popularProduct->name }}</a>
            <p class="text-sm text-slate-800">
                {{ Str::limit($popularProduct->main_description, 100) }} <!-- Limit to 100 chars -->
            </p>
            <div class="mt-auto flex w-full flex-col items-end justify-end gap-2 pt-2">
                <button class="flex w-full transform items-center justify-center rounded-[8px] border border-transparent bg-blue-500 px-4 py-2 text-slate-100 duration-200 ease-in-out hover:bg-blue-600">
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
        @endforeach
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
      @foreach ($bestSellingProducts as $bestSellingProduct)
        <li class="relative flex flex-col gap-1 rounded-[4px] border border-transparent bg-white p-4 shadow-lg transition-shadow duration-300 ease-in-out hover:shadow-xl">
            <div class="absolute -left-2 -top-4 flex w-max gap-2 text-sm uppercase">
                <p class="rounded-full border border-transparent bg-red-300 bg-opacity-60 px-2 text-red-900">
                    {{ $bestSellingProduct->discount_percentage }}% off
                </p>
                <p class="rounded-full border border-transparent bg-slate-300 bg-opacity-60 px-2 text-slate-800">
                    {{ "0" }}+ Flavours
                </p>
            </div>
            <div class="w-full self-center overflow-hidden rounded-[8px] border border-transparent">
                <img class="h-auto w-full object-cover" src="{{ asset('storage/'.$bestSellingProduct->image) }}" alt="{{ $bestSellingProduct->name }} image">
            </div>
            <div>
                <p class="text-slate-600">{{ $bestSellingProduct->name }}</p>
                <p class="flex gap-2 text-lg">
                    <span class="font-bold text-red-600">${{ number_format($bestSellingProduct->price_in_dollars - ($bestSellingProduct->price_in_dollars * $bestSellingProduct->discount_percentage / 100), 2) }}

                    </span>
                    <span class="text-slate-600 line-through">${{ $bestSellingProduct->price_in_dollars }}</span>
                </p>
            </div>
            <div>
              <span class="inline-flex w-fit items-center rounded-[8px] bg-slate-100 px-2 py-1 text-sm lowercase text-slate-800">
                {{ $bestSellingProduct->flavour_label }}
              </span>
              <span class="inline-flex w-fit items-center rounded-[8px] bg-slate-100 px-2 py-1 text-sm lowercase text-slate-800">
                {{ $bestSellingProduct->size_label }}
              </span>
            </div>
            <a class="text-lg text-blue-500 hover:underline" href="{{ route('product-detail') }}"> {{ $bestSellingProduct->name }}</a>
            <p class="text-sm text-slate-800">
                {{ Str::limit($bestSellingProduct->main_description, 100) }} <!-- Limit to 100 chars -->
            </p>
            <div class="mt-auto flex w-full flex-col items-end justify-end gap-2 pt-2">
                <button class="flex w-full transform items-center justify-center rounded-[8px] border border-transparent bg-blue-500 px-4 py-2 text-slate-100 duration-200 ease-in-out hover:bg-blue-600">
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
      @endforeach
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

        @for ($i = 0; $i < 6; $i++)
        <button
          class="cm-circle-btn h-4 w-4 rounded-full border-2 border-slate-500 transition duration-200 ease-in-out hover:border-slate-700"
        ></button>
        @endfor

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
@endsection

@push('scripts')
    @vite(["resources/js/nav_handlers.js"])
@endpush