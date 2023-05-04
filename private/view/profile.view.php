<!-- Profile Page -->

<?php

$this->view("includes/header");
$this->view("includes/nav");

?>


<!-- Profile Section Start -->

<section class="container-fluid my-5 p-2 shadow mx-auto" style="max-width: 1000px">
    <div class="container">

        <div class="row mt-3">

            <h1 class="text-center fw-bold fs-4 mb-3">PROFILE DETAILS</h1>
            <div class="offset-1 col-md-3">
                <img src="<?= ASSEST ?>/images/logo.svg" alt="image" class="border border-dark rounded-circle"
                    style="width: 150px">
                <h3 class="fs-4 ms-3">Jatin Yadav</h3>
            </div>
            <div class="col-md-8 bg-light">
                <table class="table table-hover table-border border-dark">
                    <tr>
                        <th>
                            First Name:
                        </th>
                        <td>
                            Jatin
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Last Name:
                        </th>
                        <td>
                            Yadav
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Gender
                        </th>
                        <td>
                            Male
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Date
                        </th>
                        <td>
                            2023/08/08
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <br>
        <hr>
        <div class="row">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Basic Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Classes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tests</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <nav class="navbar navbar-light bg-light">
                <form class="container-fluid">
                    <div class="input-group w-50">
                        <span class="input-group-text" id="basic-addon1"><i
                                class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                            aria-describedby="basic-addon1">
                    </div>
                </form>
            </nav>
        </div>
    </div>

</section>

<!-- Profile Section End -->

<?php

$this->view("includes/footer");

?>