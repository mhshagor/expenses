<x-admin-layout>
	<div class="py-20 flex gap-3 justify-center items-center">
		<x-button :href="route('home-page')" class="w-32 h-8 justify-center bg-sky-500 hover:bg-sky-600 text-sm text-white w-auto">Add Home Page</x-button>
		<x-button :href="route('home-about')" class="w-32 h-8 justify-center bg-sky-500 hover:bg-sky-600 text-sm text-white w-auto">Add About Page</x-button>
		<x-button :href="route('home-service')" class="w-32 h-8 justify-center bg-sky-500 hover:bg-sky-600 text-sm text-white w-auto">Add Service Page</x-button>
	</div>
</x-admin-layout>
