<x-app-layout>
    
	<!-- Form -->
	<section class="mx-auto w-5/6  py-12">
		<form method="post" action="{{ route('expenses-type-create')}}" class="w-96 mx-auto space-y-3 p-10 border border-4 shadow-lg shadow-stone-500 border-stone-50">
			@csrf
			<div>
				<label class="block font-semibold text-md mb-2">Policy Name</label>
				<select name="policy" class="w-full border border-gray-500">
					<option>Policy Type</option>
					<option value="credit">Credit</option>
					<option value="debit">Debit</option>
				</select>
				@error('policy')
					<p class="text-sm text-red-600">{{$message}}</p>
				@enderror
			</div>
			 <div class="">
				<label for="type" class="block font-semibold text-md mb-2">Type :</label>
				<input id="type" type="text" name="type" value="{{old('type')}}" class="w-full" placeholder="Type Here">
				@error('type')
					<p class="text-sm text-rose-500">{{$message}}</p>
				@enderror
			 </div>
			 <button type="" name="save" class="border border-4 border-stone-50 w-full bg-sky-500 px-3 py-px shadow-lg hover:shadow-stone-500/70 text-white duration-500">Save
			 </button>
		</form>
	</section>
	<!-- Table -->
	<section>
		<div class="mx-auto w-5/6 border border-4 border-stone-50 shadow-lg shadow-stone-500 relative overflow-x-auto shadow-md sm:rounded-lg overflow-hidden">
			<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 rounded-lg">
				<!-- T Head -->
				<thead class="text-xs text-gray-700 uppercase bg-stone-400/50 text-center">
					<tr>
						<th scope="col" class="px-6 py-3"></th>
						<th scope="col" class="px-6 py-3">SL</th>
						<th scope="col" class="px-6 py-3">Code</th>
						<th scope="col" class="px-6 py-3">Slug</th>
						<th scope="col" class="px-6 py-3">Policy</th>
						<th scope="col" class="px-6 py-3">Name</th>
						<th scope="col" class="px-6 py-3">ASSIGN USER</th>
						<th scope="col" class="px-6 py-3">User Email</th>
						<th scope="col" class="px-6 py-3">ACTION</th>
					</tr>
				</thead>
				<!-- T Body -->
				<tbody class="bg-gray-200 border-b border-gray-400">
				  @foreach($expensesModel as $type)
					<tr class="bg-blue-100 border-b hover:bg-gray-50 text-center text-black">
						<td class="w-4 px-6 py-1.5">
							<div class="flex items-center">
								<input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
								<label for="checkbox-table-search-1" class="sr-only">checkbox</label>
							</div>
						</td>
						<th scope="row" class="px-6 py-1.5 font-medium whitespace-nowrap">{{$loop->iteration}}</th>
						<td class="px-6 py-1.5">{{$type->code}}</td>
						<td class="px-6 py-1.5">{{$type->slug}}</td>
						<td class="px-6 py-1.5">{{ucwords($type->policy)}}</td>
						<td class="px-6 py-1.5">{{$type->name}}</td>
						<td class="px-6 py-1.5">{{$type->assign_user->name}} {{$type->update_user? ' | ' .$type->update_user->name : ''}}</td>
						<td class="px-6 py-1.5">{{$type->assign_user->email}}</td>
						<!-- Button -->
						<td class="px-6 py-1.5">
							<div class="flex items-center justify-center gap-1">
								<!-- Visibility -->
								<form method="post" action="{{route('expenses-type-visibility')}}">
									@csrf
									<x-button name="visibilityId" value="{{$type->id}}" class="justify-center h-7 w-6 {{$type->visibility ==1 ? 'bg-blue-500 hover:shadow-blue-500/70' : 'bg-gray-700 hover:shadow-gray-700/70'}} text-white hover:shadow-lg duration-500">
									@if ($type->visibility ==1)
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
								<!-- Edit -->
								<x-button :href="route('type-update',['code'=>$type->code])" class="justify-center bg-yellow-500 hover:shadow-yellow-500/70 text-white hover:shadow-lg duration-500 h-7 w-6">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
										<path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
									</svg>
								</x-button>
								<!-- Delete -->
								<form method="post" action="{{route('expenses-type-delete')}}">
									@csrf
									<x-button name="deleteId" value="{{$type->id}}" class="justify-center bg-rose-500 hover:shadow-rose-500/70 text-white hover:shadow-lg duration-500 h-7 w-6">
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
	
</x-app-layout>