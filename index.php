<?php
    include_once 'header_footer/header.php'
?>

<?php
     if(isset($_SESSION["userID"])){
            echo '<p>Hello there :)</p>';
    }
?>

<h2 class="text-center py-5">
    Welcome to my webshop
</h2>

<div id="about_us" class="justify-content-center container">
    <h4>
        About us
    </h4>
    <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium tempora optio ab voluptas quaerat, labore
        eaque possimus! Quam amet est repellendus ea animi exercitationem et consequatur quaerat aliquam reprehenderit
        eligendi doloribus cum iure minima quis, aut, maiores voluptatum assumenda aperiam quia ratione soluta ab
        repudiandae! Rerum nam numquam pariatur, aliquam, asperiores nulla, cumque blanditiis et maxime odit ex unde
        quia
        deserunt iusto explicabo voluptatum fuga ducimus assumenda quidem hic vel odio doloremque? Fugiat quibusdam
        provident facere nesciunt, deserunt minima quaerat ad accusantium quisquam! Voluptate doloribus, repellat
        deserunt
        quas voluptatum rerum quasi porro amet eius mollitia molestiae totam ut ipsa cum?
    </p>
</div>


<?php
include_once 'featured.php';
?>

<div class="text-center container py-5">
    <h4>
        <p>
            Please sign up or login to continue
        </p>
    </h4>
    <input type="button" onclick="location.href='signup.php'" value="Sign up" class="btn btn-primary" />
    <input type="button" onclick="location.href='login.php'" value="Login" class="btn btn-primary" />

</div>



<?php
        include_once 'header_footer/footer.php'
?>