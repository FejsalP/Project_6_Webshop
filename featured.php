<?php
    //$featured_products = $product -> getData();
?>
<?php
//method post

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['product_featured'])){
         $shoppingCart->addToShoppingCart($_SESSION['userID'], $_POST['productID']);
    }}
?>
<link rel="stylesheet" href="style.css" class="rel">

<section id="featured">
    <div class="container text-center">
        <div class="row justify-content-center">
            <?php
                foreach($featured_products as $item){ 
            ?>
            <div class="card m-2" style="width: 18rem;">
                <a href="<?php printf('product_info.php?productID=%s', $item['productID']); ?>">
                    <img src=<?php echo $item["productImage"] ?? "images/jacketA.jpg";?> class="card-img-top" id="test"
                        style="height:200px; width:200px;" alt="Picture"></a>

                <div class="card-body">
                    <p class="card-text"><?php echo $item["productName"] ?? "Jacket A";?> <br> Price: <span
                            id="featured_item_price"><?php echo $item["productPrice"] ?? "50";?></span> KM</p>
                </div>
                <?php
                    
                ?>
                <form method="post">
                    <input type="hidden" name="productID" value="<?php echo $item['productID']??'1';?>">
                    <input type="hidden" name="userID" value="<?php echo 1;?>">

                    <?php 
                        if(isset($_SESSION["userID"])){
                            if (in_array($item['productID'], $shoppingCart->getCartID($product->getDataSelected('cart')) ?? [])){
                                echo '<button type="submit" disabled name="product_featured" class="btn btn-danger mb-3 disabled">Add to cart</button>';
                            }
                            else{
                                echo '<button type="submit" name="product_featured" class="btn btn-primary mb-3">Add to cart</button>';
                            }   
                    }
                        
                    ?>
                </form>
            </div>
            <?php
                }
            ?>
        </div>

    </div>

</section>