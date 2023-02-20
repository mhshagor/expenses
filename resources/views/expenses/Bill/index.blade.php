<x-app-layout>
	
	<div class="p-1">
		<div class="mx-5 border shadow-lg shadow-stone-400 rounded bg-white p-1 my-10">
			<div class="bg-stone-50 rounded">
				<section class="bg-stone-200 py-12 rounded">
					<div class="w-28 ml-auto border bg-stone-50 p-0.5 shadow-lg shadow-stone-400 rounded mr-12 mb-2">
						<x-button :href="route('expenses-bill-create')" class=" h-8 w-full justify-center bg-sky-500 hover:bg-sky-600 text-sm text-white w-auto">Add Bill</x-button>
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
											<img class="h-10 w-16" src="{{env('APP_URL').'/'.($bill->boucher_image)}}">
										</td>
										<td class="px-6 py-1.5">{{$bill->billing_date}}</td>
										<td class="px-6 py-1.5">{{$bill->assign_user->name}} {{$bill->update_user? ' | ' .$bill->update_user->name : ''}}</td>
											
										<td class="px-6 py-1.5">
											<div class="flex items-center justify-center gap-1">
												<x-button :href="route('bill-update',['code'=>$bill->code])" class="justify-center bg-yellow-500 hover:shadow-yellow-500/70 text-white hover:shadow-lg duration-500 h-7 w-6">
													<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
														<path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
													</svg>
												</x-button>
												<form method="post" action="{{route('expenses-bill-delete')}}">
													@csrf
													<x-button name="deleteId" value="{{$bill->id}}" class="justify-center bg-rose-500 hover:shadow-rose-500/70 text-white hover:shadow-lg duration-500 h-7 w-6">
														<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
															<path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
														</svg>
													</x-button>
												</form>
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
	
</x-app-layout>