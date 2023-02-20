<section id="shoppign-bag" class="py-5">
    <div class="container-lg ">
        <div class="row gap-3 gap-md-0">
            <div class="col-md-8">
                <table class="table border">
                    <thead class="text-uppercase ">
                        <tr  class="d-none d-md-table-row">
                            <th class=" d-md-table-cell py-3 " scope="col">product</th>
                            <th class=" d-md-table-cell py-3 " scope="col">price</th>
                            <th class=" d-md-table-cell py-3 " scope="col">quantity</th>
                            <th class=" d-md-table-cell py-3 " scope="col">subtotal</th>
                            <th class=" d-md-table-cell py-3 " scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="d-block d-md-table-row position-relative">
                            <td class=" d-block d-md-table-cell">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        <img class=" img-fluid" src="../images/demo/electronic-lp1.jpg">
                                    </div>
                                    <div class="col">
                                        <p class="text-capitalize mb-0">microsoft surface laptop 3-15" touch-Screen</p>
                                    </div>
                                </div>
                            </td>
                            <td class="d-flex justify-content-between d-md-table-cell align-middle">
                                <span class="d-md-none">Price</span>
                                <span>$390.00</span>
                            </td>
                            <td class="d-flex justify-content-between d-md-table-cell align-middle">
                                <span class="d-md-none">Quantity</span>
                                <div class="btn-group btn-group-sm w-auto">
                                    <button class="btn rounded-0 box-shadow-none btn-success">-</button>
                                    <input type="text" class="form-controle form-control-sm border rounded-0 outline-0 text-center" value="1" style="max-width:3rem;">
                                    <button class="btn rounded-0 box-shadow-none btn-success">+</button>
                                </div>
                            </td>
                            <td class="d-flex justify-content-between d-md-table-cell align-middle">
                                <span class="d-md-none">Subtotal</span>
                                <span>$390.00</span>
                            </td>
                            <td class="d-block d-md-table-cell align-middle position-absolute  position-md-static top-0 start-auto end-0">x</td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex gap-3 flex-column flex-lg-row justify-content-between">
                    <div class="d-flex w-100 justify-content-between border-bottom border-dark ">
                        <input type="text" class=" outline-0 border-0" id="" name="" placeholder="coupon code">
                        <button class="btn text-nowrap text-uppercase box-shadow-none border-0 p-0" type="button">apply coupon</button>
                    </div>
                    <div class="d-grid text-nowrap d-lg-block gap-2 pt-2 "> 
                        <button class="btn btn-sm btn-transparent text-uppercase box-shadow-none hover-bg-dark border border-dark rounded-0 px-3">enpty cart</button>
                        <button class="btn btn-sm btn-transparent text-uppercase box-shadow-none hover-disabled border text-secondary rounded-0 px-3">update cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 pt-5 pt-md-0">
                <div class="text-uppercase border-dashed border-2 p-3 border-danger">
                   <h6 class="fw-bold">cart totals</h6>
                   <div class="d-flex justify-content-between align-items-center border-bottom small">
                        <p class=" pt-2">subtotal</p>
                        <p class=" pt-2">$3,195.00</p>
                   </div>
                   <div class="d-flex justify-content-between align-items-center border-bottom small pt-3">
                        <p class="align-self-start pe-4">shipping</p>
                        <div class="text-capitalize">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">free shipping</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">local pickup: <span class="fw-bold">$10:00</span>
                                    <p class="fst-italic">Shipping options will be updated during checkout</p>
                                    <a href="#" class="text-decoration-none text-uppercase"><i class="fas fa-shipping-fast text-muted"></i>
                                        <p class="ps-1 fw-bold text-body d-inline-block">calculate shipping</p>
                                    </a>
                                </label>
                            </div>
                        </div>
                   </div>
                   <div class="text-center border-top">
                        <div class="d-flex justify-content-between align-items-center border-bottom small pt-3">
                            <p>subtotal</p>
                            <p>$3,195.00</p>
                        </div>
                        <a href="../checkout/checkout.php" class="w-100 fw-bold text-white bg-red-danger hover-border-red hover-text-red hover-bg-transparent btn rounded-0 text-uppercase box-shadow-none " type="button"><small>order and shipping</small></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>