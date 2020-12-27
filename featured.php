<?php
    $featured_products = $product -> getData();
?>

<section id="featured">
    <div class="container text-center">
        <div class="row justify-content-center">
            <?php
                foreach($featured_products as $product){ 
            ?>
            <div class="card" style="width: 18rem;">
                <img src=<?php echo $product["productImage"] ?? "images/jacketA.jpg";?> class="card-img-top"
                    alt="Picture">
                <div class="card-body">
                    <p class="card-text"><?php echo $product["productName"] ?? "Jacket A";?> <br> Price: <span
                            id="featured_item_price"><?php echo $product["productPrice"] ?? "50";?></span> KM</p>
                </div>
            </div>
            <?php
                }
            ?>
        </div>

    </div>

</section>