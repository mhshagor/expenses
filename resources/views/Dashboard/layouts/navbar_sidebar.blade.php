<!-- Offcanvas-Mobile manue -->
<nav class="transition-all duration-700">
    <div class="-ml-80 w-64 sm:w-80 z-50 h-full transition-all duration-700" x-ref="offcanvas1" :class=" offcanvas == true ? 'ml-0':'' ">
        <div class="px-3 py-2 bg-blue-900">
            <a href="../index.php" class="flex items-center gap-x-2 py-2">
                <img class="h-6 rounded-full" src="{{env('APP_URL')}}/public/dashboardFile/images/logo.png" alt="logo">
                <h2 class="text-white text-lg font-semibold">Dashboard</h2>
            </a>
        </div>
        <!-- user info in side bar-->
        <div class="space-y-2 border p-3 bg-white">
            <!-- user -->
            <div class="space-y-1.5 text-center py-6">
				<img class="h-16 w-16 rounded-full block mx-auto" src="{{env('APP_URL')}}/public/dashboardFile/images/<?php echo $_SESSION['auth']['images']?? 'profile-image.png'; ?>">
                <h4 class="text-indigo-900 uppercase">{{ Auth::user()->name }}</h4>
                <p class="text-xs text-indigo-800">{{ Auth::user()->email }}</p>
            </div>
			<?php 
				//echo $_SERVER['PHP_SELF'];
				//echo basename($_SERVER['PHP_SELF']);
				$activePanel = (basename($_SERVER['PHP_SELF']) == 'home-slider.php' || basename($_SERVER['PHP_SELF']) == 'home-services.php' || basename($_SERVER['PHP_SELF']) == 'home-progress-bar.php' || basename($_SERVER['PHP_SELF']) == 'home-project.php'|| basename($_SERVER['PHP_SELF']) == 'home-review.php'|| basename($_SERVER['PHP_SELF']) == 'home-address.php' || basename($_SERVER['PHP_SELF']) == 'home-footer.php'  ? 'sections' : 'dashboard');
				$activePanelClass ='bg-gray-200 text-blue-900 font-semibold rounded shadow-inner';
			
			?>
            <!-- items -->
            <div x-data="{acordion : '<?php echo $activePanel; ?>' }" class="">
                <ul>
                    <!-- Main -->
                    <li>
                        <h5 class="font-semibold text-xs text-gray-500 my-2 pl-2">Main</h5>
                    </li>
                    <!-- Dashboards -->
                    <li>
                        <button @click="acordion !== 'dashboard' ? acordion = 'dashboard' : acordion = null" x-bind:class="acordion == 'dashboard' ? 'text-blue-900 font-semibold':''" class="w-full flex items-center justify-between p-2.5 <?php echo ($activePanel =='dashboard' ? $activePanelClass : 'text-gray-600'); ?>">
                            <div class="flex items-center gap-x-3">
                                <i class="fas fa-home text-blue-900"></i>
                                <h5 class="text-sm">Dashboards</h5>
                            </div>
                            <svg x-bind:class="acordion == 'dashboard' ? 'transform rotate-90':''" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                        <div class="overflow-hidden max-h-0 transition-all duration-700" x-ref="dashboard" x-bind:style="acordion == 'dashboard' ? 'max-height: ' + $refs.dashboard.scrollHeight + 'px' : ''">
                            <ul class="ml-10 space-y-2 text-gray-600 flex flex-col">
                                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="">
									{{ __('Dashboard') }}
								</x-jet-nav-link>
								<x-jet-nav-link href="{{ route('business-categories') }}" :active="request()->routeIs('business-categories')">
									{{ __('Livewire Business Category') }}
								</x-jet-nav-link>
								
								<x-jet-nav-link href="{{ route('expenses-bills') }}" :active="request()->routeIs('expenses-bills')">
									{{ __('Livewire Expenses Bills') }}
								</x-jet-nav-link>
								<x-jet-nav-link href="{{ route('expenses-types') }}" :active="request()->routeIs('expenses-types')">
									{{ __('Livewire Expenses Type') }}
								</x-jet-nav-link>
								
								<x-jet-nav-link href="{{ route('expenses-type') }}" :active="request()->routeIs('expenses-type') || request()->routeIs('type-update')">
									{{ __('Expenses Type') }}
								</x-jet-nav-link>
								<x-jet-nav-link href="{{ route('business-category') }}" :active="request()->routeIs('business-category') || request()->routeIs('category-update')">
									{{ __('Business Category') }}
								</x-jet-nav-link>
								<x-jet-nav-link href="{{ route('business-subcategory') }}" :active="request()->routeIs('business-subcategory') || request()->routeIs('subcategory-update') || request()->routeIs('business-subcategory-create')">
									{{ __('Business Subcategory') }}
								</x-jet-nav-link>
								<x-jet-nav-link href="{{ route('product-list') }}" :active="request()->routeIs('product-list') || request()->routeIs('product-update') || request()->routeIs('business-product-create')">
									{{ __('Products') }}
								</x-jet-nav-link>
								<x-jet-nav-link href="{{ route('portfolio-dashboard') }}" :active="request()->routeIs('portfolio-dashboard')">
									{{ __('Portfolio') }}
								</x-jet-nav-link>
							</ul>
                        </div>
                    </li>
                    <!-- Pages -->
                    <li>
                        <button @click="acordion !== 'pages' ? acordion = 'pages' : acordion = null" x-bind:class="acordion == 'pages' ? 'text-blue-900 font-semibold':''" class="w-full flex items-center justify-between p-2.5 <?php echo ($activePanel =='pages' ? $activePanelClass : 'text-gray-600') ?>">
                            <div class="flex items-center gap-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-900" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
                                </svg>
                                <h5 class="text-sm">Pages</h5>
                            </div>
                            <svg x-bind:class="acordion == 'pages' ? 'transform rotate-90':''" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                        <div class="overflow-hidden  max-h-0 transition-all duration-700" x-ref="pages" x-bind:style="acordion == 'pages' ? 'max-height: ' + $refs.pages.scrollHeight + 'px' : ''">
                            <ul class="ml-10 mr-2.5 space-y-2">
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Settings</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Services</small></a></li>
                                <li><a href="" class="flex items-center justify-between  text-gray-600 hover:text-black"><small>Clients</small><small class="bg-blue-700 text-white px-1.5 rounded-full">New</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Invoice</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Pricing</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Tasks</small></a></li>
                                <li><a href="" class="flex items-center justify-between text-gray-600 hover:text-black"><small>Chat</small><small class="bg-blue-700 text-white px-1.5 rounded-full">New</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Blank Page</small></a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- Section -->
                    <li>
                        <button @click="acordion !== 'sections' ? acordion = 'sections' : acordion = null"  x-bind:class="acordion == 'sections' ? 'text-blue-900 font-semibold':''" class="w-full flex items-center justify-between p-2.5 <?php echo ($activePanel =='sections' ? $activePanelClass : 'text-gray-600') ?>">
                            <div class="flex items-center gap-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
								</svg>
                                <h5 class="text-sm">Section</h5>
                            </div>
                            <svg x-bind:class="acordion == 'sections' ? 'transform rotate-90':''" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                        <div class="overflow-hidden max-h-0 transition-all duration-700" x-ref="sections" x-bind:style="acordion == 'sections' ? 'max-height: ' + $refs.sections.scrollHeight + 'px' : ''">
                            <ul class="ml-10 mr-2.5 space-y-2">
                                <li>
									<a href="home-slider.php" class="hover:text-black <?php echo (basename($_SERVER['PHP_SELF']) == 'home-slider.php' ? 'text-black' : 'text-gray-600');?>">
										<small>Home <span class="text-blue-500">-></span> Slider</small>
									</a>
								</li>
                                <li>
									<a href="home-services.php" class="hover:text-black <?php echo (basename($_SERVER['PHP_SELF']) == 'home-services.php' ? 'text-black' : 'text-gray-600');?>">
										<small>Home <span class="text-blue-500">-></span> Services</small>
									</a>
								</li>
                                <li>
									<a href="home-progress-bar.php" class="hover:text-black <?php echo (basename($_SERVER['PHP_SELF']) == 'home-progress-bar.php' ? 'text-black' : 'text-gray-600');?>">
										<small>Home <span class="text-blue-500">-></span> Progress Bar</small>
									</a>
								</li>
                                <li>
									<a href="home-project.php" class="hover:text-black <?php echo (basename($_SERVER['PHP_SELF']) == 'home-project.php' ? 'text-black' : 'text-gray-600');?>">
										<small>Home <span class="text-blue-500">-></span> project</small>
									</a>
								</li>
                                <li>
									<a href="home-review.php" class="hover:text-black <?php echo (basename($_SERVER['PHP_SELF']) == 'home-review.php' ? 'text-black' : 'text-gray-600');?>">
										<small>Home <span class="text-blue-500">-></span> Review</small>
									</a>
								</li>
                                <li>
									<a href="home-address.php" class="hover:text-black <?php echo (basename($_SERVER['PHP_SELF']) == 'home-address.php' ? 'text-black' : 'text-gray-600');?>">
										<small>Home <span class="text-blue-500">-></span> Address</small>
									</a>
								</li>
                                <li>
									<a href="home-footer.php" class="hover:text-black <?php echo (basename($_SERVER['PHP_SELF']) == 'home-footer.php' ? 'text-black' : 'text-gray-600');?>">
										<small>Home <span class="text-blue-500">-></span> Footer</small>
									</a>
								</li>
                                <li>
									<a href="" class="flex items-center justify-between text-gray-600 hover:text-black">
										<small>Clients</small>
										<small class="bg-blue-700 text-white px-1.5 rounded-full">New</small>
									</a>
								</li>
                                <li>
									<a href="" class="text-gray-600 hover:text-black">
										<small>Invoice</small>
									</a>
								</li>
                                <li>
									<a href="" class="text-gray-600 hover:text-black">
										<small>Pricing</small>
									</a>
								</li>
                                <li>
									<a href="" class="text-gray-600 hover:text-black">
										<small>Tasks</small>
									</a>
								</li>
                                <li>
									<a href="" class="flex items-center justify-between text-gray-600 hover:text-black">
										<small>Chat</small>
										<small class="bg-blue-700 text-white px-1.5 rounded-full">New</small>
									</a>
								</li>
                                <li>
									<a href="" class="text-gray-600 hover:text-black">
										<small>Blank Page</small>
									</a>
								</li>
                            </ul>
                        </div>
                    </li>
                    <!-- Auth -->
                    <li>
                        <button @click="acordion !== 'auth' ? acordion = 'auth' : acordion = null" x-bind:class="acordion == 'auth' ? 'text-blue-900 font-semibold':''" class="w-full flex items-center justify-between p-2.5 <?php echo ($activePanel =='auth' ? $activePanelClass : 'text-gray-600') ?>">
                            <div class="flex items-center gap-x-3.5">
                                <i class="fas fa-sign-in-alt text-blue-900 "></i>
                                 <h5 class="text-sm">Auth</h5>
                            </div>
                            <svg x-bind:class="acordion == 'auth' ? 'transform rotate-90':''" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                        <div class="overflow-hidden  max-h-0 transition-all duration-700" x-ref="auth" x-bind:style="acordion == 'auth' ? 'max-height: ' + $refs.auth.scrollHeight + 'px' : ''">
                            <ul class="ml-10 mr-2.5 space-y-2">
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Sign In</small></a></li>
                                <li><a href="" class="flex items-center justify-between  text-gray-600 hover:text-black"><small>Sign Up</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Reset Password</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>404 Page</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>500 Page</small></a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- Elements -->
                    <li>
                        <h5 class="font-semibold text-xs text-gray-500 my-2 pl-2">Elements</h5>
                    </li>
                    <!-- User Interface -->
                    <li>
                        <button @click="acordion !== 'user_interface' ? acordion = 'user_interface' : acordion = null" x-bind:class="acordion == 'user_interface' ? 'text-blue-900 font-semibold':''" class="w-full flex items-center justify-between p-2.5 <?php echo ($activePanel =='user_interface' ? $activePanelClass : 'text-gray-600') ?>">
                            <div class="flex items-center gap-x-3">
                                <i class="fas fa-sign-in-alt text-blue-900 "></i>
                                 <h5 class="text-sm">User Interface</h5>
                            </div>
                            <svg x-bind:class="acordion == 'user_interface' ? 'transform rotate-90':''" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                        <div class="overflow-hidden  max-h-0 transition-all duration-700" x-ref="user_interface" x-bind:style="acordion == 'user_interface' ? 'max-height: ' + $refs.user_interface.scrollHeight + 'px' : ''">
                            <ul class="ml-10 mr-2.5 space-y-2">
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Alerts</small></a></li>
                                <li><a href="" class="flex items-center justify-between  text-gray-600 hover:text-black"><small>Buttons</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Cards</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>General</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Grid</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Modals</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Offcanvas</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Placeholders</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Notifications</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Tabs</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Typography</small></a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- charts -->
                    <li>
                        <button @click="acordion !== 'charts' ? acordion = 'charts' : acordion = null" x-bind:class="acordion == 'charts' ? 'text-blue-900 font-semibold':''" class="w-full flex items-center justify-between p-2.5 <?php echo ($activePanel =='charts' ? $activePanelClass : 'text-gray-600'); ?>">
                            <div class="flex items-center gap-x-3">
                                <i class="fas fa-chart-pie text-blue-900"></i>
                                <div class="flex-grow flex gap-1 items-center text-sm">
                                    <span class="text-sm">Charts</span>
                                    <small class="bg-blue-700 text-white px-1.5 rounded-full">New</small>
                                </div>
                            </div>
                            <svg x-bind:class="acordion == 'charts' ? 'transform rotate-90':''" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                        <div class="overflow-hidden  max-h-0 transition-all duration-700" x-ref="container5" x-bind:style="acordion == 'charts' ? 'max-height: ' + $refs.container5.scrollHeight + 'px' : ''">
                            <ul class="ml-10 mr-2.5 space-y-2">
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Chart.js</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>ApexCharts</small></a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- Forms -->
                    <li>
                        <button @click="acordion !== 'forms' ? acordion = 'forms' : acordion = null" x-bind:class="acordion == 'forms' ? 'text-blue-900 font-semibold':''" class="w-full flex items-center justify-between p-2.5 <?php echo ($activePanel =='forms' ? $activePanelClass : 'text-gray-600'); ?>">
                            <div class="flex items-center gap-x-3.5">
                                <i class="fas fa-check-square text-blue-900"></i>
                                <div class="text-sm">Forms</div>
                            </div>
                            <svg x-bind:class="acordion == 'forms' ? 'transform rotate-90':''" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                        <div class="overflow-hidden max-h-0 transition-all duration-700" x-ref="container6" x-bind:style="acordion == 'forms' ? 'max-height: ' + $refs.container6.scrollHeight + 'px' : ''">
                            <ul class="ml-10 mr-2.5 space-y-2">
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Layout</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Basic Elements</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Advanced Elements</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Floating Labels</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Input Groups</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Editors</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Validation</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Wizard</small></a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- Tables -->
                    <li>
                        <a href="#" class="w-full flex items-center gap-x-3 text-gray-600 p-2.5">
                            <i class="fas fa-list text-blue-900"></i>
                            <h4 class="text-sm">Table</h4>
                        </a>
                    </li>
                    <!-- Data Tables -->
                    <li>
                        <button @click="acordion !== 'dataTable' ? acordion = 'dataTable' : acordion = null"  x-bind:class="acordion == 'dataTable' ? 'text-blue-900 font-semibold':''" class="w-full flex items-center justify-between p-2.5 <?php echo ($activePanel =='dataTable' ? $activePanelClass : 'text-gray-600'); ?>">
                            <div class="flex items-center gap-x-3">
                                <i class="fas fa-table text-blue-900"></i>
                                <div class="text-sm">DataTables</div>
                            </div>
                            <svg x-bind:class="acordion == 'dataTable' ? 'transform rotate-90':''" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                        <div class="overflow-hidden  max-h-0 transition-all duration-700" x-ref="dataTable" x-bind:style="acordion == 'dataTable' ? 'max-height: ' + $refs.dataTable.scrollHeight + 'px' : ''">
                            <ul class="ml-10 mr-2.5 space-y-2">
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Responsive Table</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Table with Buttons</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Column Search</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Fixed Header</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Multi Selection</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Ajax Sourced Data</small></a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- Icons -->
                    <li>
                        <button @click="acordion !== 'icon' ? acordion = 'icon' : acordion = null" x-bind:class="acordion == 'icon' ? 'text-blue-900 font-semibold':''" class="w-full flex items-center justify-between p-2.5 <?php echo ($activePanel =='icon' ? $activePanelClass : 'text-gray-600'); ?>">
                            <div class="flex items-center gap-x-3">
                                <i class="fas fa-heart text-blue-900"></i>
                                <div class="text-sm">Icons</div>
                            </div>
                            <svg x-bind:class="acordion == 'icon' ? 'transform rotate-90':''" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                        <div class="overflow-hidden  max-h-0 transition-all duration-700" x-ref="icon" x-bind:style="acordion == 'icon' ? 'max-height: ' + $refs.icon.scrollHeight + 'px' : ''">
                            <ul class="ml-10 mr-2.5 space-y-2">
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Feather</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Ion Icons</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Font Awesome</small></a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- Calendar -->
                    <li>
                        <a href="#" class="w-full flex items-center gap-x-3 p-2.5">
                            <i class="far fa-calendar-alt text-blue-900"></i>
                            <h4 class="text-gray-600 text-sm hover:text-black">Calendar</h4>
                        </a>
                    </li>
                    <!-- Maps -->
                    <li>
                        <button @click="acordion !== 'map' ? acordion = 'map' : acordion = null" x-bind:class="acordion == 'map' ? 'text-blue-900 font-semibold':''" class="w-full flex items-center justify-between p-2.5 <?php echo ($activePanel =='map' ? $activePanelClass : 'text-gray-600'); ?>">
                            <div class="flex items-center gap-x-4">
                                <i class="fas fa-map-marker-alt text-blue-900"></i>
                                <div class="text-sm">Maps</div>
                            </div>
                            <svg x-bind:class="acordion == 'map' ? 'transform rotate-90':''" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                        <div class="overflow-hidden  max-h-0 transition-all duration-700" x-ref="map" x-bind:style="acordion == 'map' ? 'max-height: ' + $refs.map.scrollHeight + 'px' : ''">
                            <ul class="ml-10 mr-2.5 space-y-2">
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Google Maps</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Vector Maps</small></a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- Extras -->
                    <li>
                        <h5 class="font-semibold text-xs text-gray-500 my-2 pl-2">Extras</h5>
                    </li>
                    <!-- Documentation -->
                    <li>
                        <button @click="acordion !== 'documentation' ? acordion = 'documentation' : acordion = null" x-bind:class="acordion == 'documentation' ? 'text-blue-900 font-semibold':''" class="w-full flex items-center justify-between p-2.5 <?php echo ($activePanel =='documentation' ? $activePanelClass : 'text-gray-600'); ?>">
                            <div class="flex items-center gap-x-4">
                                <i class="fas fa-book text-blue-900"></i>
                                <div class="text-sm">Documentation</div>
                            </div>
                            <svg x-bind:class="acordion == 'documentation' ? 'transform rotate-90':''" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                        <div class="overflow-hidden  max-h-0 transition-all duration-700" x-ref="documentation" x-bind:style="acordion == 'documentation' ? 'max-height: ' + $refs.documentation.scrollHeight + 'px' : ''">
                            <ul class="ml-10 mr-2.5 space-y-2">
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Getting Started</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Plugins</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Changelog</small></a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- Layout -->
                    <li>
                        <button @click="acordion !== 'layOut' ? acordion = 'layOut' : acordion = null" x-bind:class="acordion == 'layOut' ? 'text-blue-900 font-semibold':''" class="w-full flex items-center justify-between p-2.5 <?php echo ($activePanel =='layOut' ? $activePanelClass : 'text-gray-600'); ?>">
                            <div class="flex items-center gap-x-3.5">
                                <i class="fas fa-tv text-blue-900 -ml-1"></i>
                                <div class="text-sm">Layout</div>
                            </div>
                            <svg x-bind:class="acordion == 'layOut' ? 'transform rotate-90':''" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                        <div class="overflow-hidden  max-h-0 transition-all duration-700" x-ref="layOut" x-bind:style="acordion == 'layOut' ? 'max-height: ' + $refs.layOut.scrollHeight + 'px' : ''">
                            <ul class="ml-10 mr-2.5 space-y-2">
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Left Sidebar</small></a></li>
                                <li><a href="" class="text-gray-600 hover:text-black"><small>Right Sidebar</small></a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>