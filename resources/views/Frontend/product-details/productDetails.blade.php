<x-frontend-layout>  

        @include("Frontend.product-details.productDetailsBreadcrumb")
        @include("Frontend.product-details.productDetailsProduct")
        @include("Frontend.product-details.productDetailsCombo")
        @include("Frontend.product-details.productDetailsDetails")
        @include("Frontend.product-details.productDetailsRecomandedProduct")
		
	@push('scripts')
	
    <script src="{{env('APP_URL')}}/public/frontend/js/bootstrap.bundle.min.js"></script>
    <script src="{{env('APP_URL')}}/public/frontend/js/jquery-3.6.0.min.js"></script>
    <script src="{{env('APP_URL')}}/public/frontend/js/jquery.zoom.min.js"></script>
    <script src="{{env('APP_URL')}}/public/frontend/js/owl.carousel.min.js"></script>
    <!-- <script src="../js/poper.min.js"></script> -->
	<script>
        $(document).ready(function() {
            $('.zoom-product').zoom({
                'magnify': 2,
            });
            $("#auto-carousel").owlCarousel({
                items: 5,
                loop: true,
                margin: 2,
                autoplay: true,
                autoplayTimeout: 1000,
                autoplayHoverPause: true,
                dots: false,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:2,
                        
                    },
                    500:{
                        items:4,
                        
                    },
                    900:{
                        items:5,
                        
                    },
                }
            });
            $('#autoCarousel .next').click(function() {
                $("#auto-carousel").trigger('next.owl.carousel');
            })
            $('#autoCarousel .prev').click(function() {
                // With optional speed parameter
                // Parameters has to be in square bracket '[]'
                $("#auto-carousel").trigger('prev.owl.carousel', [300]);
            })
        });
    </script>

	@endpush
</x-frontend-layout>