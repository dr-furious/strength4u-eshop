@extends("layouts.app")

@section("title", "Product")

@section("content")
  <main class="mb-8 flex flex-col px-1 md:mt-8 md:flex-row md:px-4 2xl:mx-auto 2xl:max-w-[1280px]">
    <section class="flex flex-col items-start justify-start md:w-1/2">
      <div class="relative mt-5 flex items-center justify-center">
        @if ($stock_data->discount_percentage > 0)
          <p
            class="absolute -top-2 right-8 h-fit rounded-full border border-primary-grey-100 bg-red-200 px-4 py-2 uppercase text-red-800 md:-top-4 md:right-4 lg:right-16 xl:right-20 2xl:right-24">
            {{ $stock_data->discount_percentage }}% off</p>
        @endif
        @foreach ($stock_data->product->images as $image)
          @if ($image->is_main)
            <img class="w-5/6 rounded-[4px] lg:w-2/3" src="{{ asset("storage/" . $image->name) }}"
              alt="{{ $image->name }} image" />
          @endif
        @endforeach
      </div>
      <div class="mt-5 flex flex-row items-center justify-center">
        @foreach ($stock_data->product->images as $image)
          <img class="mx-2 w-1/4 rounded-[4px] md:w-1/5" src="{{ asset("storage/" . $image->name) }}"
            alt="{{ $image->name }} image" />
        @endforeach
      </div>
    </section>
    <section class="mx-5 flex flex-col items-start md:mx-0 md:w-1/2">
      <h2 class="mb-5 mt-8 self-center text-4xl font-bold md:mb-10 md:mr-5 md:self-start md:text-6xl">
        {{ $stock_data->product->name }}
      </h2>
      <div class="flex gap-6">
        @if ($stock_data->discount_percentage > 0)
          <p class="my-5 text-2xl font-bold text-red-600 md:text-4xl">
            ${{ number_format($stock_data->price_in_dollars - ($stock_data->price_in_dollars * $stock_data->discount_percentage) / 100, 2) }}
          </p>
          <p class="my-5 text-2xl text-slate-600 line-through md:text-4xl">${{ $stock_data->price_in_dollars }}</p>
        @else
          <p class="my-5 text-2xl font-bold text-slate-800 md:text-4xl">${{ $stock_data->price_in_dollars }}
          </p>
        @endif
      </div>
      <h3 class="mb-1 text-xl font-bold">Details Product</h3>
      <article class="text-base md:mr-10 xl:mr-40">
        <p>
          {{ $stock_data->product->main_description }}
        </p>
      </article>

      <div class="mt-12 flex w-full flex-col justify-end gap-8 lg:w-8/12">
        <div class="flex w-full flex-row gap-4">
          <h3 class="my-auto mb-1 w-1/4 text-xl font-bold">Quantity</h3>
          <!--https://tailwindcomponents.com/component/number-input-counter -->
          <div class="custom-number-input flex h-10 w-3/4 flex-row rounded-[8px] text-center">
            <button
              class="h-full w-1/4 cursor-pointer rounded-l-[8px] bg-slate-200 text-gray-600 transition duration-200 ease-in-out hover:bg-slate-300"
              data-action="decrement">
              <span class="m-auto text-2xl font-thin">−</span>
            </button>

            <input
              class="text-md md:text-basecursor-default flex w-2/4 items-center bg-primary-grey-100 text-center font-light text-slate-700 outline-none focus:bg-blue-50 focus:outline-none"
              min="0" name="custom-input-number" type="number" value="1" id="quantity-input" />
            <button
              class="h-full w-1/4 cursor-pointer rounded-r-[8px] bg-slate-200 text-gray-600 transition duration-200 ease-in-out hover:bg-slate-300"
              data-action="increment">
              <span class="m-auto text-2xl font-thin">+</span>
            </button>
          </div>
        </div>

        <!-- Flavour -->
        <div class="flex w-full flex-row gap-4">
          <h3 class="min-w-20 my-auto mb-1 w-1/4 text-xl font-bold">
            Flavour
          </h3>
          <div class="flex h-10 w-3/4 items-center justify-center text-center">
            <select id="flavours-select"
              class="h-full w-full rounded-[8px] bg-slate-200 p-2 text-center outline-none focus:outline-none">
              <option id="{{ $stock_data->id }}" value="{{ $stock_data->flavour->id }}">
                {{ $stock_data->flavour->label }}
              </option>
              @foreach ($flavours as $flavour)
                @if ($flavour->label != $stock_data->flavour->label)
                  <option id="{{ $next_stocks[$flavour->id] }}" value="{{ $flavour->id }}">{{ $flavour->label }}
                  </option>
                @endif
              @endforeach
            </select>
          </div>
        </div>

        <!-- Size -->
        <div class="flex w-full flex-row gap-4">
          <h3 class="min-w-20 mb-1 w-1/4 text-xl font-bold">Size</h3>
          <div class="flex h-10 w-3/4 items-center justify-center text-center">
            <select id="sizes-select"
              class="h-full w-full rounded-[8px] bg-slate-200 p-2 text-center outline-none focus:outline-none">
              <option value="{{ $stock_data->size->id }}">{{ $stock_data->size->label }}</option>
              @foreach ($sizes as $size)
                @if ($size->label != $stock_data->size->label)
                  <option value="{{ $size->id }}">{{ $size->label }}</option>
                @endif
              @endforeach
            </select>
          </div>
        </div>

        <!-- Action button -->
        <div class="flex items-center justify-end text-center">
          <button id="add-to-cart-btn"
            class="flex flex-row rounded-lg bg-blue-600 px-6 py-3 text-white transition duration-200 ease-in hover:bg-blue-700 focus:outline-none">
            Add to cart
            <svg class="ml-2 h-6 w-6" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
            </svg>
          </button>
        </div>
      </div>
    </section>
  </main>
  <div class="w-full bg-primary-grey-100">
    <section class="mx-5 flex max-w-screen-lg flex-col md:mx-auto md:w-1/2">
      <h2 class=":text-2xl mb-5 mt-8 self-start font-bold md:mb-10 md:text-4xl">
        Description
      </h2>
      <p>
        {{ $stock_data->product->secondary_description }}
      </p>
    </section>
  </div>
@endsection
@push("scripts")
  @vite(["resources/js/amount_handler.js", "resources/js/refresh_product_handler.js", "resources/js/product-detail_handlers.js"])
@endpush
