<?php
    include_once 'header_footer/header.php'
?>

<section class="signup-form py-5">

    <div class="container mt-5 text-center ">
        <h2>
            Login
        </h2>
        <?php
    if (isset($_GET["error"])){
        if ($_GET["error"] == "emptyinput"){
            echo "<p>Fill in all the fields!</p>";
        }
        else if ($_GET["error"] == "wronglogin"){
            echo "<p>Username or email is not correct </p>";
        }
        else if ($_GET["error"] == "wronglogininfo"){
            echo "<p>Password is not correct </p>";
        }
    }

?>
        <form action="includes/login.inc.php" method="post">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="form-group"><input type="text" name="name" placeholder="Username or Email...">
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="form-group"><input type="password" name="password" placeholder="Password...">
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Log In</button>
        </form>


    </div>

</section>
<div class="mb-5 pb-5"></div>
<div class="mb-5 pb-5"></div>
<div class="mb-5 pb-3"></div>
<div class="mb-5 pb-3"></div>


<?php
include_once 'header_footer/footer.php'
?>