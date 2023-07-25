<div class="container">
    <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
        <div class="lg:col-span-4 md:col-span-6">
            <div class="shadow dark:shadow-gray-800 p-6 rounded-md bg-white dark:bg-slate-900 sticky top-20">
                <form wire:submit.prevent>
                    <div class="grid grid-cols-1 gap-3">
                        <div>
                            <label for="searchname" class="hidden font-semibold"></label>
                            <div class="relative">
                                <i data-feather="search" class="w-4 h-4 absolute top-3 start-3"></i>
                
                                <input wire:model.debounce.300ms="search" name="search" id="searchname" type="text" class="form-input w-full py-2 px-3 h-10 ps-9 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="Search">
                            </div>
                        </div>
                        
                        <div>
                            <label class="font-semibold">Categories</label>
                            <div class="block mt-2">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio border-gray-200 dark:border-gray-800 text-indigo-600 focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50 me-2" name="radio-colors" value="1" checked>
                                        <span class="text-slate-400">Men</span>
                                    </label>
                                </div>
                            </div>

                            <div class="block mt-2">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio border-gray-200 dark:border-gray-800 text-indigo-600 focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50 me-2" name="radio-colors" value="1">
                                        <span class="text-slate-400">Women</span>
                                    </label>
                                </div>
                            </div>

                            <div class="block mt-2">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio border-gray-200 dark:border-gray-800 text-indigo-600 focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50 me-2" name="radio-colors" value="1">
                                        <span class="text-slate-400">Kid.s Wear</span>
                                    </label>
                                </div>
                            </div>

                            <div class="block mt-2">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio border-gray-200 dark:border-gray-800 text-indigo-600 focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50 me-2" name="radio-colors" value="1">
                                        <span class="text-slate-400">Sports</span>
                                    </label>
                                </div>
                            </div>

                            <div class="block mt-2">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio border-gray-200 dark:border-gray-800 text-indigo-600 focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50 me-2" name="radio-colors" value="1">
                                        <span class="text-slate-400">Jewellery</span>
                                    </label>
                                </div>
                            </div>

                            <div class="block mt-2">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio border-gray-200 dark:border-gray-800 text-indigo-600 focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50 me-2" name="radio-colors" value="1">
                                        <span class="text-slate-400">Electronics</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <label class="font-semibold">Top Products</label>
                            <div class="block mt-2">
                                <span class="flex items-center">
                                    <img src="../../assets/images/shop/items/s1.html" class="rounded shadow dark:shadow-gray-800 w-12" alt="">
                                    <span class="ms-3">
                                        <span class="block font-semibold">T-shirt (M)</span>
                                        <span class="block text-sm text-slate-400">$16USD</span>
                                    </span>
                                </span>
                            </div>

                            <div class="block mt-2">
                                <span class="flex items-center">
                                    <img src="../../assets/images/shop/items/s2.html" class="rounded shadow dark:shadow-gray-800 w-12" alt="">
                                    <span class="ms-3">
                                        <span class="block font-semibold">Bag</span>
                                        <span class="block text-sm text-slate-400">$16USD</span>
                                    </span>
                                </span>
                            </div>

                            <div class="block mt-2">
                                <span class="flex items-center">
                                    <img src="../../assets/images/shop/items/s3.html" class="rounded shadow dark:shadow-gray-800 w-12" alt="">
                                    <span class="ms-3">
                                        <span class="block font-semibold">Watch (Men)</span>
                                        <span class="block text-sm text-slate-400">$16USD</span>
                                    </span>
                                </span>
                            </div>
                        </div>

                        <div class="mt-2">
                            <input type="submit" class="py-2 px-5 inline-block tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full" value="Apply Filter">
                        </div>
                    </div>
                </form>
            </div>
        </div><!--end col-->

        <div class="lg:col-span-8 md:col-span-6">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="lg:col-span-9 md:col-span-8">
                    <h3 class="text-xl leading-normal font-semibold">Showing
                        {{ $products->firstItem() }}-{{ $products->lastItem() }} of {{ $products->total() }} results</h3>
                </div>

                <div class="lg:col-span-3 md:col-span-4 md:text-end">
                    <label class="font-semibold hidden"></label>
                    <select wire:model="sort"
                        class="form-select form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0">
                        <option value="price_low">Price: Low to high</option>
                        <option value="price_high">Price: High to low</option>
                    </select>
                </div>
            </div><!--end grid-->

            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                @foreach ($products as $product)

                <div class="group">
                    <div class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md transition-all duration-500">
                        <img src="{{ $product->image_url }}" alt="">

                        <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 transition-all duration-500">
                            <a href="shop-cart.html" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-slate-900 border-slate-900 text-white w-full rounded-md">Add to Cart</a>
                        </div>

                        <ul class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 transition-all duration-500">
                            <li><a href="javascript:void(0)" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-heart"></i></a></li>
                            <li class="mt-1"><a href="shop-item-detail.html" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-eye-outline"></i></a></li>
                            <li class="mt-1"><a href="javascript:void(0)" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-bookmark-outline"></i></a></li>
                        </ul>

                        <ul class="list-none absolute top-[10px] start-4">
                            <li><a href="javascript:void(0)" class="bg-orange-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5">New</a></li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <a href="shop-item-detail.html" class="hover:text-indigo-600 text-lg font-semibold">{{ $product->name }}</a>
                        <div class="flex justify-between items-center mt-1">
                            <p class="text-green-600">${{ $product->price }} <del class="text-red-600">${{ $product->cost }}</del></p>
                            
                        </div>
                    </div>
                </div><!--end content-->
                @endforeach

                
            </div><!--end grid-->

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
        
        </div>
    </div>
</div><!--end container-->
