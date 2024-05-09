@props(["product"])

<li
    class="flex items-center border-b border-slate-200 pb-2 text-slate-800"
>
    <div class="flex w-[25%] items-center gap-4">
        <div
            class="w-1/4 min-w-[25%] max-w-[25%] overflow-hidden rounded-[8px]"
        >
            @foreach ($product->product->images as $image)
                @if ($image->is_main)
                    <img
                        class="w-full bg-cover"
                        src="{{ asset("storage/" . $image->name) }}"
                        alt="{{ $image->name }} image"
                    />
                @endif
            @endforeach
        </div>
        <div class="flex flex-col">
            <p class="text-sm font-bold text-slate-500">{{ $product->product->vendor }}</p>
            <a
                class="text-blue-500 hover:underline"
                href="/admin/{{ $product->product->id }}/"
            >{{ $product->product->name }}</a
            >
        </div>
    </div>
    <p class="w-[15%] text-center">{{ $product->product->category }}</p>
    <p class="flex w-[12.5%] justify-center">{{ $product->product->flavour_count }}</p>
    <p class="w-[12.5%] text-center">{{ $product->stock_amount }}</p>
    <p class="w-[12.5%] text-center">{{  $product->discount_percentage }}</p>
    <div class="flex w-[22.5%] items-center justify-center gap-4">
        <a
            href="/admin/{{ $product->product->id }}/edit/"
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
