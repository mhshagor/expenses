<div>
	<div class="p-1">
		<div class="mx-5 border shadow-lg shadow-stone-400 rounded bg-white p-1 my-10">
			<div class="bg-stone-50 rounded">
				<section class="bg-stone-200 py-12 rounded">
					<div class="w-11 h-11 ml-auto border bg-stone-50 p-0.5 shadow-lg shadow-stone-400 rounded mr-14 mb-2">
						<x-button wire:click="dataAddModal" class=" h-10 w-10 justify-center bg-sky-500 hover:bg-sky-600 text-sm text-white w-auto"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
							  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
							</svg>
						</x-button>
					</div>
					<div class="mx-auto w-11/12 relative shadow-lg rounded shadow-stone-400 bg-stone-50">
						<div class="relative rounded shadow-md p-0.5">
							<table class="w-full rounded text-sm text-left text-gray-500 bg-blue-500">
								<thead class="text-xs text-gray-700 uppercase bg-stone-400/50 text-center">
									<tr>
										<th scope="col" class="px-6 py-3"></th>
										<th scope="col" class="px-6 py-3">SL</th>
										<th scope="col" class="px-6 py-3">Type</th>
										<th scope="col" class="px-6 py-3">Policy</th>
										<th scope="col" class="px-6 py-3">Purpose</th>
										<th scope="col" class="px-6 py-3">Amount</th>
										<th scope="col" class="px-6 py-3">Discription</th>
										<th scope="col" class="px-6 py-3">Image</th>
										<th scope="col" class="px-6 py-3">Billing Date</th>
										<th scope="col" class="px-6 py-3">Bill Creater</th>
										<th scope="col" class="px-6 py-3">ACTION</th>
									</tr>
								</thead>
								<tbody class="bg-gray-200 border-b border-gray-400">
									@forelse($expensesBills as $bill)
									<tr class="bg-blue-100 border-b hover:bg-gray-50 text-center">
										<td class="w-4 px-6 py-1.5">
											<div class="flex items-center">
												<input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
												<label for="checkbox-table-search-1" class="sr-only">checkbox</label>
											</div>
										</td>
										<th scope="row" class="px-6 py-1.5 font-medium whitespace-nowrap">{{$loop->iteration}}</th>
										<td class="px-6 py-1.5">{{$bill->expenses_type->name}}</td>
										<td class="px-6 py-1.5">{{$bill->expenses_type->policy}}</td>
										<td class="px-6 py-1.5">{{ucwords($bill->purpose)}}</td>
										<td class="px-6 py-1.5">{{$bill->amount}}</td>
										<td class="px-6 py-1.5">{{$bill->details}}</td>
										<td class="px-6 py-1.5">
											<img class="h-10 w-16" src="{{env('APP_URL').'/'.(($bill->boucher_image) ?? 'public/images/demo-image.bmp')}}">
										</td>
										<td class="px-6 py-1.5">{{$bill->billing_date}}</td>
										<td class="px-6 py-1.5">{{$bill->assign_user->name}} {{$bill->update_user? ' | ' .$bill->update_user->name : ''}}</td>
											
										<td class="px-6 py-1.5">
											<div class="flex items-center justify-center gap-1">
												<x-button wire:click="dataEditModal('{{$bill->code}}')" class="justify-center bg-yellow-500 hover:shadow-yellow-500/70 text-white hover:shadow-lg duration-500 h-7 w-6">
													<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
														<path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
													</svg>
												</x-button>
												<!-- Delete -->
												<x-button wire:click="dataDelete('{{$bill->code}}')" class="justify-center bg-rose-500 hover:shadow-rose-500/70 text-white hover:shadow-lg duration-500 h-7 w-6">
													<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
														<path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
													</svg>
												</x-button>
											</div>
										</td>
									</tr>
									@empty
									<td colspan="11" class="bg-blue-100 border-b hover:bg-gray-50 text-center p-3.5">
										<p>No Data Available</p>
									</td>
									@endforelse
								</tbody>
								
							</table>
						</div>
					</div>
				</section>
				
			</div>	
		</div>	
	</div>

	<!-- Add Modal -->
	<x-jet-dialog-modal wire:model="dataAddModalOpen">
		<x-slot name="title">
			Add Bill
		</x-slot>

		<x-slot name="content">
			<div class="mt-4">
				<div>
					<p class="font-semibold text-md">Select Type</p>
					<select wire:model="addType" class="w-full py-1 rounded">
						<option>Select Type</option>
						@foreach($expensesTypes as $type)
						<option value="{{$type->code}}">{{$type->name.' [ '.$type->policy.' ] '}}</option>
						@endforeach
					</select>
					@error('addType')
					<p class="text-xs font-semibold text-rose-600 mr-1 ">{{$message}}</p>
					@enderror
				</div>
					@if($addType)
						<p class="font-semibold text-rose-500 capitalize">{{$expensesTypes->where('code', $addType)->first()->policy}}</p>
					@endif
				 <!-- purpose -->
				<div class="relative space-y-2">
					<label for="addPurpose" class="block font-semibold text-md">Purpose</label>
					<input id="addPurpose" type="text" wire:model="addPurpose" class="w-full py-1 rounded" placeholder="purpose">
					@error('addPurpose')
						<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
					@enderror
				</div>
				 <!-- amount -->
				<div class="relative space-y-2">
					<label for="addAmount" class="block font-semibold text-md">Amount</label>
					<input id="addAmount" type="number" wire:model="addAmount" class="w-full py-1 rounded"  min="0" step=".01">
					@error('addAmount')
						<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
					@enderror
				</div>
				<!-- details -->
				<div class="relative space-y-2">
					<label for="addDetails" class="block font-semibold text-md">Discription</label>
					<textarea rows="2" id="addDetails" wire:model="addDetails" class="w-full py-1 rounded" placeholder="Write about the book"></textarea>
					@error('addDetails')
						<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
					@enderror
				</div>
				<!-- Image -->
				<div class="relative space-y-2">
					<label for="addBoucherImage" class="block font-semibold text-md">Image</label>
					<input id="addBoucherImage" type="file" wire:model="addBoucherImage" class="w-full text-blue-500 bg-white border border-gray-500 flex items-center py-2 pl-2 rounded" placeholder="Billing Image">
					@error('addBoucherImage')
						<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
					@enderror
					 @if ($addBoucherImage)
					Photo Preview:
						<img src="{{ $addBoucherImage->temporaryUrl() }}">
					@endif
				</div>
				 <!-- billing date -->
				<div class="relative space-y-2">
					<label for="addBillingDate" class="block font-semibold text-md">billing date</label>
					<input id="addBillingDate" type="date" wire:model="addBillingDate" class="w-full py-1 rounded" placeholder="dd/mm/yyyy">
					@error('addBillingDate')
						<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
					@enderror
				</div>
			</div>
		</x-slot>

		<x-slot name="footer">
			<x-jet-secondary-button wire:click="$toggle('dataAddModalOpen')" wire:loading.attr="disabled">
				{{ __('Cancel') }}
			</x-jet-secondary-button>

			<x-jet-danger-button class="ml-3" wire:click="dataCreate" wire:loading.attr="disabled">
				{{ __('Save') }}
			</x-jet-danger-button>
		</x-slot>
	</x-jet-dialog-modal>
	
	<!-- Edit Modal -->
	<x-jet-dialog-modal wire:model="dataEditModalOpen">
		<x-slot name="title">
			Edit 
		</x-slot>

		<x-slot name="content">
			<!-- Data edit modal -->
			<div class="mt-4">
				<div>
					<p class="font-semibold text-md">Select Type</p>
					<select wire:model="editType" class="w-full py-1 rounded">
						<option>Select Type</option>
						@foreach($expensesTypes as $type)
						<option value="{{$type->code}}">{{$type->name.' [ '.$type->policy.' ] '}}</option>
						@endforeach
					</select>
					@error('editType')
					<p class="text-xs font-semibold text-rose-600 mr-1 ">{{$message}}</p>
					@enderror
				</div>
					@if($editType)
						<p class="font-semibold text-rose-500 capitalize">{{$expensesTypes->where('code', $editType)->first()->policy}}</p>
					@endif
				 <!-- purpose -->
				<div class="relative space-y-2">
					<label for="editPurpose" class="block font-semibold text-md">Purpose</label>
					<input id="editPurpose" type="text" wire:model="editPurpose" class="w-full py-1 rounded" placeholder="purpose">
					@error('editPurpose')
						<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
					@enderror
				</div>
				 <!-- amount -->
				<div class="relative space-y-2">
					<label for="editAmount" class="block font-semibold text-md">Amount</label>
					<input id="editAmount" type="number" wire:model="editAmount" class="w-full py-1 rounded"  min="0" step=".01">
					@error('editAmount')
						<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
					@enderror
				</div>
				<!-- details -->
				<div class="relative space-y-2">
					<label for="editDetails" class="block font-semibold text-md">Discription</label>
					<textarea rows="2" id="editDetails" wire:model="editDetails" class="w-full py-1 rounded" placeholder="Write about the book"></textarea>
					@error('editDetails')
						<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
					@enderror
				</div>
				<!-- Image -->
				<div class="relative space-y-2">
					<label for="editBoucherImage" class="block font-semibold text-md">Image</label>
					<input id="editBoucherImage" type="file" wire:model="editBoucherImage" class="w-full text-blue-500 bg-white border border-gray-500 flex items-center py-2 pl-2 rounded" placeholder="Billing Image">
					@error('editBoucherImage')
						<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
					@enderror
					 @if ($editBoucherImage)
					Photo Preview:
						<img src="{{ $editBoucherImage->temporaryUrl() }}">
					@endif
				</div>
				 <!-- billing date -->
				<div class="relative space-y-2">
					<label for="editBillingDate" class="block font-semibold text-md">billing date</label>
					<input id="editBillingDate" type="date" wire:model="editBillingDate" class="w-full py-1 rounded" placeholder="dd/mm/yyyy">
					@error('editBillingDate')
						<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
					@enderror
				</div>
			</div>
		
		</x-slot>

		<x-slot name="footer">
			<x-jet-secondary-button wire:click="$toggle('dataEditModalOpen')">
				{{ __('Cancel') }}
			</x-jet-secondary-button>

			<x-jet-danger-button class="ml-3" wire:click="dataEdit" wire:loading.attr="disabled">
				{{ __('Save') }}
			</x-jet-danger-button>
		</x-slot>
	</x-jet-dialog-modal>
	
</div>
