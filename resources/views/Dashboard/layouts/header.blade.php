
<!DOCTYPE html>
<html>

<head>
	<!-- Required meta Tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no" />
	<!-- Company Title -->
	<title>Deshboard || Tailwind CSS v-3.0.11</title>
	<!-- google-font -->
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet" />
	<!-- Company Icon -->
	<link rel="icon" href="{{env('APP_URL')}}/public/dashboardFile/images/logo.png" />
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{env('APP_URL')}}/public/dashboardFile/css/all.css" />
	<!-- Tailwind CSS -->
	
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
	<style>
		@import url("https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap");

		body {
			font-family: "Noto Sans", sans-serif !important;
		}
	</style>
</head>
<body style="font-family:  'Noto Sans', sans-serif;">
	<main class="bg-gray-100">
		<div id="" x-data="{offcanvas : true }" class="flex">

			<div class="">
				@include("dashboard/layouts/navbar_sidebar")
			</div>
			<div class="transition-all duration-700 w-full">
				@include("dashboard/layouts/navbar")
				@include("dashboard.welcome")
				