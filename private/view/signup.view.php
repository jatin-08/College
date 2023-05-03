<!-- SIGN UP PAGE -->

<?php

$this->view("includes/header");

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
                            <form action="#" autocomplete="off" method="post">

                                <div class="mb-3">
                                    <label class="form-label">First Name</label>
                                    <input type="text" name="firstname" class="form-control"
                                        placeholder="Enter your First Name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" name="lastname" class="form-control"
                                        placeholder="Enter your Last Name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control"
                                        placeholder="abcd123@gmail.com">
                                </div>
                                <div class="mb-3">
                                <label class="form-label">Gender</label>
                                    <select class="form-control">
                                        <option value="">---Select a Gender---</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                <label class="form-label">Rank</label>
                                    <select class="form-control">
                                        <option value="">---Select a Rank---</option>
                                        <option value="student">Student</option>
                                        <option value="reception">Reception</option>
                                        <option value="lecturer">Lecturer</option>
                                        <option value="admin">Admin</option>
                                        <option value="super_admin">Super Admin</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control"
                                        placeholder="At least 6 characters">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" name="conpassword" class="form-control"
                                        placeholder="At least 6 characters">
                                </div>
                                
                                <div class="mb-3">
                                    <button class="btn btn-danger">Cancel</button>
                                    <button class="btn btn-primary float-end">Add Users</button>
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