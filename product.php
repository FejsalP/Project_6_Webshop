<?php
    include_once 'header_footer/header.php';
?>


<section class="container py-3">
    <div class="row">
        <div class="col-sm-5 pb-5">
            <div>
                <img class="img-fluid" src="images/tshirtA.jpg" alt="Product" srcset="">

            </div>
        </div>
        <div class="col-sm-7 pt-5 text-center justify-content">
            <h4 class="font-size-22">
                Product name
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
                        Price: <span>50KM</spam>
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
                            <input type="text" disabled class="px-1 w-50 border bg-light quantity_input">
                            <button class="qty-up border bg-light">+</button>
                            <button class="qty-up border bg-light">-</button>
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
                    <div class="form-row px-5 font-size-14 text-center">
                        <button class="btn btn-warning form-control">Add to cart
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    include_once 'header_footer/footer.php';
?>