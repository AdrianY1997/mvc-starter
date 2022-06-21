<div class="bg-white shadow-c border">
    <div class="container py-2">
        <?php if (Route::getCurrentRoute() != 'dashboard') { ?>
        <div class="d-flex justify-content-between text-white fs-6 fw-bolder">
            <div class="text-dark text-align-start">
                <?= date('Y') ?> &copy; [Title].
            </div>
            <div class="text-dark text-align-end">
                Powered by [Dev]
            </div>
        </div>
        <?php } ?>
        <script>
        $(function() {
            resizeMain()
            if (window.innerWidth <= 400) {
                document.body.style.zoom = 0.90
            }
        })

        $(document).on('resize', function() {
            resizeMain()
        })

        function resizeMain() {
            let headerHeight = ($('#header'))[0].clientHeight;
            let footerHeight = ($('#footer'))[0].clientHeight;
            let totalPX = parseInt(headerHeight) + parseInt(footerHeight);
            let string = 'calc(100vh - ' + totalPX + 'px)'

            <?php if (Route::getCurrentRoute() != 'dashboard') { ?>
            $('#main').css('min-height', string)
            <?php } ?>
        }
        </script>
        <script src="<?= asset('core/bootstrap.bundle.js') ?>"></script>
    </div>
</div>