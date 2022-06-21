<?php
if (isset($message)) {
?>
<div class="fixed-bottom messages">
    <?php
        foreach ($message as $m) {
            if (array_key_exists('success', $m)) {
        ?>
    <div class="alert bg-success alert-dismissible fade show m-0" role="alert">
        <?= $m['success'] ?>
        <div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    <?php
            }
            if (array_key_exists('error', $m)) {
            ?>
    <div class="alert bg-warning alert-dismissible fade show m-0" role="alert">
        <strong>Ha ocurrido un error!</strong> <?= $m['error'] ?>.
        <div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    <?php
            }
        }
        ?>
    <script>
    setTimeout(() => {
        $('.messages').animate({
            opacity: '0'
        }, 1000, function() {
            $('.messages').remove()
        })
    }, 3 * 1000);
    </script>
</div>
<?php
}