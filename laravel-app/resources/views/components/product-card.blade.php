@props(['product'])

<li class="relative flex flex-col gap-1 rounded-[4px] border border-transparent bg-white p-4 shadow-lg transition-shadow duration-300 ease-in-out hover:shadow-xl">
    <div class="absolute -left-2 -top-4 flex w-max gap-2 text-sm uppercase">
        <p class="rounded-full border border-transparent bg-red-300 bg-opacity-60 px-2 text-red-900">
            {{ $product->discount_percentage }}% off
        </p>
        @if ($product->product->flavour_count > 1)
        <p class="rounded-full border border-transparent bg-slate-300 bg-opacity-60 px-2 text-slate-800">
            {{ $product->product->flavour_count > 9 ? '9+' : $product->product->flavour_count }} Flavours
        </p>
        @endif
    </div>
    <div class="w-full self-center overflow-hidden rounded-[8px] border border-transparent">
        <img class="h-auto w-full object-cover" src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->product->name }} image">
    </div>
    <div>
        <p class="text-slate-600">{{ $product->product->vendor }}</p>
        <p class="flex gap-2 text-lg">
            <span class="font-bold text-red-600">${{ number_format($product->price_in_dollars - ($product->price_in_dollars * $product->discount_percentage / 100), 2) }}

            </span>
            <span class="text-slate-600 line-through">${{ $product->price_in_dollars }}</span>
        </p>
    </div>
    <div>
      <span class="inline-flex w-fit items-center rounded-[8px] bg-slate-100 px-2 py-1 text-sm lowercase text-slate-800">
        {{ $product->flavour->label }}
      </span>
      <span class="inline-flex w-fit items-center rounded-[8px] bg-slate-100 px-2 py-1 text-sm lowercase text-slate-800">
        {{ $product->size->label }}
      </span>
    </div>
    <a class="text-lg text-blue-500 hover:underline" href="{{ route('product-detail', ["product_id" => $product->id]) }}"> {{ $product->product->name }}</a>
    <p class="text-sm text-slate-800">
        {{ Str::limit($product->product->main_description, 90) }} <!-- Limit to 90 chars -->
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
