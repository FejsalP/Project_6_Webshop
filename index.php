<?php
    include_once 'header_footer/header.php';
    //include_once 'includes/product.php';
     if(isset($_SESSION["userID"])){
            echo '<h4 class="text-center">Hello there :)  </h4>';
    }
?>

<h2 class="text-center py-5">
    Welcome to my webshop
</h2>

<?php 
    if(!isset($_SESSION["userID"])){
     echo   '<div class="text-center container py-5">
            <h4>
                <p>
                    Please sign up or login to see more items and be able to purchase the ones you like.
                    Below you can find some of our cheapest items.
                </p>
            </h4>
            <input type="button" onclick="location.href=\'signup.php\'" value="Sign up" class="btn btn-primary" />
            <input type="button" onclick="location.href=\'login.php\'" value="Login" class="btn btn-primary" />

        </div>';
    }
?>


<?php
    include_once 'featured.php';
?>







<?php
        include_once 'header_footer/footer.php'
?>