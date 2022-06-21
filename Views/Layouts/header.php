<?php if (Route::getCurrentRoute() != "dashboard") { ?>
<nav class="navbar navbar-light bg-white shadow-c">
    <div class="container d-flex">
        <div class="d-flex">
            <a href="<?= route(constant('HOME')) ?>" class="navbar-brand position-relative logo text-family-poppins"
                style="background-image: url(<?= asset('img/static/logo-img.png') ?>);">
                <span class="fw-bolder shadow-text-white">[Name]</span>
            </a>
            <div class="d-flex m-0 align-items-center">
                <span class="nav-item px-2">
                    <a href="#" class="text-decoration-none text-inherit">Link 1</a>
                </span>
                <span class="nav-item px-2">
                    <a href="#" class="text-decoration-none text-inherit">Link 2</a>
                </span>
            </div>
        </div>
        <div class="d-flex">
            <div class="d-flex m-0 align-items-center">
                <span class="nav-item px-2">
                    <a class="text-decoration-none text-inherit" href="<?= route('about') ?>"><i
                            class="fa-solid fa-circle-info"></i></a>
                </span>
                <span class="nav-item px-2 position-relative">
                    <a class="text-decoration-none text-inherit" id="navbar-user" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i>
                    </a>
                    <div class="dropdown-menu position-absolute navbar-user-dropdown ms-auto">
                        <?php if (Auth::check()) { ?>
                        <span>
                            <a href="<?= route('dashboard') ?>" class="text-decoration-none dropdown-item">Dashboard</a>
                        </span>
                        <span>
                            <a href="<?= route('logout') ?>" class="text-decoration-none dropdown-item text-red">Log
                                Out</a>
                        </span>
                        <?php } else { ?>
                        <span>
                            <a href="<?= route('login') ?>" class="text-decoration-none dropdown-item">Log In</a>
                        </span>
                        <?php } ?>
                    </div>
                </span>
            </div>
        </div>
    </div>
</nav>
<?php } ?>