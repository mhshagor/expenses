<x-app-layout>
	
	<section class="py-12">
		<form method="post" class="sm:w-1/2 mx-auto space-y-3 p-10 border border-4 shadow-lg shadow-stone-500 border-stone-50">
			@csrf
			<p class=" font-semibold text-md">Select Type</p>
			<select name="type" class="w-full py-1 rounded">
				@foreach($ExpensesTypes as $type)
				<option>Select Type</option>
				<option value="{{$type->code}}" @selected(old('type')==$type->code || $data->expenses_type->code == $type->code)>{{$type->name}}</option>
				@endforeach
			</select>
			@error('type')
			<p class="text-xs font-semibold text-rose-600 mr-1 ">{{$message}}</p>
			@enderror
			<!-- purpose -->
			<div class="relative space-y-2">
				<label for="purpose" class="block font-semibold text-md">Purpose</label>
				<input id="purpose" type="text" name="purpose" class="w-full py-1 rounded" value="{{old('purpose') ?? $data->purpose}}" placeholder="purpose">
				@error('purpose')
				<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
				@enderror
			</div>
			<!-- amount -->
			<div class="relative space-y-2">
				<label for="amount" class="block font-semibold text-md">Amount</label>
				<input id="amount" type="number" name="amount" class="w-full py-1 rounded" value="{{old('amount')?? $data->amount}}"  min="0" step=".01">
				@error('amount')
					<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
				@enderror
			</div>
			 <!-- details -->
			<div class="relative space-y-2">
				<label for="details" class="block font-semibold text-md">Discription</label>
				<textarea rows="2" id="details" name="details" class="w-full py-1 rounded" placeholder="Write about the book">{{old('details') ?? $data->details}}</textarea>
				@error('details')
					<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
				@enderror
			</div>
			<!-- Image -->
			<div class="relative space-y-2">
				<label class="flex items-center bg-white text-blue-500 border border-gray-500 pr-1">
					<input type="file" id="boucher_image" name="boucher_image" class="px-5 py-2 w-full previewImage">
					@if($data->boucher_image)
						<img class="w-16 h-9 border-4" src="{{env('APP_URL').'/'.($data->boucher_image)}}">
					@else
						<p>
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-red-500">
							<path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"></path>
							</svg>
						</p>
					@endif
				</label>
				@error('boucher_image')
					<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
				@enderror
			</div>
			<!-- billing date -->
			<div class="relative space-y-2">
				<label for="billing_date" class="block font-semibold text-md">billing date</label>
				<input id="billing_date" type="date" name="billing_date" class="w-full py-1 rounded" value="{{old('billing_date')??$data->billing_date->format('Y-m-d') ?? today()->format('Y-m-d')}}" placeholder="dd/mm/yyyy">
				@error('billing_date')
				<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
				@enderror
			</div>
			<button type="" name="save" class="border border-4 border-stone-50 w-full bg-yellow-500 px-3 py-px shadow-lg hover:shadow-stone-500/70 text-white duration-500">Update
			</button>
		</form>
	</section>
	
</x-app-layout>