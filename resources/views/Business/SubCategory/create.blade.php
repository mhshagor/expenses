<x-app-layout>
	<div class="p-1">
		<div class="sm:w-5/6 mx-auto border shadow-lg shadow-stone-400 rounded bg-white p-1 my-10">
			<div class="bg-stone-50 rounded">
				<section class="bg-stone-200 py-12 relative mb-1 rounded">
					<div>
						<h1 class="text-center text-2xl font-semibold py-3">Subcategory</h1>
					</div>
					<div class="w-3/5 mx-auto border bg-stone-50 p-0.5 shadow-lg shadow-stone-400 rounded">
						@if($categories->count() == 0)
						<x-button :href="route('business-category')" class=" h-8 w-full justify-center bg-sky-500 hover:bg-sky-600 text-sm text-white w-auto">Add Categore</x-button>
						@else
						<form method="post" action="" class="px-10 py-5 bg-stone-300 rounded space-y-3" enctype="multipart/form-data">
							@csrf
							
							<div>
								<p class="font-semibold text-md">Select Type</p>
								<select name="category" class="w-full py-1 rounded">
									<option>Select Type</option>
									@foreach($categories as $category)
									<option value="{{$category->code}}">{{$category->category_name}}</option>
									@endforeach
								</select>
								@error('category')
								<p class="text-xs font-semibold text-rose-600 mr-1 ">{{$message}}</p>
								@enderror
							</div>
							<!-- subcategory_name -->
							<div class="relative">
								<label for="subcategory_name" class="block font-semibold text-md">Name</label>
								<input id="subcategory_name" type="text" name="subcategory_name" class="w-full py-1 rounded" value="{{old('subcategory_name')}}" placeholder="Subcategory Name">
								@error('subcategory_name')
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
						@endif
					</div>
				</section>
			</div>	
		</div>	
	</div>
</x-app-layout>