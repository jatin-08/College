<!-- NAVBAR SECTION START -->


<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-item-center logoIcon" href="<?= BASE ?>">
            <span class="rounded-circle text-center text-white fw-bold">E</span>
            <span class="px-2 fw-bold mt-2 text-dark">COLLEGE</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="<?= BASE ?>">DASHBOARD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="<?= BASE ?>users">USERS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="<?= BASE ?>classes">CLASSES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="<?= BASE ?>tests">TESTS</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link text-dark dropdown-toggle" href="<?= BASE ?>user" id="navbarDropdownMenuLink"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?=Auth::user('firstname')?>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="<?= BASE ?>profile">Pofile</a></li>
                        <li><a class="dropdown-item" href="#">Dashboard</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-center signin-btn ubuntu hover"
                        href="http://localhost/College/public/login">Sign
                        In</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- NAVBAR SECTION END -->