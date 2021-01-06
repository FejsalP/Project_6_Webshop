<?php
include_once 'header_footer/header.php';
?>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['delete_from_cart'])){
            echo "aaa".$_POST['product_id'];
            echo "AAAAAAAAAAAAAA";
            $deletedProduct = $shoppingCart -> deleteFromShoppingCart($_POST['product_id']);
            print_r($deletedProduct);
        }
    }
?>

<!--Begin-->
<section class="py-2">
    <div class="container">
        <h4>Shopping cart</h4>
        <div class="row">
            <div class="col-9">
                <?php
            foreach ($product->getData('cart') as $item):
                $cart = $product->getProduct($item['productID']);
                $subTotal[] = array_map(function($item){

            ?>
                <div class="row border-top py-3">
                    <div class="col-sm-3">
                        <img src="<?php echo $item['productImage']??'images/jacketA.jpg' ?>" class="border"
                            style="height: 150px" alt="Picture">
                    </div>


                    <div class="col-sm-8 pl-5">
                        <h5><?php echo $item['productName'] ?? 'Jacket A'; ?></h5>
                        <div class="quantity d-flex pt-3">
                            <div class="d-flex w-25">
                                <input type="text" data-id="<?php echo $item['productID']??'0'; ?>" value="1" disabled
                                    class="px-1 w-50 border bg-light quantity-input">
                                <button data-id="<?php echo $item['productID']??'0'; ?>"
                                    class="quantity-up border bg-light">+</button>
                                <button data-id="<?php echo $item['productID']??'0'; ?>"
                                    class="quantity-down border bg-light">-</button>

                            </div>
                            <form method="post">
                                <input type="hidden" name="product_id" value="<?php echo $item['productID'] ?? 0;?>">
                                <button type=" submit" name="delete_from_cart"
                                    class="px-2 btn btn-danger">Delete</button>
                            </form>

                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="font-size-20 text-danger">
                            <span data-id="<?php echo $item['productID']??'0'; ?>"
                                class="price"><?php echo $item['productPrice'] ?? '50';?></span> KM
                        </div>
                    </div>

                </div>
                <?php                 
                return $item['productPrice'];

            },$cart); //end of arraymap
                endforeach;
            ?>
            </div>

            <!--Subtotal -->
            <div class="col-3">
                <div class="sub-total text-center">
                    <h6>
                        Total delivery
                    </h6>
                    <div class="py-3 border">
                        <h5>
                            Subtotal (<?php echo isset($subTotal) ? count($subTotal):0;?> items): <span
                                id="total_price"><?php echo isset($subTotal) ? $shoppingCart->findTotal($subTotal):0;?></span>
                            KM
                        </h5>
                        <button class="btn btn-primary">Buy</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>

<!--End-->


<?php
include_once 'header_footer/footer.php';
?>