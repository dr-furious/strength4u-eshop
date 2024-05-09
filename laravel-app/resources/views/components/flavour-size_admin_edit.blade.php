@props([
    'stock_record' => null,
    'flavours' => null,
    'sizes' => null,
    'iteration' => 0
])

<li class="flex items-center border-b border-slate-200 pb-4 text-slate-800">
    <!-- Flavour -->
    <div class="w-[18%]">
        <label class="hidden" for="flavour{{ $iteration }}">Flavour</label>
        <select id="flavour{{ $iteration }}" name="flavour{{ $iteration }}"
                class="w-5/6 rounded-md border border-[#e0e0e0] bg-white px-2 py-1 text-sm font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
                required="">
            @foreach($flavours as $flavour)
                <option value="{{$flavour}}"
                        @if ($flavour == $stock_record->flavour->label)
                            selected="selected"
                    @endif>{{$flavour}}</option>
            @endforeach
        </select>
    </div>
    <!-- Size -->
    <div class="w-[18%]">
        <label class="hidden" for="size{{ $iteration }}"">Size</label>
        <select id="size{{ $iteration }}"" name="size{{ $iteration }}""
        class="w-5/6 rounded-md border border-[#e0e0e0] bg-white px-2 py-1 text-sm font-medium outline-none
        focus:border-[#6A64F1] focus:shadow-md"
        required="">
        @foreach($sizes as $size)
            <option value="{{$size}}"
                    @if ($size == $stock_record->size->label)
                        selected="selected"
                @endif>{{$size}}</option>
            @endforeach
            </select>
    </div>
    <!-- Price -->
    <div class="w-[18%]">
        <label class="hidden" for="price1">
            Pricing (in $ per piece)*
        </label>
        <input
            class="w-5/6 rounded-md border border-[#e0e0e0] bg-white px-2 py-1 text-sm font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
            id="price{{ $iteration }}" name="price{{ $iteration }}" placeholder="$123.95" type="text" required=""
            value="{{$stock_record -> price_in_dollars}}">
    </div>
    <!-- Discount -->
    <div class="w-[18%]">
        <label class="hidden" for="discount{{ $iteration }}">
            Discount (in % per piece)
        </label>
        <input
            class="w-5/6 rounded-md border border-[#e0e0e0] bg-white px-2 py-1 text-sm font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
            id="discount{{ $iteration }}" name="discount{{ $iteration }}" placeholder="20%" type="text"
            value="{{$stock_record -> discount_percentage}}">
    </div>
    <!-- Amount -->
    <div class=" w-[18%]">
        <label class="hidden" for="amount{{ $iteration }}"> Amount </label>
        <input
            class="w-5/6 rounded-md border border-[#e0e0e0] bg-white px-2 py-1 text-sm font-medium outline-none focus:border-[#6A64F1] focus:shadow-md"
            id="amount{{ $iteration }}" name="amount{{ $iteration }}" placeholder="1,2.3...9999" type="number"
            required=""
            value="{{$stock_record -> sold_amount}}">
    </div>
    <div class=" flex w-[10%] items-center justify-center gap-4">
        <button id="delete-product-entry-btn-{{ $iteration }}"
                type="button"
                class="rounded-[8px] border border-slate-400 border-opacity-10 bg-slate-400 bg-opacity-10 px-4 py-1 transition duration-200 ease-in-out hover:text-red-600">
            Delete
        </button>
    </div>
</li>
