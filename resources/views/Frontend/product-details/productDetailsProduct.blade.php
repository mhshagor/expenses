<section id="product-Details-Product">

    <div class="container-lg">
        <div class="row py-5">
            <div class="col-md-6">
                <div id="productDetailsImageSlider" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner border">
                        <div class="carousel-item active zoom-product cursor-zoom-in">
                            <img src="{{env('APP_URL')}}/{{$productDetails->product_image}}" class="d-block w-100" alt="image">
                        </div>
                        <div class="carousel-item zoom-product cursor-zoom-in">
                            <img src="{{env('APP_URL')}}/public/frontend/images/demo/electronic-lp2.jpg" class="d-block w-100" alt="image">
                        </div>
                        <div class="carousel-item zoom-product cursor-zoom-in">
                            <img src="{{env('APP_URL')}}/public/frontend/images/demo/electronic-lp3.jpg" class="d-block w-100" alt="image">
                        </div>
                        <div class="carousel-item zoom-product cursor-zoom-in">
                            <img src="{{env('APP_URL')}}/public/frontend/images/demo/electronic-lp4.jpg" class="d-block w-100" alt="image">
                        </div>
                        <div class="carousel-item zoom-product cursor-zoom-in">
                            <img src="{{env('APP_URL')}}/public/frontend/images/demo/electronic-lp5.jpg" class="d-block w-100" alt="image">
                        </div>
                    </div>
                    <div class="carousel-indicators  position-static m-2">
                        <button type="button" data-bs-target="#productDetailsImageSlider" data-bs-slide-to="0" class="w-100 active h-auto border">
                            <img src="{{env('APP_URL')}}/{{$productDetails->product_image}}" class="d-block h-100 w-100" alt="image">
                        </button>
                        <button type="button" data-bs-target="#productDetailsImageSlider" data-bs-slide-to="1" class="w-100 h-auto border ">
                            <img src="{{env('APP_URL')}}/public/frontend/images/demo/electronic-lp2.jpg" class="d-block h-100 w-100 " alt="image">
                        </button>
                        <button type="button" data-bs-target="#productDetailsImageSlider" data-bs-slide-to="2" class="w-100 h-auto border">
                            <img src="{{env('APP_URL')}}/public/frontend/images/demo/electronic-lp3.jpg" class="d-block h-100 w-100 " alt="image">
                        </button>
                        <button type="button" data-bs-target="#productDetailsImageSlider" data-bs-slide-to="3" class="w-100 h-auto border ">
                            <img src="{{env('APP_URL')}}/public/frontend/images/demo/electronic-lp4.jpg" class="d-block h-100 w-100 " alt="image">
                        </button>
                        <button type="button" data-bs-target="#productDetailsImageSlider" data-bs-slide-to="4" class="w-100 h-auto border">
                            <img src="{{env('APP_URL')}}/public/frontend/images/demo/electronic-lp5.jpg" class="d-block h-100 w-100 " alt="image">
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="small ">
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="far fa-star text-warning"></i>
                    <span class="text-secondary">(3)</span>
                </div>
                <h3 class="text-capitalize fw-bold my-3">{{$productDetails->product_name}}</h3>
                <p class="text-capitalize fst-italic small">{{$productDetails->product_details}}</p>
                <p class="h4 my-3">{{$productDetails->product_price}}$</p>
                <nav>
                    <p class="text-uppercase small fw-bold mb-1">series cpu</p>
                    <ul class="nav  gap-3">
                        <li class="nav-item"><a href="" class="nav-link text-dark py-1 px-2 bg-light">core i5</a></li>
                        <li class="nav-item"><a href="" class="nav-link text-dark py-1 px-2 bg-light">core i7</a></li>
                        <li class="nav-item"><a href="" class="nav-link text-dark py-1 px-2 bg-light">core i9</a></li>
                    </ul>
                </nav>
                <div class="py-4 border-bottom">
                    <div class="btn-toolbar gap-2 btn-sm"> 
                        <div class="btn-group w-100 w-sm-auto">
                            <button class="btn rounded-0 box-shadow-none btn-success">-</button>
                            <input type="text" class="form-controle form-control-sm border rounded-0 outline-0 text-center" value="1" style="max-width:3rem;">
                            <button class="btn rounded-0 box-shadow-none btn-success">+</button>
                        </div>
                        <a href="../cart/cart.php" class="btn box-shadow-none btn-secondary rounded-0  fw-bold text-uppercase  px-3 py-2 w-100 w-sm-auto"><small>+  add to cart</small></a>
                        <a href="../checkout/checkout.php" class="btn box-shadow-none border rounded-0 fw-bold text-uppercase  px-3 py-2 hover-bg-danger w-100 w-sm-auto"><small>buy now</small></a>
                    </div>
                    <div class=" text-capitalize mt-2 small">
                        <a href="#" class=" small text-secondary text-decoration-none"><i class="fas  fa-heart "> </i> wishlist</a>
                        <div class="vr mx-1 pt-2"></div>
                        <a href="#" class="small text-secondary text-decoration-none"><i class="fas fa-compress-alt "></i> compare</a>
                    </div>
                </div>
                <div class="my-3">
                    <p class="text-capitalize my-1">availability: <span class="text-success">{{$productDetails->product_quantity}}</span></p>
                    <p class="text-capitalize my-1">SKU: <span class="text-secondary">0001</span></p>
                    <p class="text-capitalize my-1">brands: <span class="text-secondary">brand 05, brand 06</span></p>
                </div>
                <nav>
                    <ul class="nav my-3 gap-2">
                        <li class="nav-item"><a href="" class="py-1 nav-link bg-primary text-white"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                        <li class="nav-item"><a href="" class="py-1 nav-link bg-info text-white"><i class="fab fa-twitter"></i> Twitter</a></li>
                        <li class="nav-item"><a href="" class="py-1 nav-link bg-danger text-white"><i class="fab fa-pinterest-square"></i> Pinterest</a></li>
                        <li class="nav-item"><a href="" class="py-1 nav-link bg-success text-white"><i class="fab fa-linkedin-in"></i> Linkedin </a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

