<li
    class="flex items-center border-b border-slate-200 pb-4 text-slate-800"
>
    <!-- Flavour -->
    <div class="w-[18%]">
        <label class="hidden" for="flavour">Flavour</label>
        <select
            id="flavour"
            name="flavour"
            class="w-5/6 rounded-md border border-[#e0e0e0] bg-white px-2 py-1 text-sm font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
            required
        ></select>
    </div>
    <!-- Size -->
    <div class="w-[18%]">
        <label class="hidden" for="size">Size</label>
        <select
            id="size"
            name="size"
            class="w-5/6 rounded-md border border-[#e0e0e0] bg-white px-2 py-1 text-sm font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
            required
        ></select>
    </div>
    <!-- Price -->
    <div class="w-[18%]">
        <label class="hidden" for="price">
            Pricing (in $ per piece)*
        </label>
        <input
            class="w-5/6 rounded-md border border-[#e0e0e0] bg-white px-2 py-1 text-sm font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
            id="price"
            name="price"
            placeholder="$123.95"
            type="text"
            required
        />
    </div>
    <!-- Discount -->
    <div class="w-[18%]">
        <label class="hidden" for="discount">
            Discount (in % per piece)
        </label>
        <input
            class="w-5/6 rounded-md border border-[#e0e0e0] bg-white px-2 py-1 text-sm font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
            id="discount"
            name="discount"
            placeholder="20%"
            type="text"
        />
    </div>
    <!-- Amount -->
    <div class="w-[18%]">
        <label class="hidden" for="amount"> Amount </label>
        <input
            class="w-5/6 rounded-md border border-[#e0e0e0] bg-white px-2 py-1 text-sm font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
            id="amount"
            name="amount"
            placeholder="1,2.3...9999"
            type="number"
            required
        />
    </div>
    <div class="flex w-[10%] items-center justify-center gap-4">
        <button
            id="delete-product-entry-btn-0"
            class="rounded-[8px] border border-slate-400 border-opacity-10 bg-slate-400 bg-opacity-10 px-4 py-1 transition duration-200 ease-in-out hover:text-red-600"
        >
            Delete
        </button>
    </div>
</li>
