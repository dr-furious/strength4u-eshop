@extends("layouts.app")

@section("title", "Admin - Show")

@section("content")

    <main class="flex max-w-screen-xl flex-col px-2 lg:mb-8 xl:m-auto">
        <h2 class="mt-8 p-4 text-4xl font-bold text-slate-800">
            Admin Panel - Show Product
        </h2>
        <section
                class="mt-8 flex w-full flex-col rounded-[4px] bg-white px-8 py-4"
        >
            <div
                    class="mt-4 flex min-h-[60vh] flex-col gap-12"
            >
                <!-- Title -->
                <div class="flex flex-col gap-2">
                    <p class="block font-bold">
                        Product Title
                    <div
                            class="w-full rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md">
                        {{ $product_stock->first()->product->name }}
                    </div>
                </div>

                <!-- Main Description -->
                <div class="flex flex-col gap-2">
                    <p class=" block font-bold" for="desc">
                        Product Main Description
                    </p>
                    <div
                            class="w-full rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                    >{{ $product_stock->first()->product->main_description}}</div>
                </div>

                <!-- Secondary Description -->
                <div class="flex flex-col gap-2">
                    <p class="block font-bold">
                        Product Secondary Description
                    </p>
                    <div
                            class="w-full rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                    >{{ $product_stock->first()->product->secondary_description}}</div>
                </div>

                <!-- image -->
                <p class="block font-bold" for="secondary_desc">Media</p>
                <div id="imagePreview" class="mt-4 flex flex-wrap justify-center gap-2">
                    @foreach ($product_stock->first()->product->images as $image)
                        <img class="w-48 h-48 object-cover" src="{{ url('/images/'.$image->name) }}"
                             alt="{{ $image->name }} image"/>
                    @endforeach
                </div>

                <!-- Category -->
                <div class="flex flex-col gap-2">
                    <p class="block font-bold">
                        Category
                    </p>
                    <div

                            class="w-full rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                    >
                        {{ $product_stock->first()->product->category}}
                    </div>
                </div>

                <!-- Vendor -->
                <div class="flex flex-col gap-2">
                    <p class="block font-bold"
                    >Vendor</p
                    >
                    <div
                            class="w-full rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                    >
                        {{ $product_stock->first()->product->vendor}}
                    </div>
                </div>
                <ul class="flex flex-col gap-4" id="product-entries">
                    <li
                            class="hidden justify-between border-b border-slate-400 pb-2 font-bold text-slate-800 md:flex"
                    >
                        <p class="cm-required w-[18%]">Flavour</p>
                        <p class="cm-required w-[18%]">Size</p>
                        <p class="cm-required w-[18%]">Price</p>
                        <p class="cm-required w-[18%]">Discount</p>
                        <p class="cm-required w-[18%]">Amount</p>
                        <p class="w-[10%]"></p>
                    </li>
                    @foreach($product_stock as $stock_record)
                        <x-flavour-size_admin_show :stock_record=$stock_record/>
                    @endforeach
                </ul>
        </section>
    </main>
@endsection
@push('scripts')
    @vite(['resources/js/nav_handlers.js', 'resources/js/admin_add_prod.js'])
@endpush

