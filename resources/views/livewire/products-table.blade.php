<div>
    <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
        <div class="lg:col-span-9 md:col-span-8">
            <h3 class="text-xl leading-normal font-semibold">Showing
                {{ $products->firstItem() }}-{{ $products->lastItem() }} of {{ $products->total() }} results</h3>
        </div>

        <div class="lg:col-span-3 md:col-span-4 md:text-end">
            <label class="font-semibold hidden"></label>
            <select wire:model="sort"
                class="form-select form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0">
                <option value="price_low">Sort by price: low to high</option>
                <option value="price_high">Sort by price: high to low</option>
            </select>
        </div>
    </div>
    <!--end grid-->
    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
        @foreach ($products as $product)
            <div class="group">
                <div
                    class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md transition-all duration-500">
                    <img src="{{ $product->image_url }}" alt="{{ $product->name }}">

                    <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 transition-all duration-500">
                        <a href="#"
                            class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-slate-900 border-slate-900 text-white w-full rounded-md">Add
                            to Cart</a>
                    </div>
                </div>

                <div class="mt-4">
                    <a href="#" class="hover:text-indigo-600 text-lg font-semibold">{{ $product->name }}</a>
                    <div class="flex justify-between items-center mt-1">
                        <p class="text-green-600">${{ $product->price }} <del
                                class="text-red-600">${{ $product->cost }}</del></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
        <div class="md:col-span-12 text-center">
            <nav aria-label="Page navigation example">
                <ul class="inline-flex items-center -space-x-px">
                    <!-- Previous Page Link -->
                    @if ($products->onFirstPage())
                        <li>
                            <a
                                class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-s-lg border border-gray-100 dark:border-gray-700 disabled">
                                <i class="uil uil-angle-left text-[20px] rtl:rotate-180 rtl:-mt-1"></i>
                            </a>
                        </li>
                    @else
                        <li>
                            <a wire:click="previousPage"
                                class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-s-lg hover:text-white border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">
                                <i class="uil uil-angle-left text-[20px] rtl:rotate-180 rtl:-mt-1"></i>
                            </a>
                        </li>
                    @endif
                    <!-- Go to First Page -->
                    <li>
                        <a wire:click.prevent="gotoPage(1)"
                            class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">First</a>
                    </li>

                    <!-- Pagination Elements -->
                    @php
                        $start = max($products->currentPage() - 2, 1);
                        $end = min($products->currentPage() + 2, $products->lastPage());
                    @endphp
                    @foreach (range($start, $end) as $page)
                        <li>
                            @if ($page == $products->currentPage())
                                <a href="#" aria-current="page"
                                    class="z-10 w-[40px] h-[40px] inline-flex justify-center items-center text-white bg-indigo-600 border border-indigo-600">{{ $page }}</a>
                            @else
                                <a wire:click.prevent="gotoPage({{ $page }})"
                                    class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">{{ $page }}</a>
                            @endif
                        </li>
                        
                    @endforeach
                    <!-- Go to Last Page -->
                    <li>
                        <a wire:click.prevent="gotoPage({{ $products->lastPage() }})"
                            class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">Last</a>
                    </li>

                    <!-- Next Page Link -->
                    @if ($products->hasMorePages())
                        <li>
                            <a wire:click="nextPage"
                                class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-e-lg hover:text-white border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">
                                <i class="uil uil-angle-right text-[20px] rtl:rotate-180 rtl:-mt-1"></i>
                            </a>
                        </li>
                    @else
                        <li>
                            <a
                                class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-e-lg border border-gray-100 dark:border-gray-700 disabled">
                                <i class="uil uil-angle-right text-[20px] rtl:rotate-180 rtl:-mt-1"></i>
                            </a>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>

    <!--end grid-->



</div>
