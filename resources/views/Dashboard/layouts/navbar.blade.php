<!-- nav -bar-->

<nav class="z-50 flex items-center justify-between p-4 transition-all duration-700 bg-blue-900" :class=" offcanvas == true ? '':'' ">
	<div class="flex items-center gap-x-4 ">
		<button type="button" class="text-gray-200 hover:text-white hover:text-white focus:outline-none transition-all duration-300 outline-none focus:outline-o" @click="offcanvas !== true ? offcanvas = true : offcanvas = false ">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
			</svg>
		</button>
		<input type="text" id="" name="" class="hidden sm:block text-white border-none placeholder-gray-500 bg-transparent" value="" placeholder="Search projects..">
	</div>
	<div class="flex items-center gap-x-2.5" x-data="{ dropdown: null }" @click.away="dropdown = null">
		<!-- message -->
		<div class="relative z-50">
			<button type="button" class="flex font-semibold text-gray-300 px-2" id="user-menu-button" @click="dropdown !== 'message' ? dropdown = 'message' : dropdown = null">
				<span class="sr-only">message</span>
				<svg :class="message == true ? 'text-white' : '' " xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
					<path fill-rule="evenodd" d="M2.94 6.412A2 2 0 002 8.108V16a2 2 0 002 2h12a2 2 0 002-2V8.108a2 2 0 00-.94-1.696l-6-3.75a2 2 0 00-2.12 0l-6 3.75zm2.615 2.423a1 1 0 10-1.11 1.664l5 3.333a1 1 0 001.11 0l5-3.333a1 1 0 00-1.11-1.664L10 11.798 5.555 8.835z" clip-rule="evenodd" />
				</svg>
			</button>
			<div x-ref="container0" x-bind:style="dropdown == 'message' ? 'max-height: ' + $refs.container0.scrollHeight + 'px' : ''" :class="dropdown == 'message' ? 'ring-offset-1 ring-1 ring-blue-200 border' : ''" class="max-h-0 overflow-hidden right-0 top-9 bottom-auto w-80 rounded-b-md shadow-lg transition-all duration-500 bg-white absolute z-20">
				<div class="divide-y divide-gray-300">
					<h3 class="text-center bg-blue-700 py-3 text-sm text-white">4 New Messages</h3>
					<div class="relative flex items-center gap-x-4 p-4">
						<img class="h-11 w-11 rounded-full" src="../images/avatar-1.jpg" alt="avatar">
						<div class="space-y-2">
							<h2 class="text-blue-900 text-sm">Michelle Bilodeau</h2>
							<p class="text-xs text-gray-500">Nam pretium turpis et arcu. Duis arcu tortor</p>
							<p class="text-xs text-gray-500">5m ago</p>
						</div>
						<a href="#" class="absolute h-full w-full"></a>
					</div>
					<div class="relative flex items-center gap-x-4 p-4">
						<img class="h-11 w-11 rounded-full" src="../images/avatar-2.jpg" alt="avatar">
						<div class="space-y-2">
							<h2 class="text-blue-900 text-sm">Kathie Burton</h2>
							<p class="text-xs text-gray-500">Nam pretium turpis et arcu. Duis arcu tortor</p>
							<p class="text-xs text-gray-500">30m ago</p>
						</div>
						<a href="#" class="absolute h-full w-full"></a>
					</div>
					<div class="relative flex items-center gap-x-4 p-4">
						<img class="h-11 w-11 rounded-full" src="../images/avatar-3.jpg" alt="avatar">
						<div class="space-y-2">
							<h2 class="text-blue-900 text-sm">Alexander Groves</h2>
							<p class="text-xs text-gray-500">Nam pretium turpis et arcu. Duis arcu tortor</p>
							<p class="text-xs text-gray-500">2h ago</p>
						</div>
						<a href="#" class="absolute h-full w-full"></a>
					</div>
					<div class="relative flex items-center gap-x-4 p-4">
						<img class="h-11 w-11 rounded-full" src="{{env('APP_URL')}}/public/dashboardFile/images/avatar-1.jpg" alt="avatar">
						<div class="space-y-2">
							<h2 class="text-blue-900 text-sm">Disy Seger</h2>
							<p class="text-xs text-gray-500">Nam pretium turpis et arcu. Duis arcu tortor</p>
							<p class="text-xs text-gray-500">5h ago</p>
						</div>
						<a href="#" class="absolute h-full w-full"></a>
					</div>
					<div class="text-center bg-blue-700 text-white">
						<button class="text-xs py-2">Show all messages</button>
					</div>

				</div>
			</div>
		</div>
		<!-- notification -->
		<div class="relative z-50">
			<button type="button" class="flex font-semibold text-gray-300 px-2" id=""@click="dropdown !== 'notification' ? dropdown = 'notification' : dropdown = null">
				<span class="sr-only">notification</span>
				<svg :class="notification == true ? 'text-white' : '' " xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
					<path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
				</svg>
			</button>
			<div x-ref="notification" x-bind:style="dropdown == 'notification' ? 'max-height: ' + $refs.notification.scrollHeight + 'px' : ''" :class="dropdown == 'notification' ? 'ring-offset-1 ring-1 ring-blue-200 border' : ''" class="max-h-0 overflow-hidden right-0 top-9 bottom-auto w-80 rounded-b-md shadow-lg transition-all duration-500 bg-white absolute z-20">
				<div class="divide-y divide-gray-300">
					<h3 class="text-center bg-blue-700 py-3 text-sm text-white">4 New Notification</h3>
					<div class="relative flex items-center gap-x-4 p-4">
						<i class="fas fa-bell text-red-600 mx-2"></i>
						<div class="space-y-2">
							<h2 class="text-blue-900 text-sm">Update completed</h2>
							<p class="text-xs text-gray-500">Restart server 12 to complete the update</p>
							<p class="text-xs text-gray-500">2h ago</p>
						</div>
						<a href="#" class="absolute h-full w-full"></a>
					</div>
					<div class="relative flex items-center gap-x-4 p-4">
						<i class="fas fa-envelope-open text-red-400 mx-2"></i>
						<div class="space-y-2">
							<h2 class="text-blue-900 text-sm">lorem ipsum</h2>
							<p class="text-xs text-gray-500">Nam pretium turpis et arcu. Duis arcu tortor</p>
							<p class="text-xs text-gray-500">6h ago</p>
						</div>
						<a href="#" class="absolute h-full w-full"></a>
					</div>
					<div class="relative flex items-center gap-x-4 p-4">
						<i class="fas fa-building text-blue-600 mx-2"></i>
						<div class="space-y-2">
							<h2 class="text-blue-900 text-sm">Login from 199.23.434.22</h2>
							<p class="text-xs text-gray-500">Nam pretium turpis et arcu. Duis arcu tortor</p>
							<p class="text-xs text-gray-500">8h ago</p>
						</div>
						<a href="#" class="absolute h-full w-full"></a>
					</div>
					<div class="relative flex items-center gap-x-4 p-4">
						<i class="fas fa-bell-slash text-green-500 mx-2"></i>
						<div class="space-y-2">
							<h2 class="text-blue-900 text-sm">Disy Seger</h2>
							<p class="text-xs text-gray-500">Nam pretium turpis et arcu. Duis arcu tortor</p>
							<p class="text-xs text-gray-500">5h ago</p>
						</div>
						<a href="#" class="absolute h-full w-full"></a>
					</div>
					<div class="text-center bg-blue-700 text-white">
						<button class="text-xs py-2">Show all notification</button>
					</div>
				</div>
			</div>
		</div>
		<!-- setting -->
		<div class="relative z-50">
			<button type="button" class="flex font-semibold text-gray-300 px-2" id="" @click="dropdown !== 'setting' ? dropdown = 'setting' : dropdown = null">
				<span class="sr-only">setting</span>
				<svg :class="setting == true ? 'text-white' : '' " xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
					<path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
				</svg>
			
			</button>
			<div x-ref="setting" x-bind:style="dropdown == 'setting' ? 'max-height: ' + $refs.setting.scrollHeight + 'px' : ''" class="max-h-0 overflow-hidden right-0 top-9 bottom-auto w-64 rounded-b-md transition-all duration-500 absolute z-20">
				<img src="{{env('APP_URL')}}/public/dashboardFile/images/head_bg_sm.png" class="h-28 w-full">
				<div class="ring-offset-1 ring-1 rounded-b-md m-0.5 mt-0 bg-white">
					<div class="flex items-center -mt-6 px-2">
						<span class="align-self-center">
							<img class="h-12 w-12 rounded-full block mx-auto" src="{{env('APP_URL')}}/public/dashboardFile/images/<?php echo $_SESSION['auth']['images']?? 'profile-image.png'; ?>">
						</span>
						<div class="ml-2 -mt-1 text-sm space-y-2">
							<h4 class="text-rose-900 font-bold uppercase">{{ Auth::user()->name }}</h4>
							<p class="text-xs text-indigo-800">{{ Auth::user()->email }}</p>
						</div>
					</div>
					<div class="divide-y divide-gray-300">
						<div class="py-2">
							<a href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')" class="flex items-center gap-x-3 pl-8 hover:bg-gray-100 py-1.5 transition-all duration-300">
								<i class="fas fa-user text-gray-700"></i>
								<h4 class="text-gray-600">View Profile</h4>
							</a>
							<a href="#" class="flex items-center gap-x-3 pl-8 hover:bg-gray-100 py-1.5 transition-all duration-300">
								<i class="fas fa-comments text-gray-700"></i>
								<h4 class="text-gray-600 text-">Contacts</h4>
							</a>
							<a href="#" class="flex items-center gap-x-3 pl-8 hover:bg-gray-100 py-1.5 transition-all duration-300">
								<i class="fas fa-chart-pie text-gray-700"></i>
								<h4 class="text-gray-600 text-">Analytics</h4>
							</a>
							<a href="#" class="flex items-center gap-x-3 pl-8 hover:bg-gray-100 py-1.5 transition-all duration-300">
								<i class="fas fa-cogs text-gray-700"></i>
								<h4 class="text-gray-600 text-">Settings</h4>
							</a>
						</div>
						
						<div class="py-2 bg-blue-700 rounded-b-md">
							<form method="POST" action="{{ route('logout') }}" x-data>
								@csrf
								<button href="{{ route('logout') }}" @click.prevent="$root.submit();" class="w-full flex items-center gap-x-3 pl-8 text-white hover:text-red-600 transition-all duration-500">
									<i class="fas fa-sign-out-alt"></i>
									<h4 class="">Sign out</h4>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>