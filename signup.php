<?php
    include_once 'header_footer/header.php'
?>

<section class="signup-form">


    <div class="container mt-5 text-center ">
        <h2>
            Sign UP
        </h2>
        <?php
    if (isset($_GET["error"])){
        if ($_GET["error"] == "emptyinput"){
            echo "<p>Fill in all the fields!</p>";
        }
        else if ($_GET["error"] == "invalidUsername"){
            echo "<p>Choose a proper username </p>";
        }
        else if ($_GET["error"] == "invalidUsername"){
            echo "<p>Choose a proper username </p>";
        }
        else if ($_GET["error"] == "invalidEmail"){
            echo "<p>Choose a proper email </p>";
        }
        else if ($_GET["error"] == "pass_not_same"){
            echo "<p>Passwords do not match. </p>";
        }
        else if ($_GET["error"] == "usernametaken"){
            echo "<p>Username taken </p>";
        }
        else if ($_GET["error"] == "statementfailed"){
            echo "<p>Something went wrong :( </p>";
        }
        else if ($_GET["error"] == "none"){
            echo "<p>You have successfuly signed up. </p>";
        }
    }

?>
        <form action="includes/signup.inc.php" method="post">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="form-group"><input type="text" name="name" placeholder="Full name...">
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="form-group"><input type="text" name="username" placeholder="Username...">
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="form-group"><input type="email" name="email" placeholder="Email...">
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
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="form-group"><input type="password" name="passwordRepeat"
                            placeholder="Repeat password...">
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Sign Up</button>
        </form>


    </div>

</section>





<?php
include_once 'header_footer/footer.php'
?>