<x-app-layout>
	<section class="py-12">
		<form method="post" class="w-96 mx-auto space-y-3 p-10 border border-4 shadow-lg shadow-stone-500 border-stone-50" enctype="multipart/form-data">
			@csrf
			<div>
				<label for="category_name" class="block font-semibold text-md mb-2">Category Name:</label>
				<input id="type" type="text" name="category_name" value="{{old('category_name') ?? $data->category_name}}" class="w-full" placeholder="Type Category Name">
				@error('category_name')
					<p class="text-sm text-red-600">{{$message}}</p>
				@enderror
			</div>
			<div class="">
				<label class="flex items-center bg-white text-blue-500 border border-gray-500 pr-1">
					<input type="file" id="category_image" name="category_image" class="px-3 py-2 w-full previewImage">
					@if($data->category_image)
					<img class="w-16 h-9 border-4" src="{{env('APP_URL').'/'.($data->category_image)}}">
					@else
						<p>
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
							<path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
							</svg>
						</p>
					@endif
				</label>
				@error('category_image')
					<p class="text-sm text-rose-500">{{$message}}</p>
				@enderror
			</div>
			<button name="update" class="border border-4 border-stone-50 w-full bg-yellow-500 px-3 py-px shadow-lg hover:shadow-stone-500/70 text-white duration-500">Update
			</button>
		</form>
	</section>
</x-app-layout>