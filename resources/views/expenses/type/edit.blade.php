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
			 <div>
				<label for="type" class="f">Type</label>
				<input id="type" type="text" name="type" value="{{old('type') ?? $data->name}}" class="w-full" placeholder="Type">
				@error('type')
					<p class="text-sm">{{$message}}</p>
					@enderror
			 </div>
			 <button name="save" class="bg-rose-500 px-3 py-px rounded shadow-lg shadow-rose-500/70">Save</button>
		</form>
	</section>
	<x-slot name='footer'>
		<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
			{{ __('footer') }}
        </div>
	</x-slot>

</x-app-layout>