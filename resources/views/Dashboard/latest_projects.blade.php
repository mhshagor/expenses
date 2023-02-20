<!-- Latest-projects -->

<div class="col-span-full xl:col-span-9">
    <div class="bg-white p-5 shadow-md rounded overflow-auto h-full">
        <div class="flex items-center justify-between text-indigo-900 font-semibold pb-2">
            <h6 class="">Latest Projects</h6>
            <div class="flex items-center gap-2">
                <button class="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw align-middle">
                        <polyline points="23 4 23 10 17 10"></polyline>
                        <polyline points="1 20 1 14 7 14"></polyline>
                        <path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>
                    </svg>
                </button>
                <div class="relative" x-data="{ dropdown: null }" @click.away="dropdown = null">
                    <button class="" @click="dropdown !== 0 ? dropdown = 0 : dropdown = null">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical align-middle">
                            <circle cx="12" cy="12" r="1"></circle>
                            <circle cx="12" cy="5" r="1"></circle>
                            <circle cx="12" cy="19" r="1"></circle>
                        </svg>
                    </button>

                    <div x-ref="container0" x-bind:style="dropdown == 0 ? 'max-height: ' + $refs.container0.scrollHeight + 'px' : ''" :class="dropdown == 0 ? 'border' : ''" class="max-h-0 overflow-hidden right-0 top-7 bottom-auto w-36 rounded-md shadow-lg px-7 transition-all duration-500 bg-white absolute z-20">
                        <a href="#" class="block py-2 text-sm text-gray-700 hover:underline">Your Profile</a>
                        <a href="#" class="block pb-2 text-sm text-gray-700 hover:underline">Settings</a>
                        <a href="#" class="block pb-2 text-sm text-gray-700 hover:underline">Sign out</a>
                    </div>
                </div>
            </div>
        </div>
        <table class="w-full">
            <thead class="border-b border-black">
                <tr class="text-left font-bold text-purple-900">
                    <th class="p-3">Name <span class="text-sm float-right text-gray-500 mt-1">↑↓</span></th>
                    <th class="p-3">Start Date <span class="text-sm float-right text-gray-500 mt-1">↑↓</span></th>
                    <th class="p-3">End Date <span class="text-sm float-right text-gray-500 mt-1">↑↓</span></th>
                    <th class="p-3">Status <span class="text-sm float-right text-gray-500 mt-1">↑↓</span></th>
                    <th class="p-3 hidden md:block">Assignee <span class="text-sm float-right text-gray-500 mt-1">↑↓</span></th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-gray-100 text-sm text-indigo-900">
                    <td class="p-3 text-base">project apollo</td>
                    <td class="p-3">01/01/2021</td>
                    <td class="p-3">31/06/2021</td>
                    <td class="p-3">
                        <span class="text-sm text-white bg-green-400 px-2 rounded-md">done</span>
                    </td>
                    <td class="p-3 hidden md:block">Carl Jenkins</td>
                </tr>
                <tr class="text-sm text-indigo-900">
                    <td class="p-3 text-base">project apollo</td>
                    <td class="p-3">01/01/2021</td>
                    <td class="p-3">31/06/2021</td>
                    <td class="p-3">
                        <span class="text-sm text-white bg-red-400 px-2 rounded-md">done</span>
                    </td>
                    <td class="p-3 hidden md:block">Carl Jenkins</td>
                </tr>
                <tr class="bg-gray-100 text-sm text-indigo-900">
                    <td class="p-3 text-base">project apollo</td>
                    <td class="p-3">01/01/2021</td>
                    <td class="p-3">31/06/2021</td>
                    <td class="p-3">
                        <span class="text-white bg-green-400 px-2 rounded-md">done</span>
                    </td>
                    <td class="p-3 hidden md:block">Carl Jenkins</td>
                </tr>
                <tr class="text-sm text-indigo-900">
                    <td class="p-3 text-base">project apollo</td>
                    <td class="p-3">01/01/2021</td>
                    <td class="p-3">31/06/2021</td>
                    <td class="p-3">
                        <span class="text-white bg-blue-400 px-2 rounded-md">done</span>
                    </td>
                    <td class="p-3 text-gray-700 hidden md:block">Carl Jenkins</td>
                </tr>
                <tr class="bg-gray-100 text-sm text-indigo-900">
                    <td class="p-3 text-base">project apollo</td>
                    <td class="p-3">01/01/2021</td>
                    <td class="p-3">31/06/2021</td>
                    <td class="p-3">
                        <span class="text-white bg-yellow-400 px-2 rounded-md">done</span>
                    </td>
                    <td class="p-3 text-gray-700 hidden md:block">Carl Jenkins</td>
                </tr>
                <tr class="text-sm text-indigo-900">
                    <td class="p-3 text-base">project apollo</td>
                    <td class="p-3">01/01/2021</td>
                    <td class="p-3">31/06/2021</td>
                    <td class="p-3">
                        <span class="text-white bg-indigo-400 px-2 rounded-md">done</span>
                    </td>
                    <td class="p-3 hidden md:block">Carl Jenkins</td>
                </tr>
            </tbody>
        </table>
        <div class="flex flex-col md:flex-row gap-2 items-center justify-between px-4 font-light text-indigo-900">
            <p>Showing 1 to 6 of 9 entries</p>
            <div>
                <div class="inline-flex border border-gray-300 rounded-md text-xs divide-x divide-gray-500 divide-opacity-30 overflow-hidden" role="toolbar">
                    <button type="button" class="px-4 py-2 hover:bg-gray-200 focus:bg-blue-500 duration-700 focus:text-white">Previous</button>

                    <button type="button" class="px-4 py-2 hover:bg-gray-200 focus:bg-blue-500 duration-700 focus:text-white">2</button>

                    <button type="button" class="px-4 py-2 hover:bg-gray-200 focus:bg-blue-500 duration-700 focus:text-white">3</button>

                    <button type="button" class="px-4 py-2 hover:bg-gray-200 focus:bg-blue-500 duration-700 focus:text-white">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>