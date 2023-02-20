<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
    
	<!-- Company Title -->
    <title>Shagor</title>
    
	<!-- Company Icon -->
    <link rel="icon" href="">
    
	<!-- google-fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    
	<!-- font-awesome-css-->
    <link rel="stylesheet" href="{{env('APP_URL')}}/public/frontend/css/all.css">
    
	<!-- bootstrap-5-css-->
    <link rel="stylesheet" href="{{env('APP_URL')}}/public/frontend/css/bootstrap.min.css">
    
	<!-- Owl Carouse CSS here -->
    <link rel="stylesheet" href="{{env('APP_URL')}}/public/frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{env('APP_URL')}}/public/frontend/css/owl.theme.default.min.css">
    
	<!-- global-css here-->
    <link rel="stylesheet" href="{{env('APP_URL')}}/public/frontend/css/global.css">
    <link rel="stylesheet" href="{{env('APP_URL')}}/public/frontend/css/bootstrap-extenstions.css">
    
	<!--All customer-css here-->
    <link rel="stylesheet" href="{{env('APP_URL')}}/public/frontend/css/style.css">
	
	<!-- Scripts -->
	@vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    @include("Frontend.layouts.header")

    <main class="p-top-6rem p-md-top-10rem">
		
		{{$slot}}

    </main>

    @include("Frontend.layouts.footer")

    <script src="{{env('APP_URL')}}/public/frontend/js/bootstrap.bundle.js "></script>
    <script>
    window.onscroll = function() {
        var currentScrollValue = window.pageYOffset;

        if (currentScrollValue < 500) {
            document.getElementById('affix').style.top = '0';

        } else if (currentScrollValue > 500 && currentScrollValue < 1000) {
            document.getElementById('affix').style.top = '-54px';
            document.getElementById('homeHeader').classList.add('bg-light');
            document.getElementById('homeHeader').classList.remove('bg-success');

        } else if (currentScrollValue > 2000 && currentScrollValue < 2500) {
            document.getElementById('affix').style.top = '-180px';
            document.getElementById('homeNav').classList.add('d-md-block');
            document.getElementById('homeHeader').classList.add('bg-light');
            document.getElementById('homeHeader').classList.remove('bg-seconday');

        } else if (currentScrollValue > 2500) {
            document.getElementById('homeHeader').classList.remove('bg-light');
            document.getElementById('homeHeader').classList.add('bg-seconday');
            document.getElementById('homeNav').classList.remove('d-md-block');
            document.getElementById('affix').style.top = '-55px';
        }
    }

    </script>
    <script>
    $(document).ready(function() {
        $('#upper').click(function() {
            $('body').animate({
                scrollTop: 0
            }, 2000);
        });
    });
    </script>
	@stack('scripts')
</body>

</html>