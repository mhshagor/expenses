<!-- === product-item body ===  -->
<style>
.accordion-toggle-open {
    display: none;
}

.collapsed .accordion-toggle-open {
    display: block;
}

.collapsed .accordion-toggle-close {
    display: none;
}

.accordion-toggle-close {
    display: block;
}
</style>
<section id="shopBody">
    <div class="container-lg mb-5">
        <div class="row">
            <!-- side-categories-area -->
            <div class="col-md-3 ">
                <div class="offcanvas offcanvas-end position-lg-static transform-translate-x-lg-0 visibility-lg-visible border-md-0" style="visibility: hidden;" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel" >
                    <!-- <div class="offcanvas-header">
                        <h5 class="offcanvas-title small fw-bolder " id="offcanvasExampleLabel">ALL DEPARTMENTS</h5>
                        <button type="button" class="btn-close text-reset box-shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div> -->
                    <div class="offcanvas-body">
                        <div class="row justify-content-center">
                            <div class="col-12 mb-5 pe-2">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <p class="text-uppercase fw-bold mb-0 small">shop by categories</p>
                                    <button type="button" class="btn-close text-reset box-shadow-none d-lg-none btn-sm p-0" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="accordion cursor-p" id="accordionPanelsStayOpenExample">
                                    <!--====== Accordion-Item collapse button ======-->
                                    <div class="accordion-item border-0 text-capitalize px-0">
                                        <div class="accordion-header d-flex justify-content-between box-shadow-none collapsed py-2 px-0 " type="button" data-bs-toggle="collapse" data-bs-target="#shoplist1">
                                            <!-- <input class="form-check-input  box-shadow-none rounded-0 m-0 " type="checkbox" value=""  checked> -->
                                            <a href="#" class="text-decoration-none text-body"><i class="fas fa-bars me-2"></i><span class="ps-1 text-secondary ">All Category</span></a>
                                            <div>
                                                <span class="accordion-toggle-open">+</span>
                                                <span class="accordion-toggle-close">-</span>
                                            </div>
                                        </div>
                                        <div id="shoplist1" class="accordion-collapse collapse transition-1000 " aria-labelledby="panelsStayOpen-headingOne">
                                            <div class="accordion-body ps-2 p-0 small">
                                                <!--====== Accordion-Item computer & laptop ======-->
                                                <div class="accordion-item border-0 text-capitalize px-0">
                                                    <div class="accordion-header d-flex justify-content-between box-shadow-none collapsed py-2 px-0 " type="button" data-bs-toggle="collapse" data-bs-target="#shoplist3">
                                                        <a href="#" class="text-decoration-none ">
                                                            <input class="form-check-input  box-shadow-none rounded-0" type="checkbox" value="">
                                                            <span class="ps-1 text-secondary ">computer & laptop</span>
                                                        </a>
                                                        <div>
                                                            <span class="accordion-toggle-open">+</span>
                                                            <span class="accordion-toggle-close">-</span>
                                                        </div>
                                                    </div>
                                                    <div id="shoplist3" class="accordion-collapse collapse transition-800 timing-function-ease-out" aria-labelledby="panelsStayOpen-headingOne">
                                                        <div class="accordion-body p-0">
                                                            <ul class="list-group list-group-transparent list-group-border-0 ps-3">
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">backup charger</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">headphone</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">power socket</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">printer</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">USB</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">wedcam</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">wi-Fi router</a>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--====== Accordion-Item eletronic & housewares ======-->
                                                <div class="accordion-item border-0 text-capitalize px-0">
                                                    <div class="accordion-header d-flex justify-content-between box-shadow-none collapsed py-2 px-0 " type="button" data-bs-toggle="collapse" data-bs-target="#shoplist4">
                                                        <a href="#" class="text-decoration-none">
                                                            <input class="form-check-input  box-shadow-none rounded-0"  type="checkbox" value="">
                                                            <span class="ps-1 text-secondary ">eletronic & houseware</span>
                                                        </a>
                                                        <div>
                                                            <span class="accordion-toggle-open">+</span>
                                                            <span class="accordion-toggle-close">-</span>
                                                        </div>
                                                    </div>
                                                    <div id="shoplist4" class="accordion-collapse collapse transition-800 timing-function-ease-out"
                                                        aria-labelledby="panelsStayOpen-headingOne">
                                                        <div class="accordion-body p-0">
                                                            <ul class="list-group list-group-transparent list-group-border-0 ps-4">
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">backup
                                                                    charger</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">headphone</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">power
                                                                    socket</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">printer</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">USB</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">wedcam</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">wi-Fi
                                                                    router</a>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--====== Accordion-Item games & accessories ======-->
                                                <div class="accordion-item border-0 text-capitalize px-0">
                                                    <div class="accordion-header d-flex justify-content-between box-shadow-none collapsed py-2 px-0 " type="button" data-bs-toggle="collapse" data-bs-target="#shoplist5">
                                                        <a href="#" class="text-decoration-none">
                                                            <input class="form-check-input  box-shadow-none rounded-0" type="checkbox" value="">
                                                            <span class="ps-1 text-secondary ">games & accessories</span>
                                                        </a>
                                                        <div>
                                                            <span class="accordion-toggle-open">+</span>
                                                            <span class="accordion-toggle-close">-</span>
                                                        </div>
                                                    </div>
                                                    <div id="shoplist5" class="accordion-collapse collapse transition-800 timing-function-ease-out" aria-labelledby="panelsStayOpen-headingOne">
                                                        <div class="accordion-body p-0">
                                                            <ul class="list-group list-group-transparent list-group-border-0 ps-4">
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">backup
                                                                    charger</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">headphone</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">power
                                                                    socket</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">printer</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">USB</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">wedcam</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">wi-Fi
                                                                    router</a>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--====== Accordion-Item smartphone & tablet ======-->
                                                <div class="accordion-item border-0 text-capitalize px-0">
                                                    <div class="accordion-header d-flex justify-content-between box-shadow-none collapsed py-2 px-0 " type="button" data-bs-toggle="collapse" data-bs-target="#shoplist6">
                                                        <a href="#" class="text-decoration-none">
                                                            <input class="form-check-input  box-shadow-none rounded-0" type="checkbox" value="">
                                                            <span class="ps-1 text-secondary ">smartphone & tablet</span>
                                                        </a>
                                                        <div>
                                                            <span class="accordion-toggle-open">+</span>
                                                            <span class="accordion-toggle-close">-</span>
                                                        </div>
                                                    </div>
                                                    <div id="shoplist6" class="accordion-collapse collapse transition-800 timing-function-ease-out" aria-labelledby="panelsStayOpen-headingOne">
                                                        <div class="accordion-body p-0">
                                                            <ul class="list-group list-group-transparent list-group-border-0 ps-4">
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">backup charger</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">headphone</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">power socket</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">printer</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">USB</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">wedcam</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">wi-Fi router</a>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--====== Accordion-Item TV & audio ======-->
                                                <div class="accordion-item border-0 text-capitalize px-0">
                                                    <div class="accordion-header d-flex justify-content-between box-shadow-none collapsed py-2 px-0 " type="button" data-bs-toggle="collapse" data-bs-target="#shoplist7">
                                                        <a href="#" class="text-decoration-none">
                                                            <input class="form-check-input  box-shadow-none rounded-0"  ="checkbox" value="">
                                                            <span class="ps-1 text-secondary ">TV & audio</span>
                                                        </a>
                                                        <div>
                                                            <span class="accordion-toggle-open">+</span>
                                                            <span class="accordion-toggle-close">-</span>
                                                        </div>
                                                    </div>
                                                    <div id="shoplist7" class="accordion-collapse collapse transition-800 timing-function-ease-out" aria-labelledby="panelsStayOpen-headingOne">
                                                        <div class="accordion-body p-0">
                                                            <ul class="list-group list-group-transparent list-group-border-0 ps-4">
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">backup charger</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">headphone</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">power socket</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">printer</a> 
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">USB</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">wedcam</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">wi-Fi router</a>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--====== Accordion-Item uncategorized ======-->
                                                <div class="accordion-item border-0 text-capitalize px-0">
                                                    <div class="accordion-header d-flex justify-content-between box-shadow-none collapsed py-2 px-0 " type="button" data-bs-toggle="collapse" data-bs-target="#shoplist8">
                                                        <a href="#" class="text-decoration-none">
                                                            <input class="form-check-input  box-shadow-none rounded-0" type="checkbox" value="">
                                                            <span class="ps-1 text-secondary ">uncategorized</span>
                                                        </a>
                                                        <div>
                                                            <span class="accordion-toggle-open">+</span>
                                                            <span class="accordion-toggle-close">-</span>
                                                        </div>
                                                    </div>
                                                    <div id="shoplist8" class="accordion-collapse collapse transition-800 timing-function-ease-out" aria-labelledby="panelsStayOpen-headingOne">
                                                        <div class="accordion-body p-0">
                                                            <ul class="list-group list-group-transparent list-group-border-0 ps-4">
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">backup charger</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">headphone</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">power socket</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">printer</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">USB</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">wedcam</a>
                                                                <a href="#" class=" list-group-item list-group-item-action text-muted py-1">wi-Fi router</a>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--====== Accordion-Item Cametas-&-Photos ======-->
                                    <div class="accordion-item border-0 text-capitalize px-0">
                                        <div class="accordion-header d-flex justify-content-between ccordion-button box-shadow-none collapsed py-2 px-0 " type="button" data-bs-toggle="collapse" data-bs-target="#shoplist2">
                                            <a href="#" class="text-decoration-none">
                                                <input class="form-check-input  box-shadow-none rounded-0" type="checkbox" value="">
                                                <span class="ps-1 text-secondary ">cameras & photos</span>
                                            </a>
                                            <div>
                                                <span class="accordion-toggle-open">+</span>
                                                <span class="accordion-toggle-close">-</span>
                                            </div>
                                        </div>
                                        <div id="shoplist2" class="accordion-collapse collapse transition-800 timing-function-ease-out" aria-labelledby="panelsStayOpen-headingOne">
                                            <div class="accordion-body p-0">
                                                <ul class="list-group list-group-transparent list-group-border-0  ps-4">
                                                    <a href="#" class=" list-group-item list-group-item-action text-muted py-1">backup charger</a>
                                                    <a href="#" class=" list-group-item list-group-item-action text-muted py-1">headphone</a>
                                                    <a href="#" class=" list-group-item list-group-item-action text-muted py-1">power socket</a>
                                                    <a href="#" class=" list-group-item list-group-item-action text-muted py-1">printer</a>
                                                    <a href="#" class=" list-group-item list-group-item-action text-muted py-1">USB</a>
                                                    <a href="#" class=" list-group-item list-group-item-action text-muted py-1">wedcam</a>
                                                    <a href="#" class=" list-group-item list-group-item-action text-muted py-1">wi-Fi router</a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--====== Accordion-End ======-->
                            <!--== section products-on-sale ==-->
                            <div class="col-12 d-lg-none mb-4 pe-4">
                                <div class="form-check small">
                                    <input class="form-check-input box-shadow-none rounded-0 " type="checkbox" value="">
                                    <label class="form-check-label text-uppercase fw-bold small" for="flexCheckDefault">show only products on sale</label>
                                </div>
                            </div>
                            <!--== section sort-list ==-->
                            <div class="col-12 d-md-none mb-5 pe-4">
                                <select class="form-select box-shadow-none rounded-0 border-0 bg-light text-capitalize" aria-label="Default select example">
                                    <option selected>sort by latest</option>
                                    <option value="1">sort by popularity</option>
                                    <option value="2">sort by average rating</option>
                                    <option value="3">sort by price: low to high</option>
                                    <option value="4">sort by price: high to low</option>
                                </select>
                            </div>
                            <!--== section price ==-->
                            <div class="col-12 mb-5 pe-4">
                                <label for="customRange1" class="form-label text-uppercase fw-bold mt-1 mb-1">price</label>
                                <input type="range" class="form-range" id="customRange1">
                            </div>
                            <!--== section colors ==-->
                            <div class="col-12 mb-5 pe-4">
                                <p class="text-uppercase fw-bold mt-1 mb-2">colors</p>
                                <div class=" row g-2">
                                    <div class="col-auto"><a href="#" class="rounded-2 border d-inline-block h-6 w-6 bg-white d-block "></a></div>
                                    <div class="col-auto"><a href="#" class="rounded-2 border d-inline-block h-6 w-6 bg-light d-block "></a></div>
                                    <div class="col-auto"><a href="#" class="rounded-2 border d-inline-block h-6 w-6 bg-secondary d-block  "></a></div>
                                    <div class="col-auto"><a href="#" class="rounded-2 border d-inline-block h-6 w-6 bg-black d-block  "></a></div>
                                    <div class="col-auto"><a href="#" class="rounded-2 border d-inline-block h-6 w-6 bg-primary d-block  "></a></div>
                                    <div class="col-auto"><a href="#" class="rounded-2 border d-inline-block h-6 w-6 bg-success d-block  "></a></div>
                                    <div class="col-auto"><a href="#" class="rounded-2 border d-inline-block h-6 w-6 bg-danger d-block  "></a></div>
                                    <div class="col-auto"><a href="#" class="rounded-2 border d-inline-block h-6 w-6 bg-warning d-block "></a></div>
                                </div>
                            </div>
                            <!--== section cpu ==-->
                            <div class="col-12 mb-5 pe-4">
                                <p class="text-uppercase fw-bold mt-1 mb-2">cpu</p>
                                <div class=" row g-2 text-center small">
                                    <div class="col-auto "><a href="#" class="d-block text-muted text-decoration-none px-2 py-2 bg-light ">Rayzen</a></div>
                                    <div class="col-auto "><a href="#" class="d-block text-muted text-decoration-none px-2 py-2 bg-light ">Xeon</a></div>
                                    <div class="col-auto "><a href="#" class="d-block text-muted text-decoration-none px-2 py-2 bg-light ">Althion</a>
                                    </div>
                                    <div class="col-auto "><a href="#" class="d-block text-muted text-decoration-none px-2 py-2 bg-light ">Core i3</a>
                                    </div>
                                    <div class="col-auto "><a href="#" class="d-block text-muted text-decoration-none px-2 py-2 bg-light ">Core i5</a>
                                    </div>
                                    <div class="col-auto "><a href="#" class="d-block text-muted text-decoration-none px-2 py-2 bg-light ">Core i7</a>
                                    </div>
                                    <div class="col-auto "><a href="#" class="d-block text-muted text-decoration-none px-2 py-2 bg-light ">Core i9</a>
                                    </div>
                                    <div class="col-auto "><a href="#" class="d-block text-muted text-decoration-none px-2 py-2 bg-light ">Core i10</a>
                                    </div>
                                </div>
                            </div>
                            <!--== section storage ==-->
                            <div class="col-12 mb-5 pe-4">
                                <p class="text-uppercase fw-bold mt-1 mb-2">storage</p>
                                <div class=" row g-2 text-center text-capitalize small">
                                    <div class="col-4"><a href="#" class="d-block text-muted text-decoration-none px-2 py-2 bg-light ">16GB</a></div>
                                    <div class="col-4"><a href="#" class="d-block text-muted text-decoration-none px-2 py-2 bg-light ">32GB</a></div>
                                    <div class="col-4"><a href="#" class="d-block text-muted text-decoration-none px-2 py-2 bg-light ">64GB</a></div>
                                    <div class="col-4"><a href="#" class="d-block text-muted text-decoration-none px-2 py-2 bg-light ">128GB</a></div>
                                    <div class="col-4"><a href="#" class="d-block text-muted text-decoration-none px-2 py-2 bg-light ">256GB</a></div>
                                    <div class="col-4"><a href="#" class="d-block text-muted text-decoration-none px-2 py-2 bg-light ">512BG</a></div>
                                    <div class="col-4"><a href="#" class="d-block text-muted text-decoration-none px-2 py-2 bg-light ">1TB</a></div>
                                    <div class="col-4"><a href="#" class="d-block text-muted text-decoration-none px-2 py-2 bg-light ">2TB</a></div>
                                </div>
                            </div>
                            <!--== section brands ==-->
                            <div class="col-12 mb-5 pe-4 ">
                                <p class="text-uppercase fw-bold mt-1 mb-2">brands</p>
                                <ul class="list-group list-group-border-0 text-capitalize box-shadow-none rounded-0">
                                    <a href="#" class="list-group-item text-muted px-0 py-1"><input class="box-shadow-none rounded-0 form-check-input me-2" type="checkbox" value="">brand 1</a>
                                    <a href="#" class="list-group-item text-muted px-0 py-1"><input class="box-shadow-none rounded-0 form-check-input me-2" type="checkbox" value="">brand 2</a>
                                    <a href="#" class="list-group-item text-muted px-0 py-1"><input class="box-shadow-none rounded-0 form-check-input me-2" type="checkbox" value="">brand 3</a>
                                    <a href="#" class="list-group-item text-muted px-0 py-1"><input class="box-shadow-none rounded-0 form-check-input me-2" type="checkbox" value="">brand 4</a>
                                    <a href="#" class="list-group-item text-muted px-0 py-1"><input class="box-shadow-none rounded-0 form-check-input me-2" type="checkbox" value="">brand 5</a>
                                    <a href="#" class="list-group-item text-muted px-0 py-1"><input class="box-shadow-none rounded-0 form-check-input me-2" type="checkbox" value="">brand 6</a>
                                    <a href="#" class="list-group-item text-muted px-0 py-1"><input class="box-shadow-none rounded-0 form-check-input me-2" type="checkbox" value="">brand 7</a>
                                    <a href="#" class="list-group-item text-muted px-0 py-1"><input class="box-shadow-none rounded-0 form-check-input me-2" type="checkbox" value="">brand 8</a>
                                </ul>
                            </div>
                            <!--== section avarage-rating ==-->
                            <div class="col-12 mb-5 pe-4">
                                <p class="text-uppercase fw-bold mt-1 mb-2">avarage rating</p>
                                <div class="small py-1">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <span class="text-secondary">(24)</span>
                                </div>
                                <div class="small py-1">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <span class="text-secondary">(10)</span>
                                </div>
                                <div class="small py-1">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <span class="text-secondary">(4)</span>
                                </div>
                                <div class="small py-1">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <span class="text-secondary">(2)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--===== Product-Items-area =====-->
            <div class="col-12 col-lg-9 px-3">
                <div class="row justify-content-between align-items-center mt-2 mb-1 small">
                    <div class=" col-auto d-lg-none ps-0">
                        <button class="btn box-shadow-none text-info transition-800 hover-bg-danger bg-transparent border-0" data-bs-toggle="offcanvas" data-bs-target="#offcanvas">
                            <i class="fas fa-sliders-h"></i>
                        </button>
                    </div>
                    <div class="col-auto form-check d-none d-lg-block">
                        <input class="form-check-input box-shadow-none rounded-0 " type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label text-uppercase fw-bold small" for="flexCheckDefault">show only products on sale
                        </label>
                    </div>
                    <div class="col-auto d-none d-md-block">
                        <select class="form-select box-shadow-none rounded-0 border-0 bg-light " aria-label="Default select example">
                            <option selected>sort by latest</option>
                            <option value="1">sort by popularity</option>
                            <option value="2">sort by average rating</option>
                            <option value="3">sort by price: low to high</option>
                            <option value="4">sort by price: high to low</option>
                        </select>
                    </div>
                </div>
                <div class="row justify-content-center gap-2 gap-sm-0 pb-4">
                    <div class=" col-8 col-sm-4 col-md-3 p-0">
                        <div class="card rounded-0  group-hover p-2 h-100">
                            <div class="overflow-hidden  position-relative">
                                <a href="../product-details/product-details.php' class"stretched-link"></a>
                                <img class="w-100 " src="../images/demo/electronic-lp1.jpg">
                                <div  class="card-img-overlay rounded-0 d-flex p-0 bg-opacity-0 justify-content-end align-items-end bg-dark hover-bg-opacity-10 transition-1000">
                                    <div class="btn-group-vertical transform-rotateY-90 hover-transform-rotateY-0 transition-500">
                                        <a class="btn btn-light p-0 border-0"><i class="p-2 fas fa-random bg-white border"></i></a>
                                        <a class="btn btn-light p-0 border-0"><i class="p-2 far fa-heart bg-white border"></i></a>
                                    </div>
                                </div>
                                <a href="../product-details/product-details.php" class="stretched-link"></a>
                            </div>
                            <div class="card-body text-capitalize small px-0">
                                <p class="mb-1 ">microsoft surface laptop 3-15" touch-Screen</p>
                                <div class="small py-1">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <span class="text-secondary">(25)</span>
                                </div>                                
                            </div>
                            <div class="card-footer border-0 bg-transparent  h-6 overflow-hidden p-0">
                                <div class="hover-mt-n25 transition-500 small">
                                    <P class="mt-2">$750.00 - $950.00</P>
                                    <div class="text-uppercase small cursor-pointer ">
                                        <a href="../cart/cart.php" class=" text-decoration-none text-dark  fw-bold">add to cart</a>
                                        <div class="vr mx-1 mx-auto"></div>
                                        <a class=" text-decoration-none text-dark fw-bold"  role="button" data-bs-toggle="modal" data-bs-target="#product-modal">quick view</a>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="product-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <!-- ====== including php (productCategory-modal.php) ====== -->
                            <?php include("productCategory-modal.php")?>
                        </div>
                    </div>
                    <div class=" col-8 col-sm-4 col-md-3 p-0">
                        <div class="card rounded-0  group-hover p-2 h-100">
                            <div class="overflow-hidden  position-relative">
                                <a href="../product-details/product-details.php' class"stretched-link"></a>
                                <img class="w-100 " src="../images/demo/electronic-lp2.jpg">
                                <div  class="card-img-overlay rounded-0 d-flex p-0 bg-opacity-0 justify-content-end align-items-end bg-dark hover-bg-opacity-10 transition-1000">
                                    <div class="btn-group-vertical transform-rotateY-90 hover-transform-rotateY-0 transition-500">
                                        <a class="btn btn-light p-0 border-0"><i class="p-2 fas fa-random bg-white border"></i></a>
                                        <a class="btn btn-light p-0 border-0"><i class="p-2 far fa-heart bg-white border"></i></a>
                                    </div>
                                </div>
                                <a href="../product-details/product-details.php" class="stretched-link"></a>
                            </div>
                            <div class="card-body text-capitalize small px-0">
                                <p class="mb-1 ">microsoft surface laptop 3-15" touch-Screen</p>
                                <div class="small py-1">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <span class="text-secondary">(25)</span>
                                </div>                                
                            </div>
                            <div class="card-footer border-0 bg-transparent  h-6 overflow-hidden p-0">
                                <div class="hover-mt-n25 transition-500 small">
                                    <P class="mt-2">$750.00 - $950.00</P>
                                    <div class="text-uppercase small cursor-pointer ">
                                        <a href="../cart/cart.php" class=" text-decoration-none text-dark  fw-bold">add to cart</a>
                                        <div class="vr mx-1 mx-auto"></div>
                                        <a class=" text-decoration-none text-dark fw-bold"  role="button" data-bs-toggle="modal" data-bs-target="#product-modal">quick view</a>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="product-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <!-- ====== including php (productCategory-modal.php) ====== -->
                            <?php include("productCategory-modal.php")?>
                        </div>
                    </div>                    
                    <div class=" col-8 col-sm-4 col-md-3 p-0">
                        <div class="card rounded-0  group-hover p-2 h-100">
                            <div class="overflow-hidden position-relative">
                                <img class="w-100 " src="../images/demo/electronic-smpt-3.jpg ">
                                <div class="card-img-overlay rounded-0 d-flex p-0 bg-opacity-0 justify-content-end align-items-end bg-dark hover-bg-opacity-10 transition-1000">
                                    <div class="btn-group-vertical transform-rotateY-90 hover-transform-rotateY-0 transition-500">
                                        <a class="btn btn-light p-0 border-0"><i class="p-2 fas fa-random bg-white border"></i></a>
                                        <a class="btn btn-light p-0 border-0"><i class="p-2 far fa-heart bg-white border"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-capitalize small mt-2 p-0">
                                <p class="mb-1 ">samsung electronics  samsung galaxy s21 5G</p>
                                <div class="small py-1">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <span class="text-secondary">(9)</span>
                                </div>
                            </div>
                            <div class="card-footer border-0 bg-transparent  h-6 overflow-hidden p-0">
                                <div class="hover-mt-n25 transition-500 small">
                                    <P class="mt-2 text-red-danger "><del class="text-secondary small">$799.00</del> $599.00</P>
                                    <div class="text-uppercase small cursor-p ">
                                        <a class=" text-decoration-none text-dark fw-bold">add to cart</a>
                                        <div class="vr mx-1"></div>
                                        <a href="../product-details/product-details.php"class=" text-decoration-none text-dark fw-bold">quick view</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-8 col-sm-4 col-md-3 p-0">
                        <div class="card rounded-0 group-hover p-2 h-100">
                            <div class="overflow-hidden position-relative">
                                <img class="w-100 p-2" src="../images/demo/electronic-smpt-4.jpg ">
                                <div class="card-img-overlay rounded-0 d-flex p-0 bg-opacity-0 justify-content-end align-items-end bg-dark hover-bg-opacity-10 transition-1000">
                                    <div class="btn-group-vertical transform-rotateY-90 hover-transform-rotateY-0 transition-500">
                                        <a class="btn btn-light p-0 border-0"><i class="p-2 fas fa-random bg-white border"></i></a>
                                        <a class="btn btn-light p-0 border-0"><i class="p-2 far fa-heart bg-white border"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-capitalize small mt-2 p-0">
                                <p class="mb-1 ">blackview a8  android 10 smartphone 6.21 in</p>
                                <div class="small py-1">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <span class="text-secondary">(5)</span>
                                </div>
                            </div>
                            <div class="card-footer border-0 bg-transparent  h-6 overflow-hidden p-0">
                                <div class="hover-mt-n25 transition-500 small">
                                    <P class=" mt-2"><del class="text-secondary small">$599.00</del> - $799.00</P>
                                    <div class="text-uppercase small cursor-p ">
                                        <a class=" text-decoration-none text-dark fw-bold">add to cart</a>
                                        <div class="vr mx-1"></div>
                                        <a class=" text-decoration-none text-dark fw-bold">quick view</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-8 col-sm-4 col-md-3 p-0">
                        <div class="card rounded-0 group-hover p-2 h-100">
                            <div class="overflow-hidden position-relative">
                                <img class="w-100" src="../images/demo/electronic-smpt-5.jpg ">
                                <div class="card-img-overlay rounded-0 d-flex p-0 bg-opacity-0 justify-content-end align-items-end bg-dark hover-bg-opacity-10 transition-1000">
                                    <div class="btn-group-vertical transform-rotateY-90 hover-transform-rotateY-0 transition-500">
                                        <a class="btn btn-light p-0 border-0"><i class="p-2 fas fa-random bg-white border"></i></a>
                                        <a class="btn btn-light p-0 border-0"><i class="p-2 far fa-heart bg-white border"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-capitalize small mt-2 p-0">
                                <p class="mb-1 ">note 9 128GB  factory unlocked tablet</p>
                                <div class="small py-1">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <span class="text-secondary">(7)</span>
                                </div>
                            </div>
                            <div class="card-footer border-0 bg-transparent  h-6 overflow-hidden p-0">
                                <div class="hover-mt-n25 transition-500 small">
                                    <P class=" mt-2">$699.00 - $899.00</P>
                                    <div class="text-uppercase small cursor-p ">
                                        <a class=" text-decoration-none text-dark fw-bold">add to cart</a>
                                        <div class="vr mx-1"></div>
                                        <a class=" text-decoration-none text-dark fw-bold">quick view</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-8 col-sm-4 col-md-3 p-0">
                        <div class="card rounded-0 group-hover p-2 h-100">
                            <div class="overflow-hidden position-relative">
                                <img class="w-100" src="../images/demo/electronic-smpt-6.jpg ">
                                <div class="card-img-overlay rounded-0 d-flex p-0 bg-opacity-0 justify-content-end align-items-end bg-dark hover-bg-opacity-10 transition-1000">
                                    <div class="btn-group-vertical transform-rotateY-90 hover-transform-rotateY-0 transition-500">
                                        <a class="btn btn-light p-0 border-0"><i class="p-2 fas fa-random bg-white border"></i></a>
                                        <a class="btn btn-light p-0 border-0"><i class="p-2 far fa-heart bg-white border"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-capitalize small mt-2 p-0">
                                <p class="mb-1 ">lightweight android  tablet 32GB storage</p>
                                <div class="small py-1">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <span class="text-secondary">(4)</span>
                                </div>
                            </div>
                            <div class="card-footer border-0 bg-transparent  h-6 overflow-hidden p-0">
                                <div class="hover-mt-n25 transition-500 small">
                                    <P class="mt-2">$699.00</P>
                                    <div class="text-uppercase small cursor-p ">
                                        <a class=" text-decoration-none text-dark fw-bold">add to cart</a>
                                        <div class="vr mx-1"></div>
                                        <a class=" text-decoration-none text-dark fw-bold">quick view</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-8 col-sm-4 col-md-3 p-0">
                        <div class="card rounded-0 group-hover p-2 h-100">
                            <div class="overflow-hidden position-relative">
                                <img class="w-100" src="../images/demo/electronic-smpt-7.jpg ">
                                <div class="card-img-overlay rounded-0 d-flex p-0 bg-opacity-0 justify-content-end align-items-end bg-dark hover-bg-opacity-10 transition-1000">
                                    <div class="btn-group-vertical transform-rotateY-90 hover-transform-rotateY-0 transition-500">
                                        <a class="btn btn-light p-0 border-0"><i class="p-2 fas fa-random bg-white border"></i></a>
                                        <a class="btn btn-light p-0 border-0"><i class="p-2 far fa-heart bg-white border"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-capitalize small mt-2 p-0">
                                <p class="mb-1 ">apple iMac with retina  5K, 27-inch display</p>
                                <div class="small py-1">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <span class="text-secondary">(4)</span>
                                </div>
                            </div>
                            <div class="card-footer border-0 bg-transparent  h-6 overflow-hidden p-0">
                                <div class="hover-mt-n25 transition-500 small">
                                    <P class="mt-2">$499.00 - $699.00</P>
                                    <div class="text-uppercase small cursor-p ">
                                        <a class=" text-decoration-none text-dark fw-bold">add to cart</a>
                                        <div class="vr mx-1"></div>
                                        <a class=" text-decoration-none text-dark fw-bold">quick view</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-8 col-sm-4 col-md-3 p-0">
                        <div class="card rounded-0 group-hover p-2 h-100">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="../images/demo/electronic-ha2.jpg ">
                                <div class="card-img-overlay rounded-0 d-flex p-0 bg-opacity-0 justify-content-end align-items-end bg-dark hover-bg-opacity-10 transition-1000">
                                    <div class="btn-group-vertical transform-rotateY-90 hover-transform-rotateY-0 transition-500">
                                        <a class="btn btn-light p-0 border-0"><i class="p-2 fas fa-random bg-white border"></i></a>
                                        <a class="btn btn-light p-0 border-0"><i class="p-2 far fa-heart bg-white border"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-capitalize small mt-2 p-0">
                                <p class=" mb-1">top freezer apartment  size refrigerator stainless</p>
                                <div class="small py-1">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <span class="text-secondary">(10)</span>
                                </div>
                            </div>
                            <div class="card-footer border-0 bg-transparent  h-6 overflow-hidden p-0">
                                <div class="hover-mt-n25 transition-500 small">
                                    <P class="mt-2">$599.00</P>
                                    <div class="text-uppercase small cursor-p ">
                                        <a class=" text-decoration-none text-dark fw-bold">add to cart</a>
                                        <div class="vr mx-1"></div>
                                        <a class=" text-decoration-none text-dark fw-bold">quick view</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-8 col-sm-4 col-md-3 p-0">
                        <div class="card rounded-0 group-hover p-2 h-100">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="../images/demo/electronic-ha3.jpg ">
                                <div class="card-img-overlay rounded-0 d-flex p-0 bg-opacity-0 justify-content-end align-items-end bg-dark hover-bg-opacity-10 transition-1000">
                                    <div class="btn-group-vertical transform-rotateY-90 hover-transform-rotateY-0 transition-500">
                                        <a class="btn btn-light p-0 border-0"><i class="p-2 fas fa-random bg-white border"></i></a>
                                        <a class="btn btn-light p-0 border-0"><i class="p-2 far fa-heart bg-white border"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-capitalize fw-semibold small mt-2 p-0">
                                <p class=" mb-1">sylvania 55" 4k  UHD android smart television</p>
                                <div class="small py-1">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <span class="text-secondary">(20)</span>
                                </div>
                            </div>
                            <div class="card-footer border-0 bg-transparent  h-6 overflow-hidden p-0">
                                <div class="hover-mt-n25 transition-500 small">
                                    <P class="mt-2">$599.00</P>
                                    <div class="text-uppercase small cursor-p ">
                                        <a class=" text-decoration-none text-dark fw-bold">add to cart</a>
                                        <div class="vr mx-1"></div>
                                        <a class=" text-decoration-none text-dark fw-bold">quick view</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-8 col-sm-4 col-md-3 p-0">
                        <div class="card rounded-0 group-hover p-2 h-100">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="../images/demo/electronic-ha4.jpg ">
                                <div class="card-img-overlay rounded-0 d-flex p-0 bg-opacity-0 justify-content-end align-items-end bg-dark hover-bg-opacity-10 transition-1000">
                                    <div class="btn-group-vertical transform-rotateY-90 hover-transform-rotateY-0 transition-500">
                                        <a class="btn btn-light p-0 border-0"><i class="p-2 fas fa-random bg-white border"></i></a>
                                        <a class="btn btn-light p-0 border-0"><i class="p-2 far fa-heart bg-white border"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-capitalize fw-semibold small mt-2 p-0">
                                <p class=" mb-1">portable washing machine 11lbs capacity</p>
                                <div class="small py-1">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <span class="text-secondary">(1)</span>
                                </div>
                            </div>
                            <div class="card-footer border-0 bg-transparent  h-6 overflow-hidden p-0">
                                <div class="hover-mt-n25 transition-500 small">
                                    <P class="mt-2">$599.00</P>
                                    <div class="text-uppercase small cursor-p ">
                                        <a class=" text-decoration-none text-dark fw-bold">add to cart</a>
                                        <div class="vr mx-1"></div>
                                        <a class=" text-decoration-none text-dark fw-bold">quick view</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-8 col-sm-4 col-md-3 p-0">
                        <div class="card rounded-0 group-hover p-2 h-100">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="../images/demo/electronic-ha5.jpg ">
                                <div class="card-img-overlay rounded-0 d-flex p-0 bg-opacity-0 justify-content-end align-items-end bg-dark hover-bg-opacity-10 transition-1000">
                                    <div class="btn-group-vertical transform-rotateY-90 hover-transform-rotateY-0 transition-500">
                                        <a class="btn btn-light p-0 border-0"><i class="p-2 fas fa-random bg-white border"></i></a>
                                        <a class="btn btn-light p-0 border-0"><i class="p-2 far fa-heart bg-white border"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-capitalize fw-semibold small mt-2 p-0">
                                <p class=" mb-1">newAir portable evaporative air cooler</p>
                                <div class="small py-1">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <span class="text-secondary">(23)</span>
                                </div>
                            </div>
                            <div class="card-footer border-0 bg-transparent  h-6 overflow-hidden p-0">
                                <div class="hover-mt-n25 transition-500 small">
                                    <P class="mt-2">$599.00</P>
                                    <div class="text-uppercase small cursor-p ">
                                        <a class=" text-decoration-none text-dark fw-bold">add to cart</a>
                                        <div class="vr mx-1"></div>
                                        <a class=" text-decoration-none text-dark fw-bold">quick view</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-8 col-sm-4 col-md-3  p-0">
                        <div class="card rounded-0 group-hover p-2 h-100">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="../images/demo/electronic-ha6.jpg ">
                                <div class="card-img-overlay rounded-0 d-flex p-0 bg-opacity-0 justify-content-end align-items-end bg-dark hover-bg-opacity-10 transition-1000">
                                    <div class="btn-group-vertical transform-rotateY-90 hover-transform-rotateY-0 transition-500">
                                        <a class="btn btn-light p-0 border-0"><i class="p-2 fas fa-random bg-white border"></i></a>
                                        <a class="btn btn-light p-0 border-0"><i class="p-2 far fa-heart bg-white border"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-capitalize fw-semibold small mt-2 p-0">
                                <p class=" mb-1">LG ductless air  conditioning single-Zone</p>
                                <div class="small py-1">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <span class="text-secondary">(1)</span>
                                </div>
                            </div>
                            <div class="card-footer border-0 bg-transparent  h-6 overflow-hidden p-0">
                                <div class="hover-mt-n25 transition-500 small">
                                    <P class="mt-2">$599.00</P>
                                    <div class="text-uppercase small cursor-p ">
                                        <a class=" text-decoration-none text-dark fw-bold">add to cart</a>
                                        <div class="vr mx-1"></div>
                                        <a class=" text-decoration-none text-dark fw-bold">quick view</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-8 col-sm-4 col-md-3  p-0">
                        <div class="card rounded-0 group-hover p-2 h-100">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="../images/demo/electronic-ha7.jpg ">
                                <div class="card-img-overlay rounded-0 d-flex p-0 bg-opacity-0 justify-content-end align-items-end bg-dark hover-bg-opacity-10 transition-1000">
                                    <div class="btn-group-vertical transform-rotateY-90 hover-transform-rotateY-0 transition-500">
                                        <a class="btn btn-light p-0 border-0"><i class="p-2 fas fa-random bg-white border"></i></a>
                                        <a class="btn btn-light p-0 border-0"><i class="p-2 far fa-heart bg-white border"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-capitalize fw-semibold small mt-2 p-0">
                                <p class=" mb-1">TOSHIBA electric rice cooker model 18NMFIAN</p>
                                <div class="small py-1">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <span class="text-secondary">(3)</span>
                                </div>
                            </div>
                            <div class="card-footer border-0 bg-transparent  h-6 overflow-hidden p-0">
                                <div class="hover-mt-n25 transition-500 small">
                                    <P class="mt-2">$599.00</P>
                                    <div class="text-uppercase small cursor-p ">
                                        <a class=" text-decoration-none text-dark fw-bold">add to cart</a>
                                        <div class="vr mx-1"></div>
                                        <a class=" text-decoration-none text-dark fw-bold">quick view</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-8 col-sm-4 col-md-3 p-0">
                        <div class="card rounded-0 group-hover p-2 h-100">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid " src="../images/demo/electronic-gca2.jpg ">
                                <div class="card-img-overlay rounded-0 d-flex p-0 bg-opacity-0 justify-content-end align-items-end bg-dark hover-bg-opacity-10 transition-1000">
                                    <div class="btn-group-vertical transform-rotateY-90 hover-transform-rotateY-0 transition-500">
                                        <a class="btn btn-light p-0 border-0"><i class="p-2 fas fa-random bg-white border"></i></a>
                                        <a class="btn btn-light p-0 border-0"><i class="p-2 far fa-heart bg-white border"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-capitalize small mt-2 p-0">
                                <p class=" mb-1 ">canon digital camera  w/ 42x optical zoom</p>
                                <div class="small py-1">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <span class="text-secondary">(8)</span>
                                </div>
                            </div>
                            <div class="card-footer border-0 bg-transparent  h-6 overflow-hidden p-0">
                                <div class="hover-mt-n25 transition-500 small">
                                    <P class="mt-2">$56.00</P>
                                    <div class="text-uppercase small cursor-p ">
                                        <a class=" text-decoration-none text-dark fw-bold">add to cart</a>
                                        <div class="vr mx-1"></div>
                                        <a class=" text-decoration-none text-dark fw-bold">quick view</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <div class=" col-8 col-sm-4 col-md-3 p-0">
                        <div class="card rounded-0 group-hover p-2 h-100">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="../images/demo/electronic-gca4.jpg ">
                                <div class="card-img-overlay rounded-0 d-flex p-0 bg-opacity-0 justify-content-end align-items-end bg-dark hover-bg-opacity-10 transition-1000">
                                    <div class="btn-group-vertical transform-rotateY-90 hover-transform-rotateY-0 transition-500">
                                        <a class="btn btn-light p-0 border-0"><i class="p-2 fas fa-random bg-white border"></i></a>
                                        <a class="btn btn-light p-0 border-0"><i class="p-2 far fa-heart bg-white border"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-capitalize small mt-2 p-0">
                                <p class=" mb-1 ">sony DSCHX8 heigh  zoom point & shoot camera</p>
                                <div class="small py-1">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <span class="text-secondary">(12)</span>
                                </div>
                            </div>
                            <div class="card-footer border-0 bg-transparent  h-6 overflow-hidden p-0">
                                <div class="hover-mt-n25 transition-500 small">
                                    <P class="mt-2">$110.00</P>
                                    <div class="text-uppercase small cursor-p ">
                                        <a class=" text-decoration-none text-dark fw-bold">add to cart</a>
                                        <div class="vr mx-1"></div>
                                        <a class=" text-decoration-none text-dark fw-bold">quick view</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-8 col-sm-4 col-md-3 p-0">
                        <div class="card rounded-0 group-hover p-2 h-100">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid " src="../images/demo/electronic-gca5.jpg ">
                                <div class="card-img-overlay rounded-0 d-flex p-0 bg-opacity-0 justify-content-end align-items-end bg-dark hover-bg-opacity-10 transition-1000">
                                    <div class="btn-group-vertical transform-rotateY-90 hover-transform-rotateY-0 transition-500">
                                        <a class="btn btn-light p-0 border-0"><i class="p-2 fas fa-random bg-white border"></i></a>
                                        <a class="btn btn-light p-0 border-0"><i class="p-2 far fa-heart bg-white border"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-capitalize small mt-2 p-0">
                                <p class=" mb-1 ">outdoor security camera  wireless, 1080p full HD</p>
                                <div class="small py-1">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <i class="far fa-star text-warning"></i>
                                    <span class="text-secondary">(10)</span>
                                </div>
                            </div>
                            <div class="card-footer border-0 bg-transparent  h-6 overflow-hidden p-0">
                                <div class="hover-mt-n25 transition-500 small">
                                    <P class="mt-2">$599.00</P>
                                    <div class="text-uppercase small cursor-p ">
                                        <a class=" text-decoration-none text-dark fw-bold">add to cart</a>
                                        <div class="vr mx-1"></div>
                                        <a class=" text-decoration-none text-dark fw-bold">quick view</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <p class="mb-2">You're viewed 20 of 79 products</p>
                    <button class="fw-bold text-white bg-dark hover-border-red hover-text-red hover-bg-transparent btn rounded-0 text-uppercase box-shadow-none " type="button"><small>load more...</small></button>
                </div>
            </div>
        </div>
    </div>
</section>