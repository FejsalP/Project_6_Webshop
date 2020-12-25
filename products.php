<?php
    include_once 'header_footer/header.php';
?>

<h2 class="pt-5 text-center">
    Products
</h2>

<section id="products">
    <section class="container">
        <h4>Products</h4>
        <div class="button-group text-right" id="filters">
            <button class="btn is-checked" data-filter="">All Brands</button>
            <button class="btn" data-filter=".BrandA">Brand A</button>
            <button class="btn" data-filter=".BrandB">Brand B</button>
            <button class="btn" data-filter=".BrandC">Brand C</button>
        </div>
        <div class="sort-button-group text-right" id="sort">
            <button class="btn btn-default" data-sort-direction="asc" data-sort-value="original-order"
                type="button">Ascending <span aria-hidden="true"></span></button>
            <button class="btn btn-default" data-sort-direction="desc" data-sort-value="original-order"
                type="button">Descending <span aria-hidden="true"></span></button>
            <button class="btn" data-sort-value="price">Price: Ascending</button>
            <button class="btn" data-sort-value="price">Price: Descending</button>
        </div>
        <div class="grid">
            <div class="grid-item BrandB border">
                <div class="item py-2" style="width:200px">
                    <div class="product">
                        <a href="#"><img class="img-fluid" class="productimg" src="images/jacketA.jpg" alt="Jacket A"
                                srcset=""></a>
                        <div class="text-center">
                            <h5>Jacket A</h5>

                            <div class="price">
                                50
                            </div>
                            <button type="submit" class="btn btn-primary">Add to cart</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="grid-item BrandC border">
                <div class="item py-2" style="width:200px">
                    <div class="product">
                        <a href="#"><img class="img-fluid" class="productimg" src="images/trousersA.jpg" alt="Jacket A"
                                srcset=""></a>
                        <div class="text-center">
                            <h5>Jacket A</h5>

                            <div class="price">
                                50
                            </div>
                            <button type="submit" class="btn btn-primary">Add to cart</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="grid-item BrandA border">
                <div class="item py-2" style="width:200px">
                    <div class="product">
                        <a href="#"><img class="img-fluid" src="images/jacketA.jpg" alt="Jacket A" srcset=""></a>
                        <div class="text-center">
                            <h5>Jacket A</h5>

                            <div class="price">
                                50
                            </div>
                            <button type="submit" class="btn btn-primary">Add to cart</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="grid-item BrandA border">
                <div class="item py-2" style="width:200px">
                    <div class="product">
                        <a href="#"><img class="img-fluid" src="images/jacketA.jpg" alt="Jacket A" srcset=""></a>
                        <div class="text-center">
                            <h5>Jacket A</h5>

                            <div class="price">
                                5
                            </div>
                            <button type="submit" class="btn btn-primary">Add to cart</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="grid-item BrandA border">
                <div class="item py-2" style="width:200px">
                    <div class="product">
                        <a href="#"><img class="img-fluid" src="images/jacketA.jpg" alt="Jacket A" srcset=""></a>
                        <div class="text-center">
                            <h5>Jacket A</h5>

                            <div class="price">
                                50
                            </div>
                            <button type="submit" class="btn btn-primary">Add to cart</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="grid-item BrandA border">
                <div class="item py-2" style="width:200px">
                    <div class="product">
                        <a href="#"><img class="img-fluid" src="images/jacketA.jpg" alt="Jacket A" srcset=""></a>
                        <div class="text-center">
                            <h5>Jacket A</h5>

                            <div class="price">
                                50
                            </div>
                            <button type="submit" class="btn btn-primary">Add to cart</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="grid-item BrandA border">
                <div class="item py-2" style="width:200px">
                    <div class="product">
                        <a href="#"><img class="img-fluid" src="images/jacketA.jpg" alt="Jacket A" srcset=""></a>
                        <div class="text-center">
                            <h5>Jacket A</h5>

                            <div class="price">
                                55
                            </div>
                            <button type="submit" class="btn btn-primary">Add to cart</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="grid-item BrandA border">
                <div class="item py-2" style="width:200px">
                    <div class="product">
                        <a href="#"><img class="img-fluid" src="images/trousersB.jpg" alt="Jacket A" srcset=""></a>
                        <div class="text-center">
                            <h5>Jacket A</h5>

                            <div class="price">
                                60
                            </div>
                            <button type="submit" class="btn btn-primary">Add to cart</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="grid-item BrandA border">
                <div class="item py-2" style="width:200px">
                    <div class="product">
                        <a href="#"><img class="img-fluid" src="images/tshirtC.jpg" alt="Jacket A" srcset=""></a>
                        <div class="text-center">
                            <h5>Jacket A</h5>

                            <div class="price">
                                50
                            </div>
                            <button type="submit" class="btn btn-primary">Add to cart</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</section>



<?php
    include_once 'header_footer/footer.php';
?>