<!-- calendar -->

<div class="col-span-full md:col-span-6 xl:col-span-3">
    <div class="p-5 bg-white shadow-md h-full">
        <div class="flex items-center justify-between text-indigo-900 font-semibold pb-5">
            <h6 class="">Calendar</h6>
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
            <thead class="text-indigo-900">
                <tr class="h-9 text-lg">
                    <th class="">
                        <span class="fas fa-chevron-left"></span>
                    </th>
                    <th class="font-semibold" colspan="5">January 2022</th>
                    <th>
                        <span class="fas fa-chevron-right"></span>
                    </th>
                </tr>
                <tr class="font-semibold">
                    <th class="py-6">Su</th>
                    <th class="py-6">Mo</th>
                    <th class="py-6">Tu</th>
                    <th class="py-6">We</th>
                    <th class="py-6">Th</th>
                    <th class="py-6">Fr</th>
                    <th class="py-6">Sa</th>
                </tr>
            </thead>
            <tbody class="text-center text-indigo-900 space-y-6">
                <tr class="">
                    <td class="rounded text-gray-300 py-5">26</td>
                    <td class="text-gray-400 py-5">27</td>
                    <td class="text-gray-400 py-5">28</td>
                    <td class="text-gray-400 py-5">29</td>
                    <td class="text-gray-400 py-5">30</td>
                    <td class="text-gray-400 py-5">31</td>
                    <td class="hover:bg-gray-300 rounded py-5">1</td>
                </tr>
                <tr>
                    <td class="hover:bg-gray-300 rounded py-5">2</td>
                    <td class="hover:bg-gray-300 rounded py-5">3</td>
                    <td class="hover:bg-gray-300 rounded py-5">4</td>
                    <td class="hover:bg-gray-300 rounded py-5">5</td>
                    <td class="hover:bg-gray-300 rounded py-5">6</td>
                    <td class="hover:bg-gray-300 rounded py-5">7</td>
                    <td class="hover:bg-gray-300 rounded py-5">8</td>
                </tr>
                <tr>
                    <td class="hover:bg-gray-300 rounded py-5">9</td>
                    <td class="hover:bg-gray-300 rounded py-5">10</td>
                    <td class="hover:bg-gray-300 rounded py-5">11</td>
                    <td class="hover:bg-gray-300 rounded py-5">12</td>
                    <td class="hover:bg-gray-300 rounded py-5">13</td>
                    <td class="hover:bg-gray-300 rounded py-5">14</td>
                    <td class="hover:bg-gray-300 rounded py-5">15</td>
                </tr>
                <tr>
                    <td class="hover:bg-gray-300 rounded py-5">16</td>
                    <td class="hover:bg-gray-300 rounded py-5">17</td>
                    <td class="hover:bg-gray-300 rounded py-5">18</td>
                    <td class="hover:bg-gray-300 rounded py-5">19</td>
                    <td class="hover:bg-gray-300 rounded py-5">20</td>
                    <td class="hover:bg-gray-300 rounded py-5">21</td>
                    <td class="hover:bg-gray-300 rounded py-5">22</td>
                </tr>
                <tr>
                    <td class="hover:bg-gray-300 rounded py-5">23</td>
                    <td class="hover:bg-gray-300 rounded py-5">24</td>
                    <td class="hover:bg-gray-300 rounded py-5">25</td>
                    <td class="hover:bg-gray-300 rounded py-5">26</td>
                    <td class="hover:bg-gray-300 rounded py-5">27</td>
                    <td class="hover:bg-gray-300 rounded py-5">28</td>
                    <td class="hover:bg-gray-300 rounded py-5">29</td>
                </tr>
                <tr>
                    <td class="hover:bg-gray-300 rounded py-5">30</td>
                    <td class="hover:bg-gray-300 rounded py-5">31</td>
                    <td class="text-gray-300">1</td>
                    <td class="text-gray-300">2</td>
                    <td class="text-gray-300">3</td>
                    <td class="text-gray-300">4</td>
                    <td class="text-gray-300">5</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>