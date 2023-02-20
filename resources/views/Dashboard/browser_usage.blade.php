<!-- Browser-usage -->

<div class="col-span-full md:col-span-6 xl:col-span-3 order-1 xl:order-2">
    <div class="p-5 bg-white shadow-md">
        <div class="flex items-center justify-between text-indigo-900 font-semibold pb-5">
            <h6 class="">Browser Usage</h6>
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
        <div>
            <canvas id="pieChart" class="w-full" height="300"></canvas>
        </div>
        <div class="pt-6 divide-y divide-y-2">
            <div class="flex items-center justify-between text-gray-600 p-4">
                <div class="flex gap-2">
                    <div class="h-6 w-6 rounded-full bg-blue-500"></div>
                    <p class="text-lg">Chrome</p>
                </div>
                <p class="text-lg">4401</p>
            </div>
            <div class="flex items-center justify-between text-gray-600 p-4">
                <div class="flex gap-2">
                    <div class="h-6 w-6 rounded-full bg-red-400"></div>
                    <p class="text-lg">Firefox</p>
                </div>
                <p class="text-lg">4003</p>
            </div>
            <div class="flex items-center justify-between text-gray-600 p-4">
                <div class="flex gap-2">
                    <div class="h-6 w-6 rounded-full bg-red-600"></div>
                    <p class="text-lg">IE</p>
                </div>
                <p class="text-lg">1589</p>
            </div>

        </div>
    </div>
</div>