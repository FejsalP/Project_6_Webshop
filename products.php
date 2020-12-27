<?php
    include_once 'header_footer/header.php';
    include_once 'includes/product.php';
    $all_products = $product->getData();
    $brands = array_map(function($product){
         return $product['productBrand'];},$all_products);
    $unique_brands = array_unique($brands);
    sort($unique_brands);
?>

<h2 class="pt-5 text-center">
    Products
</h2>

<section id="products">
    <div class="container">
        <h4>Products</h4>
        <div class="button-group text-right" id="filters">
            <button class="btn is-checked" data-filter="">All Brands</button>
            <?php
                array_map(function($brand){
                    printf('<button class="btn" data-filter=".Brand%s">Brand %s</button>', $brand, $brand);
                }, $unique_brands)
            ?>
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
            <?php foreach($all_products as $product) {
                ?>
            <div class="grid-item Brand<?php echo $product['productBrand']?? 'A';?> border">
                <div class="item py-2" style="width:200px">
                    <div class="product">
                        <a href="#"><img class="img-fluid" class="productimg"
                                src="<?php echo $product['productImage']??images/jacketA.jpg;?>"
                                alt=<?php echo $product['productName']??'Jacket A';?> srcset=""></a>
                        <div class="text-center">
                            <h5><?php echo $product['productName']??'Jacket A';?></h5>

                            <div class="price">
                                <?php echo $product['productPrce']??'50';?>KM
                            </div>
                            <button type="submit" class="btn btn-primary">Add to cart</button>
                        </div>
                    </div>
                </div>

            </div>
            <?php } ?>


        </div>
    </div>
</section>
</section>


<?php
    include_once 'header_footer/footer.php';
?>