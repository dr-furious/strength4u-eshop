@extends("layouts.app")

@section("title", "Home")

@section("content")

    <main class="mx-8 flex max-w-screen-xl flex-col px-2 lg:mb-8 xl:mx-auto">
        <section class="mt-8 flex w-full flex-col">
            <h2 class="p-4 text-4xl font-bold text-slate-800">Admin Panel</h2>

            <ul
                class="mt-4 flex min-h-[60vh] flex-col gap-4 rounded-[4px] bg-white p-4"
            >
                <li
                    class="hidden justify-between border-b border-slate-400 pb-2 font-bold text-slate-800 md:flex"
                >
                    <p class="w-[25%] text-center">Product</p>
                    <p class="w-[15%] text-center">Category</p>
                    <p class="w-[12.5%] text-center">Flavours</p>
                    <p class="w-[12.5%] text-center">Amount</p>
                    <p class="w-[12.5%] text-center">Discounted</p>
                    <p class="w-[22.5%] text-center">Actions</p>
                </li>
                @foreach ($allProducts as $product)
                    <x-product-admin :product=$product/>
                @endforeach
            </ul>
        </section>
    </main>

@endsection

@push('scripts')
    @vite(["resources/js/carousel-handler.js"])
@endpush
