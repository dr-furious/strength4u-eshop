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
                <div class="flex flex-col gap-2">
                    <p class="block font-bold" for="secondary_desc">Media</p>
                    <label
                        for="uploadFile"
                        class="mx-auto flex h-52 w-80 cursor-pointer flex-col items-center justify-center rounded border-2 border-dashed border-gray-300 bg-white font-[sans-serif] text-base text-black"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="mb-2 w-8 fill-black"
                            viewBox="0 0 32 32"
                        >
                            <path
                                d="M23.75 11.044a7.99 7.99 0 0 0-15.5-.009A8 8 0 0 0 9 27h3a1 1 0 0 0 0-2H9a6 6 0 0 1-.035-12 1.038 1.038 0 0 0 1.1-.854 5.991 5.991 0 0 1 11.862 0A1.08 1.08 0 0 0 23 13a6 6 0 0 1 0 12h-3a1 1 0 0 0 0 2h3a8 8 0 0 0 .75-15.956z"
                                data-original="#000000"
                            />
                            <path
                                d="M20.293 19.707a1 1 0 0 0 1.414-1.414l-5-5a1 1 0 0 0-1.414 0l-5 5a1 1 0 0 0 1.414 1.414L15 16.414V29a1 1 0 0 0 2 0V16.414z"
                                data-original="#000000"
                            />
                        </svg>
                        Upload file
                        <input
                            type="file"
                            id="uploadFile"
                            class="hidden"
                            onchange="previewImage()"
                            multiple
                        />
                        <span class="mt-2 text-xs text-gray-400">
                PNG, JPG, SVG, WEBP, and GIF are Allowed.
              </span>
                    </label>
                    <!-- Image preview section -->
                    <div
                        id="imagePreview"
                        class="mt-4 flex flex-wrap justify-center gap-2"
                    ></div>
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

