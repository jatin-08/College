<!-- Login PAGE -->

<?php

$this->view("includes/header");

?>


<!-- Login Section Start -->

<section class="container" style="min-height:100vh;">
    <div class="row d-flex justify-content-center pt-5">
        <div class="col-10"></div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-10 pb-5 pt-3">
            <div class="card border-0 shadow-sm">
                <div class="row gap-0">
                    <div class="col-md-6">
                        <img src="<?= BASE ?>assests\images\signin-imagee1.jpg" class="img-fluid rounded-start h-100"
                            alt="image">
                    </div>
                    <div class="col-md-6 pt-3">
                        <h4 class="card-header border-0 bg-white text-center">Sign Up
                        </h4>
                        <div class="card-body">
                            <form action="#" autocomplete="off" method="post">
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control"
                                        placeholder="abcd123@gmail.com">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control"
                                        placeholder="At least 6 characters">
                                </div>

                                <div class="mb-3">
                                    <button class="btn btn-primary mx-auto">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Login section End -->





<?php

$this->view("includes/footer");

?>