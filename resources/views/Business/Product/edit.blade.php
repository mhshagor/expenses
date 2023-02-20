<x-app-layout>
	<div class="p-1">
		<div class="sm:w-5/6 mx-auto border shadow-lg shadow-stone-400 rounded bg-white p-1 my-10">
			<div class="bg-stone-50 rounded">
				<section class="bg-stone-200 py-12 relative mb-1 rounded">
					<div>
						<h1 class="text-center text-2xl font-semibold py-3">Product</h1>
					</div>
					<div class="w-3/5 mx-auto border bg-stone-50 p-0.5 shadow-lg shadow-stone-400 rounded">
						@if($subcategories->count() == 0)
						<x-button :href="route('business-subcategory')" class=" h-8 w-full justify-center bg-sky-500 hover:bg-sky-600 text-sm text-white w-auto">Add Subcategory</x-button>
						@else
						<form method="post" class="px-10 py-5 bg-stone-300 rounded space-y-3" enctype="multipart/form-data">
							@csrf
							<!-- Category -->
							<div>
								<p class="font-semibold text-md">Select Category</p>
								<select name="category" class="w-full py-1 rounded">
									<option>Select Category</option>
									@foreach($categories as $category)
									<option value="{{$category->code}}" @selected(old('category')== $category->code || $data->category_user->code == $category->code)>{{$category->category_name}}</option>
									@endforeach
								</select>
								@error('category')
								<p class="text-xs font-semibold text-rose-600 mr-1 ">{{$message}}</p>
								@enderror
							</div>
							<!-- Subcategory -->
							<div>
								<p class="font-semibold text-md">Select Subcategory</p>
								<select name="subcategory" class="w-full py-1 rounded">
									<option>Select Subcategory</option>
									@foreach($subcategories as $subcategory)
									<option value="{{$subcategory->code}}"  @selected(old('category')== $category->code || $data->subcategory_user->code == $subcategory->code)>{{$subcategory->subcategory_name}}</option>
									@endforeach
								</select>
								@error('subcategory')
								<p class="text-xs font-semibold text-rose-600 mr-1 ">{{$message}}</p>
								@enderror
							</div>
							<!-- product_name -->
							<div class="relative">
								<label for="product_name" class="block font-semibold text-md">Name</label>
								<input id="product_name" type="text" name="product_name" class="w-full py-1 rounded" value="{{old('product_name') ?? $data->product_name}}" placeholder="Product Name">
								@error('product_name')
								<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
								@enderror
							</div>
							<!-- product_details -->
							<div class="relative">
								<label for="product_details" class="block font-semibold text-md">Details</label>
								<textarea id="product_details" name="product_details" class="w-full py-1 rounded" placeholder="Product Details">{{old('product_details') ?? $data->product_details}}</textarea>
								@error('product_details')
								<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
								@enderror
							</div>
							<!-- product_price -->
							<div class="relative">
								<label for="product_price" class="block font-semibold text-md">Price</label>
								<input id="product_price" type="number" name="product_price" class="w-full py-1 rounded" value="{{old('product_price') ?? $data->product_price}}" placeholder="Product Price">
								@error('product_price')
								<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
								@enderror
							</div>
							<!-- product_quantity -->
							<div class="relative">
								<label for="product_quantity" class="block font-semibold text-md">Quantity</label>
								<input id="product_quantity" type="number" name="product_quantity" class="w-full py-1 rounded" value="{{old('product_quantity') ?? $data->product_quantity}}" placeholder="Product Quantity">
								@error('product_quantity')
								<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
								@enderror
							</div>
							<!-- Image -->
							<div class="relative">
								
								<p class="block font-semibold text-md mb-2">Image :</p>
								<label class="flex items-center bg-white text-blue-500 border border-gray-500 pr-1">
									<input type="file" id="product_image" name="product_image" class="px-5 py-2 w-full previewImage">
									@if($data->product_image)
										<img class="w-16 h-9 border-4" src="{{env('APP_URL').'/'.($data->product_image)}}">
									@else
										<p>
											<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-500">
											<path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"></path>
											</svg>
										</p>
									@endif
								</label>
								@error('product_image')
									<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
								@enderror
							 </div>
							<button name="save" class="z-50 block mt-4 text-white w-full bg-sky-500 px-3 py-1 font-semibold rounded hover:shadow-md duration-300 hover:shadow-sky-500/70">Update</button>
						</form>
						@endif
					</div>
				</section>
			</div>	
		</div>	
	</div>
</x-app-layout>