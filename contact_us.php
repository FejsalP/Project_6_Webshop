<?php
    include_once 'header_footer/header.php';
?>
<div class="d-flex justify-content-center align-items">

</div>
<section class="py-3 d-flex justify-content-center align-items" style="margin-bottom: 110px">


    <form action="contact.php" method="post">
        <div class="row">
            <h5>
                Feel free to contact us if you have any questions.
            </h5>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="form-group"><input type="text" name="fname" placeholder="First name...">
                </div>
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="form-group"><input type="text" name="lname" placeholder="Last name...">
                </div>
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="form-group"><input type="text" name="email" placeholder="Email...">
                </div>
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="form-group"><input type="text" name="subject" placeholder="Subject...">
                </div>
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="form-group"><textarea name="message" id="" cols="21" rows="5"
                        placeholder="Write your message here..."></textarea>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
        <button class="btn btn-primary" style="padding-left: 28px; padding-right:28px; margin-left:120px" type="submit"
            name="submit">Send message</button>

    </form>

</section>
<?php
    include_once 'header_footer/footer.php';
?>