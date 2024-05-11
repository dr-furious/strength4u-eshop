@props(["stock_record"])
<li
    class="flex items-center border-b border-slate-200 pb-4 text-slate-800"
>
    <!-- Flavour -->
    <div class="w-[18%]">
        <div
            class="w-5/6 rounded-md border border-[#e0e0e0] bg-white px-2 py-1 text-sm font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
        >{{ $stock_record -> flavour -> label}}
        </div>
    </div>
    <!-- Size -->
    <div class="w-[18%]">
        <div
            class="w-5/6 rounded-md border border-[#e0e0e0] bg-white px-2 py-1 text-sm font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
        >{{ $stock_record -> size -> label}}
        </div>
    </div>
    <!-- Price -->
    <div class="w-[18%]">
        <div
            class="w-5/6 rounded-md border border-[#e0e0e0] bg-white px-2 py-1 text-sm font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
        >{{ $stock_record -> price_in_dollars }}
        </div>
    </div>
    <!-- Discount -->
    <div class="w-[18%]">
        <div
            class="w-5/6 rounded-md border border-[#e0e0e0] bg-white px-2 py-1 text-sm font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
        >{{ $stock_record -> discount_percentage }}
        </div>
    </div>
    <!-- Amount -->
    <div class="w-[18%]">
        <div
            class="w-5/6 rounded-md border border-[#e0e0e0] bg-white px-2 py-1 text-sm font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
        >{{ $stock_record -> stock_amount }}
        </div>
    </div>
</li>
