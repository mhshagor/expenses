<x-app-layout>
	
	<section class="py-12">
		@if(session('alert'))
			<div class=" {{session('alert.type') == 'success'?'bg-yellow-500 text-yellow-500':'bg-rose-500 text-yellow-500'}} ">
				{{session('alert.message')}}
			</div>
		@endif
		<form method="post" class="w-96 mx-auto space-y-3 p-10 border border-4 shadow-lg shadow-stone-500 border-stone-50">
			@csrf
			<div>
				<label class="block font-semibold text-md mb-2">Policy Name</label>
				<select name="policy" class="w-full border border-gray-500">
					<option value="">Policy Type</option>
					<option value="credit" @selected(old('policy') == 'credit' || $data->policy == 'credit')>Credit</option>
					<option value="debit" @selected(old('policy') == 'debit' || $data->policy == 'debit')>Debit</option>
				</select>
				@error('policy')
					<p class="text-sm text-red-600">{{$message}}</p>
				@enderror
			</div>
			<div>
				<label for="type" class="block font-semibold text-md mb-2">Type :</label>
				<input id="type" type="text" name="type" value="{{old('type') ?? $data->name}}" class="w-full" placeholder="Type">
				@error('type')
					<p class="text-sm text-rose-500">{{$message}}</p>
				@enderror
			</div>
			 
			<button type="" name="save" class="border border-4 border-stone-50 w-full bg-yellow-500 px-3 py-px shadow-lg hover:shadow-stone-500/70 text-white duration-500">Update
			</button>
		</form>
	</section>
	
</x-app-layout>