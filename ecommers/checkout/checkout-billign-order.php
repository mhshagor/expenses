<section id="shoppign-bag" class="py-3">
    <div class="container-lg ">
        <div class="text-uppercase py-2">
            <h6 class="">returning customer? <a href="../login/login.php" class="text-decoration-none text-danger">click here to login</a></h6>
            <h6 class="">have a coupon? <a href="#" class="text-decoration-none text-danger">click here to inter your code</a></h6>
        </div>
        <div class="row ">
            <div class="col-md-8 mb-5 p-4 p-md-2">
                <h3 class="text-uppercase fw-bolder py-2">billing details</h3>
                <form class="row  g-3 text-capitalize small border-0">
                    <div class="w-lg-50">
                        <label for="fname" class="form-label">first name</label>
                        <input type="text" id="fname" name="fname" class="form-control box-shadow-none rounded-0">
                    </div>
                    <div class="w-lg-50">
                        <label for="lname" class="form-label">last name</label>
                        <input type="text" id="lname" name="lname" class="form-control box-shadow-none rounded-0">
                    </div>
                    <div class="">
                        <label for="companyname" class="form-label">company name (optional)</label>
                        <input type="text" id="companyname" name="companyname" class="form-control box-shadow-none rounded-0">
                    </div>
                    <div class="">
                        <label class="form-label" for="inlineFormSelectPref">country / region</label>
                        <select class="form-select box-shadow-none rounded-0" id="inlineFormSelectPref">
                            <option selected>bangladesh</option>
                            <option value="1">bangladesh</option>
                            <option value="2">two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="">
                        <label for="inputAddress" class="form-label">street address</label>
                        <input type="text" class=" placeholder-sm form-control box-shadow-none rounded-0" id="inputAddress" placeholder="house number and street name">
                        <input type="text" class=" placeholder-sm form-control box-shadow-none rounded-0 mt-3" id="inputAddress2" placeholder="Apartment, suite, unit, etc. (optional)">
                    </div>
                    <div class="">
                        <label for="town" class="form-label">town / city</label>
                        <input type="text" id="town" name="town" class="form-control box-shadow-none rounded-0" >
                    </div>
                    <div class="">
                        <label for="country" class="form-label ">company name (optional)</label>
                        <input type="text" id="country" name="country" class="form-control box-shadow-none rounded-0" >
                    </div>
                    <div class="">
                        <label for="postcode" class="form-label ">postcode</label>
                        <input type="text" id="postcode" name="postcode" class="form-control box-shadow-none rounded-0">
                    </div>
                    <div class="">
                        <label for="phone" class="form-label ">phone</label>
                        <input type="text" id="phone" name="phone" class="form-control box-shadow-none rounded-0">
                    </div>
                    <div class="">
                        <label for="email" class="form-label ">email address</label>
                        <input type="email" id="email" name="email" class="form-control box-shadow-none rounded-0">
                    </div>
                    <!-- accordion-->
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item border-0 border-bottom text-capitalize px-0 py-2">
                            <div class="accordion-header d-flex align-items-center box-shadow-none collapsed py-2 px-0 " type="button" data-bs-toggle="collapse" data-bs-target="#shipping1">
                                <input class="form-check-input  box-shadow-none rounded-0 m-0" type="checkbox" value="">
                                    <span class="ps-2 text-secondary ">creatte an account</span>
                            </div>
                            <div id="shipping1" class="accordion-collapse collapse transition-800 timing-function-ease-out" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body px-0 fs-normal">
                                    <div class=" pb-1">
                                        <label for="password" class="form-label ">create account password</label>
                                        <input type="password" id="password" name="password" class="form-control box-shadow-none rounded-0" checked>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 text-capitalize px-0 py-2">
                            <div class="accordion-header d-flex align-items-center box-shadow-none collapsed py-2 px-0 " type="button" data-bs-toggle="collapse" data-bs-target="#shipping2">
                                <input class="form-check-input  box-shadow-none rounded-0 m-0" type="checkbox" value="">
                                <span class="ps-2 text-secondary ">ship to a different address</span>
                            </div>
                            <div id="shipping2" class="accordion-collapse collapse transition-1000 timing-function-ease-out" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body px-0 row  g-3 text-capitalize">
                                        <div class="w-lg-50">
                                            <label for="fname" class="form-label">first name</label>
                                            <input type="text" id="fname" name="fname" class="form-control box-shadow-none rounded-0">
                                        </div>
                                        <div class="w-lg-50">
                                            <label for="lname" class="form-label">last name</label>
                                            <input type="text" id="lname" name="lname" class="form-control box-shadow-none rounded-0">
                                        </div>
                                        <div class="">
                                            <label for="companyname" class="form-label">company name (optional)</label>
                                            <input type="text" id="companyname" name="companyname" class="form-control box-shadow-none rounded-0">
                                        </div>
                                        <div class="">
                                            <label class="form-label" for="inlineFormSelectPref">country / region</label>
                                            <select class="form-select box-shadow-none rounded-0" id="inlineFormSelectPref">
                                                <option selected>bangladesh</option>
                                                <option value="1">bangladesh</option>
                                                <option value="2">two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="">
                                            <label for="inputAddress" class="form-label">street address</label>
                                            <input type="text" class=" placeholder-sm form-control box-shadow-none rounded-0" id="inputAddress" placeholder="house number and street name">
                                            <input type="text" class=" placeholder-sm form-control box-shadow-none rounded-0 mt-3" id="inputAddress2" placeholder="Apartment, suite, unit, etc. (optional)">
                                        </div>
                                        <div class="">
                                            <label for="town" class="form-label">town / city</label>
                                            <input type="text" id="town" name="town" class="form-control box-shadow-none rounded-0" >
                                        </div>
                                        <div class="">
                                            <label for="country" class="form-label ">company name (optional)</label>
                                            <input type="text" id="country" name="country" class="form-control box-shadow-none rounded-0" >
                                        </div>
                                        <div class="">
                                            <label for="postcode" class="form-label ">postcode</label>
                                            <input type="text" id="postcode" name="postcode" class="form-control box-shadow-none rounded-0">
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <label for="exampleFormControlTextarea1" class="form-label">order notes (optional)</label>
                        <textarea class="form-control placeholder-sm box-shadow-none rounded-0" id="exampleFormControlTextarea1" rows="6" placeholder="notes about your order, e.g. special notes for delivery"></textarea>
                    </div>
                </form>
            </div>
            <div class="col-md-4 mb-5 p-4 p-md-2">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="text-uppercase border-dashed border-1 p-3 border-danger">
                            <h6 class="fw-bold">cart totals</h6>
                            <div class="d-flex justify-content-between align-items-center border-bottom small py-3">
                                <p class="mb-0">subtotal</p>
                                <p class="mb-0">$3,195.00</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center border-bottom text-capitalize small py-3">
                                <div>
                                    <p class="mb-0">new unlocked 128 GB of storage smartphone - pink</p>
                                    <p class="">x2</p>
                                </div>
                                <p class=" pt-2">$1,198.00</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center small pt-3">
                                <p class="mb-0">subtotal</p>
                                <p class="mb-0">$3,195.00</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center border-bottom small py-3">
                                <p class="align-self-start pe-4">shipping</p>
                                <div class="text-capitalize">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                        <label class="form-check-label" for="flexRadioDefault1">free shipping</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">local pickup: <span class="fw-bold">$10:00</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center border-top">
                                <div class="d-flex justify-content-between align-items-center border-bottom small pt-3">
                                    <p>subtotal</p>
                                    <p>$3,195.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--====== accordion ======-->
                    <div class="col-12">
                        <div class=" text-capitalize border-dashed border-1 p-3 border-danger">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item border-0">
                                    <div class="accordion-header d-flex align-items-center " id="flush-headingOne" data-bs-toggle="collapse" data-bs-target="#flush-One" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <input class="form-check-input  box-shadow-none m-0" type="radio" value="">
                                        <span class="p-2 ">check payments</span>
                                    </div>
                                    <div id="flush-One" class="accordion-collapse collapse " aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body small bg-light">Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</div>
                                    </div>
                                </div>
                                <div class="accordion-item border-0">
                                    <div class="accordion-header d-flex align-items-center" id="flush-headingOne" data-bs-toggle="collapse" data-bs-target="#flush-two" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <input class="form-check-input  box-shadow-none m-0" type="radio" value="">
                                        <span class="p-2 ">paypal</span>
                                    </div>
                                    <div id="flush-two" class="accordion-collapse collapse bg-light" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body small bg-light">Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account</div>
                                    </div>.
                                </div>
                            </div>
                            <div class=" py-3 text-uppercase ">
                                <a href="#" class="text-danger small text-end d-block"> what is paypal</a>
                                <a href="../confirmation/confirmation.php" class="w-100 fw-bold text-uppercase  text-white bg-red-danger hover-border-red hover-text-red hover-bg-transparent btn rounded-0 box-shadow-none " type="button">place order
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>