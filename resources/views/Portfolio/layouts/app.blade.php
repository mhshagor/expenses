<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta Tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no" />
		<!-- Company Title -->
		<title>Portfolio</title>
		<!-- Company Icon -->
		<link rel="icon" href="{{env('APP_URL')}}/public/PortfolioFile/images/demo/mylogo.png" />

		<!-- Font Awesome -->
		<link rel="stylesheet" href="{{env('APP_URL')}}/public/PortfolioFile/css/all.css" />

		<!-- Tailwind CSS -->
		<link rel="stylesheet" href="{{env('APP_URL')}}/public/PortfolioFile/css/tailwind.min.css"/>
		<script src="https://cdn.tailwindcss.com"></script>
	<!-- Scripts -->
	@vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    @include("Portfolio.layouts.header")

    <main class="p-top-6rem p-md-top-10rem">
		
		{{$slot}}

    </main>

    @include("Portfolio.layouts.footer")

	<script src="{{env('APP_URL')}}/public/PortfolioFile/js/alpine.min.js"></script>
	@stack('scripts')
</body>

</html>