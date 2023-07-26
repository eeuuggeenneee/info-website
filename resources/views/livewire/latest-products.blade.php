<div>
    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
        @foreach($products as $product)
            <div class="group">
                <div class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md transition-all duration-500">
                    <img src="{{ $product->image_url }}" alt="{{ $product->name }}">
    
                    <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 transition-all duration-500">
                        <a href="{{ route('details', ['id' => $product->id]) }}" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-slate-900 border-slate-900 text-white w-full rounded-md">View item</a>
                    </div>

                </div>
    
                <div class="mt-4">
                    <a href="#" class="hover:text-indigo-600 text-lg font-semibold">{{ $product->name }}</a>
                    <div class="flex justify-between items-center mt-1">
                        <p class="text-green-600">${{ $product->price }} <del class="text-red-600">${{ $product->cost }}</del></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
