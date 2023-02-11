<x-app-layout>
	<x-slot name='header'>
		<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
			<h1>header</h1>
        </div>
	</x-slot>
	<section class="py-12">
		@if(session('alert'))
			<div class=" {{session('alert.type') == 'success'?'bg-yellow-500 text-yellow-500':'bg-rose-500 text-yellow-500'}} ">
				{{session('alert.message')}}
			</div>
		@endif
		<form method="post" class="w-96 mx-auto  space-y-3">
			@csrf
			 <div class="relative my-1.5">
				<label for="book_name" class="block font-semibold text-md">Book Name</label>
				<input id="book_name" type="text" name="book_name" class="w-full py-1 rounded" value="{{old('book_name')?? $book->name}}" placeholder="Book Name">
				@error('book_name')
					<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
				@enderror
			 </div>
			 <div class="relative my-1.5">
				<label for="book_author" class="block font-semibold text-md">Author Name</label>
				<input id="book_author" type="text" name="book_author" class="w-full py-1 rounded" value="{{old('book_author')?? $book->author}}" placeholder="Book Author">
				@error('book_author')
					<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
				@enderror
			 </div>
			 <div class="relative my-1.5">
				<label for="book_intro" class="block font-semibold text-md">Discription</label>
				<textarea rows="2" id="book_intro" name="book_intro" class="w-full py-1 rounded" placeholder="Write about the book">{{old('book_intro')?? $book->short_details}}</textarea>
				@error('book_intro')
					<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
				@enderror
			 </div>
			 <div class="relative my-1.5">
				<label for="book_price" class="block font-semibold text-md">Book Price</label>
				<input id="book_price" type="text" name="book_price" class="w-full py-1 rounded" value="{{old('book_price')?? $book->price}}" placeholder="Book Price">
				@error('book_price')
					<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
				@enderror
			 </div>
			 <button name="save" class="block mt-4 text-white w-full bg-rose-500 px-3 py-1 font-semibold rounded shadow-lg shadow-rose-500/70">Update</button>
		</form>
	</section>
	<x-slot name='footer'>
		<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
			{{ __('footer') }}
        </div>
	</x-slot>

</x-app-layout>