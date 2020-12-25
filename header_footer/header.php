<?php
    session_start();
?>
<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <title>Webshop</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
    <!-- jQuery -->
    <script src="jquery-3.5.1.js"></script>

    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--Owl carousel -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="./style.css" class="rel">
</head>

<body class="font-roboto">
    <!--Navigation bar -->
    <section class="container my-5" id="containerNav">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item px-2">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="products.php">
                            Products
                        </a>
                    </li>
                    <?php
                        if(isset($_SESSION["userID"])){
                            echo '<li class="nav-item px-2"><a class="nav-link" href="includes/logout.inc.php">Sign out</a></li>';
                        }
                        else {
                            echo '<li class="nav-item px-2"><a class="nav-link" href="signup.php">Sign Up</a></li>';
                            echo '<li class="nav-item px-2"><a class="nav-link" href="login.php">Login</a> </li>';
                        }
                    ?>


                </ul>
            </div>
        </nav>
    </section>
    <!--End of navigation bar -->