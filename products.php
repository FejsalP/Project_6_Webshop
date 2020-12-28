<?php
    include_once 'header_footer/header.php';
    include_once 'includes/product.php';
    $all_products = $product->getData();
    $brands = array_map(function($product){
         return $product['productBrand'];},$all_products);
    $unique_brands = array_unique($brands);
    sort($unique_brands);
    if($_SERVER['REQUEST_METHOD']=='POST'){

        if(isset($_POST['products_all'])){
            $shoppingCart->addToShoppingCart($_POST['userID'], $_POST['productID']);
        }
}
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
            <?php foreach($products as $item) {
                ?>
            <div class="grid-item Brand<?php echo $item['productBrand']?? 'A';?> border">
                <div class="item py-2" style="width:200px">
                    <div class="product">
                        <a href="<?php printf('product_info.php?productID=%s', $item['productID']); ?>"><img
                                class="img-fluid" class="productimg"
                                src="<?php echo $item['productImage']??images/jacketA.jpg;?>"
                                alt=<?php echo $item['productName']??'Jacket A';?> srcset=""></a>
                        <div class="text-center">
                            <h5><?php echo $item['productName']??'Jacket A';?></h5>

                            <div class="price">
                                <?php echo $item['productPrice']??'50';?>KM
                            </div>
                            <form method="post">
                                <input type="hidden" name="productID" value="<?php echo $item['productID']??'1';?>">
                                <input type="hidden" name="userID" value="<?php echo 1;?>">

                                <?php 
                                if (in_array($item['productID'], $shoppingCart->getCartID($product->getData('cart')) ?? [])){
                                    echo '<button type="submit" disabled name="products_all" class="btn btn-danger mb-3 disabled">Add to cart</button>';
                                }
                                else{
                                    echo '<button type="submit" name="products_all" class="btn btn-primary mb-3">Add to cart</button>';
                                }   
                                ?>
                            </form>
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