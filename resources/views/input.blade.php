<x-app-layout>
	<x-slot name="header">
		<div class="flex items-center gap-2">	
			<x-button :href="route('business-subcategory')" title="Back" class="h-7 w-10 justify-center text-sm text-sky-500 hover:text-sky-700">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
				<path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
				</svg>
			</x-button>
			<h2 class="font-semibold text-xl text-gray-800 leading-tight">
				{{ __('Business Product Create') }}
			</h2>
		</div>
	</x-slot>
	
	<div class="p-1">
		<div class="sm:w-5/6 mx-auto border shadow-lg shadow-stone-400 rounded bg-white p-1 my-10">
			<div class="bg-stone-50 rounded">
				<section class="bg-stone-200 py-12 relative mb-1 rounded">
					<div>
						<h1 class="text-center text-2xl font-semibold py-3">Product</h1>
					</div>
					<div class="w-3/5 mx-auto border bg-stone-50 p-0.5 shadow-lg shadow-stone-400 rounded">
						
						<x-button :href="route('expenses-type')" class=" h-8 w-full justify-center bg-sky-500 hover:bg-sky-600 text-sm text-white w-auto">Add Subcategory</x-button>
						
						<form method="post" action="" class="px-10 py-5 bg-stone-300 rounded space-y-3" enctype="multipart/form-data">
							@csrf
							
							<div>
								<p class="font-semibold text-md">Select Type</p>
								<select name="category" class="w-full py-1 rounded">
									<option>Select Type</option>
									
									<option value=""></option>
									
								</select>
								@error('category')
								<p class="text-xs font-semibold text-rose-600 mr-1 ">{{$message}}</p>
								@enderror
							</div>
							<!-- product_name -->
							<div class="relative">
								<label for="product_name" class="block font-semibold text-md">Name</label>
								<input id="product_name" type="text" name="product_name" class="w-full py-1 rounded" value="{{old('product_name')}}" placeholder="Book Name">
								@error('product_name')
								<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
								@enderror
							</div>
							<!-- product_details -->
							<div class="relative">
								<label for="product_details" class="block font-semibold text-md">Details</label>
								<textarea id="product_details" name="product_details" class="w-full py-1 rounded" placeholder="Product Details">{{old('product_details')}}</textarea>
								@error('product_details')
								<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
								@enderror
							</div>
							<!-- product_price -->
							<div class="relative">
								<label for="product_price" class="block font-semibold text-md">Price</label>
								<input id="product_price" type="number" name="product_name" class="w-full py-1 rounded" value="{{old('product_price')}}" placeholder="Product Price">
								@error('product_price')
								<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
								@enderror
							</div>
							<!-- product_quantity -->
							<div class="relative">
								<label for="product_quantity" class="block font-semibold text-md">Quantity</label>
								<input id="product_quantity" type="number" name="product_name" class="w-full py-1 rounded" value="{{old('product_quantity')}}" placeholder="Product Price">
								@error('product_quantity')
								<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
								@enderror
							</div>
							<!-- Image -->
							<div class="relative">
								
								<p class="block font-semibold text-md mb-2">Image :</p>
								<label class="flex items-center bg-white text-blue-500 border border-gray-500 pr-1">
									<input type="file" id="subcategory_image" name="subcategory_image" class="px-3 py-2 w-full previewImage">
								</label>
								@error('subcategory_image')
									<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
								@enderror
							 </div>
							 <button name="save" class="z-50 block mt-4 text-white w-full bg-sky-500 px-3 py-1 font-semibold rounded hover:shadow-md duration-300 hover:shadow-sky-500/70">Save</button>
						</form>
						
					</div>
				</section>
			</div>	
		</div>	
	</div>
	
	<x-slot name="footer">
		<h2 class="text-xl text-stone-700 text-center py-3 leading-tight">
			@copy Ebidda.com
		</h2>
	</x-slot>
</x-app-layout>