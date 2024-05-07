@if ($paginator->hasPages())
		<div class="flex flex-col-reverse items-center justify-center gap-4 lg:flex-row lg:gap-16">
				{{-- Textual description --}}
				<div>
						<p class="text-sm leading-5 text-slate-700">
								{!! __("Showing") !!}
								@if ($paginator->firstItem())
										<span class="font-medium">{{ $paginator->firstItem() }}</span>
										{!! __("to") !!}
										<span class="font-medium">{{ $paginator->lastItem() }}</span>
								@else
										{{ $paginator->count() }}
								@endif
								{!! __("of") !!}
								<span class="font-medium">{{ $paginator->total() }}</span>
								{!! __("results") !!}
						</p>
				</div>

				{{-- Pagination navigation --}}
				<ul class="flex items-center justify-center gap-4 text-slate-600">
						{{-- Previous Page Link --}}
						@if ($paginator->onFirstPage())
								<li class="rounded-full bg-slate-400">
										<span class="flex h-12 w-12 items-center justify-center rounded-full bg-slate-100">
												<!-- SVG for disabled previous -->
												<svg class="h-3/4 w-3/5 stroke-slate-300" fill="none" stroke="currentColor" stroke-width="2"
														viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
														<path d="M15 19l-7-7 7-7" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
										</span>
								</li>
						@else
								<li>
										<a href="{{ $paginator->previousPageUrl() }}#shop" rel="prev"
												class="flex h-12 w-12 items-center justify-center rounded-full border border-slate-200 bg-slate-100 bg-opacity-20 transition duration-200 ease-in-out hover:bg-slate-200">
												<!-- SVG for active previous -->
												<svg class="h-3/4 w-3/5 stroke-slate-500" fill="none" stroke="currentColor" stroke-width="2"
														viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
														<path d="M15 19l-7-7 7-7" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
										</a>
								</li>
						@endif

						{{-- "Always visible first and last pages, and dynamic middle pages" --}}
						@php
								$currPage = $paginator->currentPage();
								if ($currPage >= 3) {
								    echo '<li class="hidden sm:flex"><a href="' .
								        $paginator->url(1) .
								        '#shop" class="flex h-10 w-10 items-center justify-center text-slate-500 underline transition duration-200 ease-in-out hover:text-slate-800">1</a></li>';
								    if ($currPage >= 4) {
								        echo '<li class="hidden sm:flex"><span class="flex h-10 w-10 items-center justify-center">...</span></li>';
								    }
								}
						@endphp

						<li class="sm:hidden">
								<p class="px-4 text-center">{{ $currPage }}</p>
						</li>

						@for ($i = max($currPage - 1, 1); $i <= min($currPage + 1, $paginator->lastPage()); $i++)
								<li class="hidden sm:flex">
										<a href="{{ $paginator->url($i) }}#shop"
												class="{{ $i == $paginator->currentPage() ? "no-underline text-slate-800" : "" }} flex h-10 w-10 items-center justify-center text-slate-500 underline transition duration-200 ease-in-out hover:text-slate-800">
												{{ $i }}
										</a>
								</li>
						@endfor

						@if ($currPage <= $paginator->lastPage() - 2)
								@if ($currPage <= $paginator->lastPage() - 3)
										<li class="hidden sm:flex"><span class="flex h-10 w-10 items-center justify-center">...</span></li>
								@endif
								<li class="hidden sm:flex">
										<a href="{{ $paginator->url($paginator->lastPage()) }}#shop"
												class="{{ $i == $paginator->currentPage() ? "no-underline text-slate-800" : "" }} text-slate-500transition flex h-10 w-10 items-center justify-center text-slate-500 underline duration-200 ease-in-out hover:text-slate-800">
												{{ $paginator->lastPage() }}
										</a>
								</li>
						@endif

						{{-- Next Page Link --}}
						@if ($paginator->hasMorePages())
								<li>
										<a href="{{ $paginator->nextPageUrl() }}#shop" rel="next"
												class="flex h-12 w-12 items-center justify-center rounded-full border border-slate-200 bg-slate-100 bg-opacity-20 transition duration-200 ease-in-out hover:bg-slate-200">
												<!-- SVG for active next -->
												<svg class="h-3/4 w-3/5 stroke-slate-500" fill="none" stroke="currentColor" stroke-width="2"
														viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
														<path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
										</a>
								</li>
						@else
								<li class="rounded-full bg-slate-400">
										<span class="flex h-12 w-12 items-center justify-center rounded-full bg-slate-100">
												<!-- SVG for disabled next -->
												<svg class="h-3/4 w-3/5 stroke-slate-300" fill="none" stroke="currentColor" stroke-width="2"
														viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
														<path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
										</span>
								</li>
						@endif
				</ul>
		</div>
@endif
