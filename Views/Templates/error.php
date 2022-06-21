<div class="container position-relative">
    <div class="text-center">
        <div class="fw-bold m-5">
            <p><?= constant('TITLE') ?></p>
        </div>
        <div class="fs-1 fw-bold m-5">
            <p class="fs-1">Error | <?= $code ?></p>
        </div>
        <div class="fs-6">
            <?= $message ?>
        </div>
        <div class="m-5">
            <a class="btn btn-primary" href="<?= route(constant('HOME')) ?>">Inicio</a>
        </div>
        <div class="fs-5 m-5">
            <span class="m-2">
                <a class="text-dark" href="#"><i class="fa-brands fa-facebook"></i></a>
            </span>
            <span class="m-2">
                <a class="text-dark" href="#"><i class="fa-brands fa-instagram"></i></a>
            </span>
            <span class="m-2">
                <a class="text-dark" href="#"><i class="fa-brands fa-twitter"></i></a>
            </span>
        </div>
    </div>
</div>