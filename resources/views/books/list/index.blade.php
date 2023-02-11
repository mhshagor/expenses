<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
	<section class="bg-stone-200 mx-auto sm:w-5/6  py-12 relative">
		@if(session('alert'))
		<div class="absolute inset-0 h-10 top-3.5 flex items-start justify-center text-white font-semibold ">
			<span class="p-3 flex items-center h-10 rounded bg-green-600 shadow-lg shadow-green-500/70">{{session('alert.message')}}</span>
		</div>
		@endif
		<form method="post" action="{{ route('book-list-create')}}" class="w-96 mx-auto">
			@csrf
			 <div class="relative my-1.5">
				<label for="book_name" class="block font-semibold text-md">Book</label>
				<input id="book_name" type="text" name="book_name" class="w-full py-1 rounded" value="{{old('book_name')}}" placeholder="Book Name">
				@error('book_name')
					<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
				@enderror
			 </div>
			 <div class="relative my-1.5">
				<label for="book_author" class="block font-semibold text-md">Author</label>
				<input id="book_author" type="text" name="book_author" class="w-full py-1 rounded" value="{{old('book_author')}}" placeholder="Book Author">
				@error('book_author')
					<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
				@enderror
			 </div>
			 <div class="relative my-1.5">
				<label for="book_intro" class="block font-semibold text-md">Discription</label>
				<textarea rows="2" id="book_intro" name="book_intro" class="w-full py-1 rounded" placeholder="Write about the book">{{old('book_intro')}}</textarea>
				@error('book_intro')
					<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
				@enderror
			 </div>
			 <div class="relative my-1.5">
				<label for="book_price" class="block font-semibold text-md">Book Price</label>
				<input id="book_price" type="text" name="book_price" class="w-full py-1 rounded" value="{{old('book_price')}}" placeholder="Book Price">
				@error('book_price')
					<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
				@enderror
			 </div>
			 <button name="save" class="z-50 block mt-4 text-white w-full bg-rose-500 px-3 py-1 font-semibold rounded shadow-lg shadow-rose-500/70">Save</button>
		</form>
	</section>
	
	
	<section>
		<div class="mx-auto w-5/6 relative overflow-x-auto shadow-md sm:rounded-lg overflow-hidden">
			<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 rounded-lg">
				<thead class="text-xs text-gray-700 uppercase bg-gray-400 dark:bg-gray-700 dark:text-gray-300">
					<tr>
						<th scope="col" class="px-6 py-3">
							<div class="flex items-center">
								<input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
								<label for="checkbox-all-search" class="sr-only">checkbox</label>
							</div>
						</th>
						<th scope="col" class="px-6 py-3">SL</th>
						<th scope="col" class="px-6 py-3">Book Name</th>
						<th scope="col" class="px-6 py-3">Author</th>
						<th scope="col" class="px-6 py-3">Price</th>
						<th scope="col" class="px-6 py-3">Create & Update</th>
						<th scope="col" class="px-6 py-3">ACTION</th>
					</tr>
				</thead>
				<tbody class="bg-gray-200 border-b border-gray-400">
					@foreach($bookList as $list)
					<tr class="bg-blue-100 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
						<td class="w-4 px-6 py-1.5">
							<div class="flex items-center">
								<input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
								<label for="checkbox-table-search-1" class="sr-only">checkbox</label>
							</div>
						</td>
						<th scope="row" class="px-6 py-1.5 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$loop->iteration}}</th>
						<td class="px-6 py-1.5">{{$list->name}}</td>
						<td class="px-6 py-1.5">{{$list->author}}</td>
						<td class="px-6 py-1.5">{{$list->price}} TK</td>
						<td class="px-6 py-1.5">{{$list->assingn_user->name}} {{$list->assingn_user->name ? ' & '. $list->assingn_user->name : ''}}</td>
						<td class="px-6 py-1.5">
						
							<div class="flex items-center justify-center gap-1">
								
								<form method="post" action="{{route('book-list-visibility')}}">
									@csrf
									<x-button name="visibilityId" value="{{$list->id}}" class="justify-center h-7 w-6 {{$list->visibility ==1 ? 'bg-blue-500 shadow-blue-500/70' : 'bg-gray-700 shadow-gray-700/70'}} text-white shadow-lg">
										@if ($list->visibility ==1)
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
											<path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
											<path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
										</svg>
										@else
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
											<path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
										</svg>
										@endif
									</x-button>
								</form>
								
								<x-button :href="route('book-list-update',['code'=>$list->code])" class="justify-center bg-yellow-500 shadow-yellow-500/70 text-white shadow-lg h-7 w-6">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
										<path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
									</svg>
								</x-button>
								<form method="post" action="{{route('book-list-delete')}}">
									@csrf
									<x-button name="deleteId" value="{{$list->id}}" class="justify-center bg-rose-500 shadow-rose-500/70 text-white shadow-lg h-7 w-6">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
											<path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
										</svg>
									</x-button>
								</form>
							</div>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</section>
    
	
	
	
	
	
	
	
	
	
	
	
	
	
	<x-slot name="footer">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            
        </h2>
    </x-slot>
</x-app-layout>