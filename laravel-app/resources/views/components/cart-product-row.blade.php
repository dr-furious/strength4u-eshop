@props(["stock_item", "quantity"])

<!-- Product -->
<li id="cart-row-{{ $stock_item->id }}"
  class="grid grid-cols-[2fr_1fr] justify-items-center gap-2 border-b border-slate-200 pb-2 text-slate-800 sm:grid-cols-[3fr_2fr] md:flex md:items-center md:justify-between md:gap-0">
  <div class="col-start-1 col-end-2 row-start-1 flex w-full gap-4 self-center md:w-5/12 md:gap-8">
    <div class="w-2/5 min-w-[40%] overflow-hidden rounded-[8px] sm:w-1/5 sm:min-w-[20%]">
      @foreach ($stock_item->product->images as $image)
        @if ($image->is_main)
          <img class="w-full rounded-[8px] bg-cover" src="{{ asset("storage/" . $image->name) }}" />
        @endif
      @endforeach
    </div>
    <div class="flex flex-col">
      <p class="text-sm font-bold text-slate-500">{{ $stock_item->product->vendor }}</p>
      <a class="text-blue-500 hover:underline"
        href="{{ route("product-detail", ["stock_id" => $stock_item->id]) }}">{{ $stock_item->product->name }}</a>
      <p class="flex gap-2 text-sm font-light lowercase text-slate-800">
        <span>{{ $stock_item->flavour->label }}</span>|
        <span>{{ $stock_item->size->label }}</span>
      </p>
    </div>
  </div>
  <div class="col-start-1 col-end-2 row-start-2 flex w-full justify-center justify-self-start md:w-2/12">
    <!--https://tailwindcomponents.com/component/number-input-counter -->
    <div class="custom-number-input flex w-full flex-row rounded-[8px] text-center md:w-4/6">
      <button
        class="cm-cart-dec-btn h-full w-1/4 cursor-pointer rounded-l-[8px] bg-slate-200 text-gray-600 transition duration-200 ease-in-out hover:bg-slate-300"
        data-action="decrement">
        <span class="m-auto text-2xl md:font-thin">−</span>
      </button>

      <input
        class="cm-cart-inc-btn text-md md:text-basecursor-default custom-number-input-rm-arrows flex w-2/4 items-center bg-primary-grey-100 text-center font-light text-slate-700 outline-none focus:bg-blue-50 focus:bg-opacity-70 focus:outline-none"
        min="0" name="custom-input-number" type="number" value="{{ $quantity }}" />
      <button
        class="h-full w-1/4 cursor-pointer rounded-r-[8px] bg-slate-200 text-gray-600 transition duration-200 ease-in-out hover:bg-slate-300"
        data-action="increment">
        <span class="m-auto text-2xl md:font-thin">+</span>
      </button>
    </div>
  </div>

  <!-- Price per piece-->
  <div class="hidden w-2/12 text-center md:block">
    @if ($stock_item->discount_percentage > 0)
      <p class="text-slate-600 line-through">${{ $stock_item->price_in_dollars }}</p>
      <p class="font-bold text-red-600">
        ${{ number_format($stock_item->price_in_dollars - ($stock_item->price_in_dollars * $stock_item->discount_percentage) / 100, 2) }}
      </p>
    @else
      <p>${{ $stock_item->price_in_dollars }}
    @endif
    </p>
  </div>
  <!-- Price total -->
  <div class="w-2/12 text-center">
    @if ($stock_item->discount_percentage > 0)
      <p class="text-slate-600 line-through">${{ $stock_item->price_in_dollars * $quantity }}</p>
      <p class="font-bold text-red-600">
        ${{ number_format(($stock_item->price_in_dollars - ($stock_item->price_in_dollars * $stock_item->discount_percentage) / 100) * $quantity, 2) }}
      </p>
    @else
      <p>
        ${{ number_format($stock_item->price_in_dollars * $quantity, 2) }}
      </p>
    @endif
  </div>

  <div class="w-1/12 text-center">
    <button id="delete-btn-{{ $stock_item->id }}"
      class="cm-delete-btn rounded-full p-2 transition duration-200 ease-in-out hover:bg-slate-400 hover:bg-opacity-10 hover:text-red-600">
      <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
        width="24">
        <path
          d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
      </svg>
    </button>
  </div>
</li>
