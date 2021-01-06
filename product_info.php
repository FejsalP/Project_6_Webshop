<?php
    include_once 'header_footer/header.php';
    $productID = $_GET['productID'] ?? 1;
    //$all_products = $product->getData();
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['product_desc'])){
                    $shoppingCart->addToShoppingCart($_POST['userID'], $_POST['productID']);
    }}
    foreach($all_products as $item){
        if($item['productID']==$productID){
?>

<section class="container pt-5 my-5">
    <div class="row">
        <div class="col-sm-5 pb-5">
            <div>
                <img class="img-fluid" src="<?php echo $item['productImage']??'images/jacketA.jpg';?>" alt="Product"
                    srcset="">

            </div>
        </div>
        <div class="col-sm-7 pt-5 text-center justify-content">
            <h4 class="font-size-22">
                <?php echo $item['productName'] ?? 'Jacket A';?>
            </h4>
            <p class="font-size-16 text-justify">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque sunt unde praesentium hic nesciunt quia
                perspiciatis architecto, dolorum totam minima reprehenderit voluptatibus pariatur fuga minus accusantium
                distinctio error. Dolores incidunt fugit et, explicabo deleniti non ea! Saepe autem necessitatibus
                repellendus cum nesciunt, architecto quia recusandae assumenda pariatur cumque, soluta laboriosam.
            </p>

            <div class="row">
                <div class="col">
                    <h4>
                        Price: <span><?php echo $item['productPrice'] ?? '50';?></spam> KM
                    </h4>
                </div>
            </div>
            <hr>

            <div class="row pt-5">
                <div class="col-4">
                    <div class="d-flex justify-content-between">
                        <h5 class="font-size-18">Color: </h5>
                        <div class="color-primary-bg p-2 rounded-circle"><button class="btn font-size-14"></button>
                        </div>
                        <div class="color-secondary-bg p-2 rounded-circle"><button class="btn font-size-14"></button>
                        </div>
                        <div class="color-tertiary-bg p-2 rounded-circle"><button class="btn font-size-14"></button>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="quantity d-flex">
                        <h5>Quantity: </h5>
                        <div class="px-4 d-flex">
                            <div class="quantity d-flex">
                                <h5>Quantity: </h5>
                                <div class="px-4 d-flex">
                                    <input type="text" value="1" disabled data-id="product1"
                                        class="px-1 w-50 border bg-light quantity-input">
                                    <button data-id="product1" class="quantity-up border bg-light">+</button>
                                    <button data-id="product1" class="quantity-down border bg-light">-</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row mt-5 pt-5">
                <h5>Size: </h5>

                <div class="col-4">
                    <div class="col">
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between w-60">
                            <div class="border p-2 mr-2">
                                Small
                            </div>
                            <div class="border p-2 mr-2">
                                Medium
                            </div>
                            <div class="border p-2 mr-2">
                                Large
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <form method="post">
                        <input type="hidden" name="productID" value="<?php echo $item['productID']??'1';?>">
                        <input type="hidden" name="userID" value="<?php echo 1;?>">


                        <?php 
                        if (in_array($item['productID'], $shoppingCart->getCartID($product->getData('cart')) ?? [])){
                            echo '<button type="submit" disabled name="product_featured" class="btn btn-danger mb-3 disabled">Already in the cart</button>';
                        }
                        else{
                            echo '<button type="submit" name="product_desc" class="btn btn-primary mb-3">Add to cart</button>';
                        }   
                    ?>
                    </form>
                </div>
            </div>
            <hr>

        </div>
        <hr>

    </div>
    <hr>

</section>
<?php
        }}
?>
<?php
?>
<?php include_once 'featured.php';?>




<?php
    include_once 'header_footer/footer.php';
?>