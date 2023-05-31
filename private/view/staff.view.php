<!-- STAFF PAGE -->

<?php

$this->view("includes/header");
$this->view("includes/nav");

// print_r($errors);

// print_r($rows);

?>

<!-- Staff Section Start -->

<section class="container-fluid my-5 p-2 shadow mx-auto" style="max-width: 1000px">
    <div class="container">
        <h1 class="fs-4 text-center mb-3">STAFF DETAILS</h1>
        <div class="row mt-3 d-flex justify-content-between align-item-center">
            <?php if ($rows): ?>
                <?php foreach ($rows as $row): ?>
                    <div class="card" style="width: 14rem;">
                        <img src="<?= ASSEST ?>/images\logo.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $row->firstname; ?> <?= $row->lastname; ?>
                            </h5>
                            <p class="card-text fs-6">Rank: <?= $row->rank ?></p>
                            <a href="#" class="btn btn-primary">View Profile</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <h4>No staff members were found at this time</h4>
            <?php endif; ?>
        </div>
    </div>

</section>

<!-- Staff Section End -->




<?php

$this->view("includes/footer");

?>