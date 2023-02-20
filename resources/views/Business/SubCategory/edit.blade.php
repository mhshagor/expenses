<x-app-layout>
	<section class="py-12">
		<form method="post" class="w-96 mx-auto space-y-3 p-10 border border-4 shadow-lg shadow-stone-500 border-stone-50" enctype="multipart/form-data">
			@csrf
			<div>
				<div>
					<p class="font-semibold text-md">Select Type</p>
					<select name="category" class="w-full py-1 rounded">
						<option>Select category</option>
						@foreach($categories as $category)
						<option value="{{$category->code}}" @selected(old('category')== $category->code || $data->category_user->code == $category->code)>{{$category->category_name}}</option>
						@endforeach
					</select>
					@error('category')
					<p class="text-xs font-semibold text-rose-600 mr-1 ">{{$message}}</p>
					@enderror
				</div>
				<label for="subcategory_name" class="block font-semibold text-md mb-2">Subcategory Name:</label>
				<input id="type" type="text" name="subcategory_name" value="{{old('subcategory_name') ?? $data->subcategory_name}}" class="w-full" placeholder="Type Subcategory Name">
				@error('subcategory_name')
					<p class="text-sm text-red-600">{{$message}}</p>
				@enderror
				<!-- Image -->
				<div class="relative space-y-2">
					<p class="block font-semibold text-md mb-2">Image:</p>
					<label class="flex items-center bg-white text-blue-500 border border-gray-500 pr-1">
						<input type="file" id="subcategory_image" name="subcategory_image" class="px-5 py-2 w-full previewImage">
						@if($data->subcategory_image)
							<img class="w-16 h-9 border-4" src="{{env('APP_URL').'/'.($data->subcategory_image)}}">
						@else
							<p>
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-500">
								<path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"></path>
								</svg>
							</p>
						@endif
					</label>
					@error('subcategory_image')
						<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
					@enderror
				</div>
			</div>
			<button name="update" class="border border-4 border-stone-50 w-full bg-yellow-500 px-3 py-px shadow-lg hover:shadow-stone-500/70 text-white duration-500">Update
			</button>
		</form>
	</section>
</x-app-layout>