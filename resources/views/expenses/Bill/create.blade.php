<x-app-layout>
	<div class="p-1">
		<div class="sm:w-5/6 mx-auto border shadow-lg shadow-stone-400 rounded bg-white p-1 my-10">
			<div class="bg-stone-50 rounded">
				<section class="bg-stone-200 py-12 relative rounded">
					<div>
						<h1 class="text-center {{$ExpensesTypes->count() == 0 ? 'text-rose-500' : ''}} text-2xl font-semibold py-3">{{$ExpensesTypes->count() == 0 ? 'Create Type First' : 'Bill Create'}}</h1>
					</div>
					<div class="w-{{$ExpensesTypes->count() == 0 ? '28' : '3/5'}} mx-auto border bg-stone-50 p-0.5 shadow-lg shadow-stone-400 rounded">
						@if($ExpensesTypes->count() == 0)
						 <x-button :href="route('expenses-type')" class=" h-8 w-full justify-center bg-sky-500 hover:bg-sky-600 text-sm text-white w-auto">Add Type</x-button>
						@else
						<form method="post" action="{{route('expenses-bill-create')}}" class="px-10 py-5 bg-stone-300 rounded space-y-3" enctype="multipart/form-data">
							@csrf
							<div>
								<p class="font-semibold text-md">Select Type</p>
								<select name="type" class="w-full py-1 rounded">
									<option>Select Type</option>
									@foreach($ExpensesTypes as $type)
									<option value="{{$type->code}}">{{$type->name.' [ '.$type->policy.' ] '}}</option>
									@endforeach
								</select>
								@error('type')
								<p class="text-xs font-semibold text-rose-600 mr-1 ">{{$message}}</p>
								@enderror
							</div>
							 <!-- purpose -->
							 <div class="relative space-y-2">
								<label for="purpose" class="block font-semibold text-md">Purpose</label>
								<input id="purpose" type="text" name="purpose" class="w-full py-1 rounded" value="{{old('purpose')}}" placeholder="purpose">
								@error('purpose')
									<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
								@enderror
							 </div>
							 <!-- amount -->
							 <div class="relative space-y-2">
								<label for="amount" class="block font-semibold text-md">Amount</label>
								<input id="amount" type="number" name="amount" class="w-full py-1 rounded" value="{{old('amount')}}"  min="0" step=".01">
								@error('amount')
									<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
								@enderror
							 </div>
							 <!-- details -->
							 <div class="relative space-y-2">
								<label for="details" class="block font-semibold text-md">Discription</label>
								<textarea rows="2" id="details" name="details" class="w-full py-1 rounded" placeholder="Write about the book">{{old('details')}}</textarea>
								@error('details')
									<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
								@enderror
							 </div>
							 <!-- Image -->
							 <div class="relative space-y-2">
								<label for="boucher_image" class="block font-semibold text-md">Image</label>
								<input id="boucher_image" type="file" name="boucher_image" class="w-full text-blue-500 bg-white border border-gray-500 flex items-center py-2 pl-2 rounded"placeholder="Billing Image">
								@error('boucher_image')
									<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
								@enderror
							 </div>
							 <!-- billing date -->
							 <div class="relative space-y-2">
								<label for="billing_date" class="block font-semibold text-md">billing date</label>
								<input id="billing_date" type="date" name="billing_date" class="w-full py-1 rounded" value="{{old('billing_date')??today()->format('Y-m-d')}}" placeholder="dd/mm/yyyy">
								@error('billing_date')
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