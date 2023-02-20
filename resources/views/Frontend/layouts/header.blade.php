<!--header-section-->
<header class="fixed-top bg-light transition-700" id="affix">    
    <section id="homeAdHeader" class="d-none d-md-block container-fluid bg-no-repeat bg-position-center bg-size-cover" style="background-image: url({{env('APP_URL')}}/public/frontend/images/demo/store-noted-1.jpg);">
        <!-- ad section -->
        <div class="container-lg py-3">
            <p class="mb-0 h5 font-monospace text-center text-uppercase fw-semibold">
                <b class="text-red-danger ">SENIOR’S MEMBER</b> DISCOUNT DAYS! SAVE <b class="text-red-danger">25%</b>
                EACH TUESDAY
            </p>
        </div>
    </section>
    <!-- ad section end -->
    <section id="homeHeader" class="bg-light border-bottom shadow-sm ">
        <div class="container-lg">
            <!-- header " logo, search-bar, language, usd, icons "  end-->
            <div class="row align-items-center">
                <div class="col-12 col-md-3 order-2 order-md-1  text-center text-md-start ">
                    <img class="img-fluid max-h-7 ps-2" src="{{env('APP_URL')}}/public/frontend/images/demo/logo-dark.png" alt="logo">
                </div>
                <div class="col-12 col-md-9 order-1 order-md-2">
                    <div class="row g-0 justify-content-center align-items-center ">
                        <!-- header " search-bar" -->
                        <div id="homeLinkButton" class="col-auto py-2 d-md-none">
                            <button class="btn box-shadow-none text-body bg-transparent border-0"
                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div class=" col col-xl-8 px-0">
                            <form action="" class="row g-0 border" id="category-search-box">
                                <div class="col-4 d-none d-lg-block border-end">
                                    <select name="" id="" class="form-select placeholder-sm rounded-0 border-0">
                                        <option>All Category</option>
                                        <option value="">Accessories</option>
                                        <option value="backup-charger"> Backup Charger</option>
                                        <option value="headphone"> Headphone</option>
                                        <option value="powre-socket"> Powre Socket</option>
                                        <option value="printer"> Printer</option>
                                        <option value="usb"> USB</option>
                                        <option value="webcam"> Webcam</option>
                                        <option value="wi-fi-router"> Wi-Fi Router</option>
                                        <option value="">Accessories</option>
                                        <option value="backup-charger"> Backup Charger</option>
                                        <option value="headphone"> Headphone</option>
                                        <option value="powre-socket"> Powre Socket</option>
                                        <option value="printer"> Printer</option>
                                        <option value="usb"> USB</option>
                                        <option value="webcam"> Webcam</option>
                                        <option value="wi-fi-router"> Wi-Fi Router</option>
                                        <option value="">Accessories</option>
                                        <option value="backup-charger"> Backup Charger</option>
                                        <option value="headphone"> Headphone</option>
                                        <option value="powre-socket"> Powre Socket</option>
                                        <option value="printer"> Printer</option>
                                        <option value="usb"> USB</option>
                                        <option value="webcam"> Webcam</option>
                                        <option value="wi-fi-router"> Wi-Fi Router</option>
                                        <option value="cameras-photos">Cameras & Photos</option>
                                    </select>
                                </div>
                                <div class=" col input-group ">
                                    <input type="text " class="form-control rounded-0 border-0 placeholder-sm" placeholder="Search for Product">
                                    <button class="input-group-text border-0 rounded-0 bg-white"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <!-- "User Access" start-->
                        <div id="main-nav-user" class="col-auto py-2 ms-auto">
                            <ul class="nav text-uppercase small">
                                <li class="nav-item d-none d-md-block">
                                    <a class="nav-link text-s" href=" # ">english</a>
                                </li>
                                <li class="nav-item d-none d-md-block">
                                    <a class="nav-link " href="# ">usd</a>
                                </li>
                                <li class="nav-item d-none d-md-block">
                                    <a class="nav-link " href="# "><i class="far fa-user "></i></a>
                                </li>
                                <li class="nav-item d-none d-md-block">
                                    <a class="nav-link position-relative " href="# " title="Unread Messages ">
                                        <i class="far fa-heart "></i>
                                        <span class="position-absolute ms-n2 mt-2 top-0 start-100 translate-middle badge rounded-pill bg-red-danger ">99+</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link position-relative " href="# " title="Unread Messages ">
                                        <i class="fas fa-shopping-cart"></i>
                                        <span class="position-absolute ms-n2 mt-2 top-0 start-100 translate-middle badge rounded-pill bg-red-danger ">35</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- header " language, usd, icons " end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- header " main-manu, nav-bar, information --start- " -->
    <section id="homeNav" class="d-none d-md-block">
        <!-- main-manu-icon and category    start       -->
        <div class="container-lg ">
            <div class="row justify-content-center align-items-center">
                <!-- nav-bar and pages-link start-->
                <div class="col small">
                    <nav class="d-flex">
                        <button class="btn btn-light box-shadow-none p-0 border-0 bg-transparent me-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
                            <i class="fas fa-bars"></i>
                        </button>
                        <ul class="nav text-uppercase small ">
                            <li class="nav-item "><a href="{{url('/')}}" class="nav-link px-3 text-black ">Homepages</a></li>
                            <li class="nav-item "><a href="# " class="nav-link px-3 text-black ">Blog</a></li>
                            <li class="nav-item "><a href="#" class="nav-link px-3 text-black ">Page</a></li>
                            <li class="nav-item "><a href="{{route('shop-all')}}" class="nav-link px-3 text-black ">Shop</a></li>
                            <li class="nav-item "><a href="testing.html" class="nav-link px-3 text-black ">About us</a></li>
                            <li class="nav-item "><a href="# " class="nav-link px-3 text-black ">Contact us</a></li>
                            <li class="nav-item "><a href="# " class="nav-link px-3 fw-bold h6 mb-0 text-red-danger">hot deals!</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- nav-bar and pages-link end-->
                <!-- nav-bar and pages-link start-->
                <div class="col-auto text-end p-0">
                    <nav class="small">
                        <ul class="nav text-uppercase small">
                            <li class="nav-item ">
                                <a href="# " class="nav-link text-black py-3">Recently Viewed</a>
                            </li>
                            <li class="nav-item d-none d-lg-block text-black ">
                                <a href="# " class="nav-link py-3 ">
                                    <i class="fas fa-mobile-alt text-red-danger "></i> +880774971797
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- main-manu-icon and category    end       -->
        </div>
        </div>
    </section>
    <!-- header " main-manu, nav-bar, information --end " -->
    <div class="offcanvas offcanvas-start text-start" tabindex="-1" id="offcanvasExample">
        <div class="offcanvas-header pt-4   px-4">
            <h5 class="offcanvas-title small fw-bolder " id="offcanvasExampleLabel">ALL DEPARTMENTS</h5>
            <button type="button" class="btn-close text-reset box-shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body text-uppercase small py-1 scroll-sm px-4  scroll-sm">
            <div class="accordion accordion-flush opacity-100 scroll-lg" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <div class="accordion-header h6 py-2">
                        <a href="#" class=" text-decoration-none small text-black d-block">hot deals!</a>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header  h6 py-2">
                        <a href="" class=" text-decoration-none small text-black d-block">top 100 offers</a>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header accordion-button collapsed py-2 px-0 " type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                        <h6 class="small mb-0">smartphone & tablet</h6>
                    </div>
                    <div id="collapseThree" class="accordion-collapse collapse transition-1000" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <ul class="list-group text-muted list-group-transparent list-group-border-0 text-capitalize ps-0">
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0">samsung</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0">xiaomi</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0">ipad</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0">realme</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0">vivo</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0">iphone</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0">oppo</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0">nokia</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0">symphony</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0">motorola</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0">onePlus</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0">google</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0">lenovo</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0">sony</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0">LG</a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header accordion-button py-2 px-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                        <h6 class="small mb-0">computer & laptop</h6>
                    </div>
                    <div id="collapseFour" class="accordion-collapse collapse transition-1000" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body  text-capitalize ">
                            <ul class="list-group text-muted list-group-transparent list-group-border-0 text-capitalize ps-0 ">
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">dell</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">Acer</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">apple</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">hp</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">google</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">microsoft</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">asus</a> 
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">samsung</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">lenovo</a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header accordion-button py-2 px-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                        <h6 class="small mb-0">tv & audio</h6>
                    </div>
                    <div id="collapseFive" class="accordion-collapse collapse transition-1000" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body ">
                            <ul class="list-group text-muted list-group-transparent list-group-border-0 text-capitalize ps-0 ">
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0">sony</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0">samsung</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0">LG</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0">Mi</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0">walton</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0">singer</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0">acer</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0">minister</a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header accordion-button py-2 px-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
                        <h6 class="small mb-0">games & accessories</h6>
                    </div>
                    <div id="collapseSix" class="accordion-collapse collapse transition-1000" aria-labelledby="panelsStayOpen-headingOne">
                        <div class=" accordion-body">
                            <ul class="list-group text-muted list-group-transparent list-group-border-0 text-capitalize">
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">gaming chair</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">gaming sofa</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">keyboard</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">mouse</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">headphone</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">mouse pad</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">gamepad</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">gaming console</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">gaming desk</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">games</a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header accordion-button py-2 px-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSaven">
                        <h6 class="small mb-0">electronic & housewares</h6>
                    </div>
                    <div id="collapseSaven" class="accordion-collapse collapse transition-1000" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body ">
                            <ul class="list-group text-muted list-group-transparent list-group-border-0 text-capitalize ps-0 ">
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">induction cooker</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">electronic cooker</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">diswasher</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">humidifier</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">air purifier</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">sewing maching</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">washing maching</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">fruit maching</a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header accordion-button py-2 px-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight">
                        <h6 class="small mb-0">cameras & photos</h6>
                    </div>
                    <div id="collapseEight" class="accordion-collapse collapse transition-1000" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <ul class="list-group text-muted list-group-transparent list-group-border-0 text-capitalize ps-0 ">
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">iphone</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">ipad</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">samsung</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">realme</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">nokia</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">ipad</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">samsung</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">vivo</a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header accordion-button py-2 px-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine">
                        <h6 class="small mb-0">accessories</h6>
                    </div>
                    <div id="collapseNine" class="accordion-collapse collapse transition-1000" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <ul class="list-group text-muted transition-1000 list-group-transparent list-group-border-0 text-capitalize ps-0 ">
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">iphone</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">ipad</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">samsung</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">items</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">items</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">ipad</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">samsung</a>
                                <a href="#" class=" list-group-item list-group-item-action text-muted px-0 ">items</a>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Accoridion item end-->
            </div>
        </div>
    </div>
</header>