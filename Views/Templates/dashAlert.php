<div class="position-fixed bottom-0 dsh-alert start-0" style="width: -webkit-fill-available;">
    <?php foreach ($message as $m) { ?>
    <?php if (isset($m['error'])) { ?>
    <div class="m-0 alert alert-warning alert-dismissible fade show" role="alert">
        <?= $m['error'] ?>
        <button type="button" class="btn-close alert-dsh-btn" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php } ?>
    <?php if (isset($m['success'])) { ?>
    <div class="m-0 alert alert-success alert-dismissible fade show" role="alert">
        <?= $m['success'] ?>
        <button type="button" class="btn-close alert-dsh-btn" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php } ?>
    <?php } ?>
    <script>
    $(function() {
        $('.dsh-alert').addClass($('.dsh-content').attr('class'))
    })

    $('.alert-dsh-btn').click(function() {
        console.log(this)
        $('.dsh-alert').animate({
            opacity: "0"
        }, 1000, function() {
            $('.dsh-alert').remove()
        })
    })
    </script>
</div>