<?php
include_once 'header_footer/header.php';
?>

<!--Begin-->
<section class="py-2">
    <div class="container">
        <h4>Shopping cart</h4>
        <div class="row">
            <div class="col-9">
                <div class="row border-top py-3">
                    <div class="col-sm-2">
                        <img src="images/jacketA.jpg" class="border" style="height: 150px" alt="Picture">
                    </div>


                    <div class="col-sm-8 pl-5">
                        <h5>Jacket A</h5>
                        <div class="quantity d-flex pt-3">
                            <div class="d-flex w-25">
                                <input type="text" data-id="product1" value="1" disabled
                                    class="px-1 w-50 border bg-light quantity-input">
                                <button data-id="product1" class="quantity-up border bg-light">+</button>
                                <button data-id="product1" class="quantity-down border bg-light">-</button>

                            </div>
                            <button type="submit" class="px-2 btn btn-danger">Delete</button>

                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="font-size-20 text-danger">
                            <span class="price">50</span> KM
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-3">
                <div class="sub-total text-center">
                    <h6>
                        Total delivery
                    </h6>
                    <div class="py-3 border">
                        <h5>
                            Subtotal (2 items): <span id="total_price">100</span> KM
                        </h5>
                        <button class="btn btn-primary">Buy</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-9">
                <div class="row border-top py-3">
                    <div class="col-sm-2">
                        <img src="images/jacketA.jpg" class="border" style="height: 150px" alt="Picture">
                    </div>


                    <div class="col-sm-8 pl-5">
                        <h5>Jacket A</h5>
                        <div class="quantity d-flex pt-3">
                            <div class="d-flex w-25">
                                <input type="text" value="1" data-id="product2" disabled
                                    class="px-1 w-50 border bg-light quantity-input">
                                <button data-id="product2" class="quantity-up border bg-light">+</button>
                                <button data-id="product2" class="quantity-down border bg-light">-</button>

                            </div>
                            <button type="submit" class="px-2 btn btn-danger">Delete</button>

                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="font-size-20 text-danger">
                            <span class="price">50</span> KM
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-3">
            </div>
        </div>
    </div>

</section>

<!--End-->


<?php
include_once 'header_footer/footer.php';
?>