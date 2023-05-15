<!-- SIGN UP PAGE -->

<?php

$this->view("includes/header");
$this->view("includes/nav");

// print_r($errors);

?>


<!-- Sign Up Section Start -->

<section class="container" style="min-height:100vh;">
    <div class="row d-flex justify-content-center pt-5">
        <div class="col-10"></div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-10 pb-5 pt-3">
            <div class="card border-0 shadow-sm">
                <div class="row gap-0">
                    <div class="col-md-6">
                        <img src="<?= BASE ?>assests\imageS\signin-image.jpg" class="img-fluid rounded-start h-100"
                            alt="image">
                    </div>
                    <div class="col-md-6 pt-3">
                        <h4 class="card-header border-0 bg-white text-center">Sign Up
                        </h4>
                        <div class="card-body">
                            <?php if (count($errors) > 0): ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Errors: </strong>
                                    <?php foreach ($errors as $errors): ?>
                                        <br>
                                        <?= $errors ?>
                                    <?php endforeach; ?>
                                    <span type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></span>
                                </div>
                            <?php endif; ?>


                            <form action="#" autocomplete="off" method="post">

                                <div class="mb-3">
                                    <label class="form-label">First Name</label>
                                    <input type="text" name="firstname" value="<?= get_var('firstname') ?>"
                                        class="form-control" placeholder="Enter your First Name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" value="<?= get_var('lastname') ?>" name="lastname"
                                        class="form-control" placeholder="Enter your Last Name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" value="<?= get_var('email') ?>" name="email"
                                        class="form-control" placeholder="abcd123@gmail.com">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Gender</label>
                                    <select class="form-control" name="gender">
                                        <option <?= get_select('gender', '') ?> value="">---Select a Gender---</option>
                                        <option <?= get_select('gender', 'male') ?> value="male">Male</option>
                                        <option <?= get_select('gender', 'female') ?> value="female">Female</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Rank</label>
                                    <select class="form-control" name="rank">
                                        <option <?= get_select('rank', '') ?> value="">---Select a Rank---</option>
                                        <option <?= get_select('rank', 'student') ?> value="student">Student</option>
                                        <option <?= get_select('rank', 'reception') ?> value="reception">Reception
                                        </option>
                                        <option <?= get_select('rank', 'lecturer') ?> value="lecturer">Lecturer</option>
                                        <option <?= get_select('rank', 'admin') ?> value="admin">Admin</option>
                                        <option <?= get_select('rank', 'super_admin') ?> value="super_admin">Super Admin
                                        </option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" value="<?= get_var('password') ?>"
                                        class="form-control" placeholder="At least 6 characters">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" name="confirmpassword"
                                        value="<?= get_var('confirmpassword') ?>" class="form-control"
                                        placeholder="At least 6 characters">
                                </div>

                                <div class="mb-3">
                                    <button type="button" class="btn btn-danger">Cancel</button>
                                    <button type="submit" class="btn btn-primary float-end">Add
                                        Users</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sign Up section End -->





<?php

$this->view("includes/footer");

?>