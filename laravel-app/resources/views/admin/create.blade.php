@extends("layouts.app")

@section("title", "Admin - Add")

@section("content")

    <main class="flex max-w-screen-xl flex-col px-2 lg:mb-8 xl:m-auto">
        <h2 class="mt-8 p-4 text-4xl font-bold text-slate-800">
            Admin Panel - Add New Product
        </h2>
        <section
            class="mt-8 flex w-full flex-col rounded-[4px] bg-white px-8 py-4"
        >
            <form
                class="mt-4 flex min-h-[60vh] flex-col gap-12"
                action="/admin/"
                method="post"
                enctype="multipart/form-data"
            >
                {{ csrf_field() }}
                <!-- Title -->
                <div class="flex flex-col gap-2">
                    <label class="cm-required block font-bold" for="title">
                        Product Title
                    </label>
                    <input
                        class="w-full rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                        id="title"
                        name="title"
                        placeholder="Product title (max 50 symbols)"
                        type="text"
                        required
                        maxlength="50"
                    />
                </div>

                <!-- Main Description -->
                <div class="flex flex-col gap-2">
                    <label class="cm-required block font-bold" for="desc">
                        Product Main Description
                    </label>
                    <textarea
                        class="w-full rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                        id="desc"
                        name="desc"
                        placeholder="Product Description (max 600 symbols, after 2 ENTER`s auto new paragraph, max 4 paragraph)"
                        type="text"
                        maxlength="600"
                        rows="4"
                        required
                    ></textarea>
                </div>

                <!-- Secondary Description -->
                <div class="flex flex-col gap-2">
                    <label class="block font-bold" for="secondary_desc">
                        Product Secondary Description
                    </label>
                    <textarea
                        class="w-full rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                        id="secondary_desc"
                        name="secondary_desc"
                        placeholder="Product Secondary Description (max 600 symbols, after 2 ENTER`s auto new paragraph, max 4 paragraph)"
                        type="text"
                        maxlength="600"
                        rows="4"
                    ></textarea>
                </div>

                <!-- image -->
                <div class="flex flex-col gap-2">
                    <p class="block font-bold">Media</p>
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
                            name="uploaded_files[]"
                            class="hidden"
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
                    <label class="cm-required block font-bold" for="category">
                        Category
                    </label>
                    <select
                        id="category"
                        name="category"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                        required
                    >
                        <option value="">Select a category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category }}">{{ $category }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Vendor -->
                <div class="flex flex-col gap-2">
                    <label class="cm-required block font-bold" for="vendor"
                    >Vendor</label
                    >
                    <select
                        id="vendor"
                        name="vendor"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                        onchange="toggleNewVendorInput()"
                        required
                    >
                        <option value="">Select a vendor</option>
                        @foreach($vendors as $vendor)
                            <option value="{{ $vendor }}">{{ $vendor }}</option>
                        @endforeach
                    </select>
                </div>
                <!-- New vendor -->
                <div id="new_vendor_section" class="hidden flex-col gap-2">
                    <label class="cm-required block font-bold" for="new_vendor"
                    >New Vendor</label
                    >
                    <input
                        class="w-full rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                        id="new_vendor"
                        name="new_vendor"
                        placeholder="Type vendor that is not in the list ..."
                        type="text"
                        maxlength="25"
                    />
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
                    <!-- Product Entry Template -->
                    <template id="product-entry-template">
                        <x-flavour-size_admin/>
                    </template>
                </ul>

                <button
                    id="add-entry-btn"
                    type="button"
                    class="-mt-4 ml-auto w-2/12 rounded-[8px] border border-blue-600 px-6 py-3 text-blue-600 transition duration-200 ease-in-out hover:bg-slate-400 hover:bg-opacity-10"
                >
                    Add Entry
                </button>

                <!-- Add new flavour -->
                <div class="">
                    <label
                        for="new-flavor"
                        class="block text-sm font-medium capitalize text-gray-700"
                    >Add a new flavor:</label
                    >
                    <div class="mt-1 flex gap-2">
                        <input
                            type="text"
                            id="new-flavor"
                            class="w-10/12 rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                            placeholder="Enter a flavor (max 25 symbols)"
                            maxlength="25"
                        />
                        <button
                            type="button"
                            id="add-flavor"
                            class="w-2/12 rounded-[8px] border border-blue-600 px-6 py-1 text-blue-600 transition duration-200 ease-in-out hover:bg-slate-400 hover:bg-opacity-10"
                        >
                            Add
                        </button>
                    </div>
                </div>

                <!-- Add new size -->
                <div class="">
                    <label
                        for="new-flavor"
                        class="block text-sm font-medium capitalize text-gray-700"
                    >Add a new size:</label
                    >
                    <div class="mt-1 flex gap-2">
                        <input
                            type="text"
                            id="new-size"
                            class="w-10/12 rounded-md border border-[#e0e0e0] bg-white px-6 py-3 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                            placeholder="Enter a flavor (max 25 symbols)"
                            maxlength="25"
                        />
                        <button
                            type="button"
                            id="add-size"
                            class="w-2/12 rounded-[8px] border border-blue-600 px-6 py-1 text-blue-600 transition duration-200 ease-in-out hover:bg-slate-400 hover:bg-opacity-10"
                        >
                            Add
                        </button>
                    </div>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <button
                    class="mt-6 w-64 self-center rounded-md bg-blue-500 px-6 py-3 font-medium text-white outline-none transition duration-200 ease-in hover:bg-blue-600"
                    type="submit"
                >
                    Add New Product
                </button>
            </form>
        </section>
    </main>
@endsection
@push('scripts')
    <script>
        let flavours = @json($flavours);
        let sizes = @json($sizes);
    </script>
    @vite(['resources/js/nav_handlers.js', 'resources/js/admin_add_prod.js'])
@endpush

