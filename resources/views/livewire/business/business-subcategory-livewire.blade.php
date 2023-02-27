<div>

	@include('livewire.component.loading')
	
	@if(session('alert'))
	<div x-data="{alertBox:true}" x-show="alertBox" x-init="setTimeout(function(){alertBox = false}, 3000)" class="fixed left-auto right-5 top-5 z-50 border border-3 bg-gray-100 text-white rounded-lg">
		<span class="p-3 flex items-center h-10 w-full rounded bg-green-600 shadow-lg shadow-green-500/70">
			{{session('alert.message')}}
		</span>
	</div>
	@endif	

    <!-- Table -->
	<section class="mx-5 border shadow-lg shadow-stone-400 rounded bg-white p-1 my-10 py-10 bg-stone-200 border border-4 rounded border-stone-50">
		<div class="w-11 h-11 ml-auto border bg-stone-50 p-0.5 shadow-lg shadow-stone-400 rounded mr-14 mb-2">
			<x-button wire:click="dataAddModal" class=" h-10 w-10 justify-center bg-sky-500 hover:bg-sky-600 text-sm text-white w-auto">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
				  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
				</svg>
			</x-button>
		</div>
		<div class="mx-auto w-11/12 border border-4 border-stone-50 shadow-lg shadow-stone-500 relative overflow-x-auto shadow-md sm:rounded-lg overflow-hidden">
			<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 rounded-lg">
				<!-- T Head -->
				<thead class="text-xs text-gray-700 uppercase bg-stone-400/50 text-center">
					<tr>
						<th scope="col" class="px-6 py-3"></th>
						<th scope="col" class="px-6 py-3">SL</th>
						<th scope="col" class="px-6 py-3">Subcategory Name</th>
						<th scope="col" class="px-6 py-3">Subcategory Image</th>
						<th scope="col" class="px-6 py-3">ASSIGN USER</th>
						<th scope="col" class="px-6 py-3">ACTION</th>
					</tr>
				</thead>
				<tbody class="bg-gray-200 border-b border-gray-400">
					@foreach($businessSubcategory as $data)
					<tr class="bg-blue-100 border-b hover:bg-gray-50 text-center text-black {{$data->visibility != 1 ? 'opacity-25 hover:opacity-75' : ''}}">
						<td class="w-4 px-6 py-1.5">
							<div class="flex items-center">
								<input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
								<label for="checkbox-table-search-1" class="sr-only">checkbox</label>
							</div>
						</td>
						<td scope="row" class="px-6 py-1.5 font-medium whitespace-nowrap">{{$loop->iteration}}</td>
						<td class="px-6 py-1.5">{{$data->subcategory_name}}</td>
						<td class="px-6 py-1.5">
							<img class="w-16 mx-auto h-9 border-4" src="{{env('APP_URL').'/'.(($data->subcategory_image) ?? 'public/images/demo-image.bmp')}}">
						</td>
						<td class="px-6 py-1.5">{{$data->assign_user->name}} {{$data->update_user ? ' | ' .$data->update_user->name : ''}}</td>
						<!-- Button -->
						<td class="px-6 py-1.5">
							<div class="flex items-center justify-center gap-1">
								<!-- Visibility -->
								<x-button wire:click="visibility('{{$data->code}}')" class="justify-center h-7 w-6 {{$data->visibility ==1 ? 'bg-blue-500 hover:shadow-blue-500/70' : 'bg-gray-700 hover:shadow-gray-700/70'}} text-white hover:shadow-lg duration-500">
									@if($data->visibility ==1)	
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
								<!-- Edit -->
								<x-button wire:click="dataEditModal('{{$data->code}}')" class="justify-center bg-yellow-500 hover:shadow-yellow-500/70 text-white hover:shadow-lg duration-500 h-7 w-6 {{$data->visibility != 1 ? 'hidden' : ''}}">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
										<path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
									</svg>
								</x-button>
								<!-- Delete -->
								<x-button wire:click="dataDelete('{{$data->code}}')" class="justify-center bg-rose-500 hover:shadow-rose-500/70 text-white hover:shadow-lg duration-500 h-7 w-6 {{$data->visibility != 1 ? 'hidden' : ''}}">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
										<path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
									</svg>
								</x-button>
							</div>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</section>
	<!-- Add Modal -->
	<x-jet-dialog-modal wire:model="dataAddModalOpen">
		<x-slot name="title">
			Add 
		</x-slot>

		<x-slot name="content">
			<!-- Data Add modal -->
			<div class="mt-4">
				<div>
					<p class="font-semibold text-md">Select Type</p>
					<select wire:model="addCategory" class="w-full py-1 rounded">
						<option value="">Select Type</option>
						@foreach($categories as $category)
						<option value="{{$category->code}}" {{old('addCategory') ? 'selected' : ''}}>{{$category->category_name}}</option>
						@endforeach
					</select>
					@error('category')
					<p class="text-xs font-semibold text-rose-600 mr-1 ">{{$message}}</p>
					@enderror
				</div>
				<!-- subcategory_name -->
				<div class="relative">
					<label for="addName" class="block font-semibold text-md">Name</label>
					<input id="addName" type="text" wire:model="addName" class="w-full py-1 rounded" value="{{old('addName')}}" placeholder="Subcategory Name">
					@error('addName')
					<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
					@enderror
				</div>
				<!-- Image -->
				<div class="">
					<p class="block font-semibold text-md mb-2">Image :</p>
					<label class="flex items-center bg-white text-blue-500 border border-gray-500 pr-1">
						<input type="file" wire:model="addImage" class="px-3 py-2 w-full">
						@if ($addImage)
							<img class="h-8 w-12" src="{{ $addImage->temporaryUrl() }}">
						@endif
					</label>
					@error('addImage')
						<p class="text-sm text-rose-500">{{$message}}</p>
					@enderror
				</div>
			</div>
		
		</x-slot>

		<x-slot name="footer">
			<x-jet-secondary-button wire:click="$toggle('dataAddModalOpen')">
				{{ __('Cancel') }}
			</x-jet-secondary-button>

			<x-jet-danger-button class="ml-3" wire:click="dataCreate">
				{{ __('Save') }}
			</x-jet-danger-button>
		</x-slot>
	</x-jet-dialog-modal>
	
	<!-- Edit Modal -->
	<x-jet-dialog-modal wire:model="dataEditModalOpen">
		<x-slot name="title">
			Edit  <span class="text-yellow-400">{{$targetedData->subcategory_name ?? ''}}</span>
		</x-slot>

		<x-slot name="content">
			<!-- Data edit modal -->
			<div class="mt-4">
				<div>
					<p class="font-semibold text-md">Select Type</p>
					<select wire:model="editCategory" class="w-full py-1 rounded">
						<option value="">Select Type</option>
						@foreach($categories as $category)
						<option value="{{$category->code}}" {{old('addCategory') ? 'selected' : ''}}>{{$category->category_name}}</option>
						@endforeach
					</select>
					@error('category')
					<p class="text-xs font-semibold text-rose-600 mr-1 ">{{$message}}</p>
					@enderror
				</div>
				<!-- subcategory_name -->
				<div class="relative">
					<label for="editName" class="block font-semibold text-md">Name</label>
					<input id="editName" type="text" wire:model="editName" class="w-full py-1 rounded" placeholder="Subcategory Name">
					@error('editName')
					<p class="text-xs font-semibold text-rose-600 absolute inset-0 top-auto -bottom-3.5 mr-1 ">{{$message}}</p>
					@enderror
				</div>
				<!-- Image -->
				<div class="">
					<p class="block font-semibold text-md mb-2">Image :</p>
					<label class="flex items-center bg-white text-blue-500 border border-gray-500 pr-1">
						<input type="file" wire:model="editImage" class="px-3 py-2 w-full">
						@if ($editImage)
							<img class="h-8 w-12" src="{{ $editImage->temporaryUrl() }}">
						@endif
					</label>
					@error('editImage')
						<p class="text-sm text-rose-500">{{$message}}</p>
					@enderror
				</div>
			</div>
		
		</x-slot>

		<x-slot name="footer">
			<x-jet-secondary-button wire:click="$toggle('dataEditModalOpen')">
				{{ __('Cancel') }}
			</x-jet-secondary-button>

			<x-jet-danger-button class="ml-3" wire:click="dataEdit" wire:loading.attr="disabled">
				{{ __('Update') }}
			</x-jet-danger-button>
		</x-slot>
	</x-jet-dialog-modal>
	
</div>
