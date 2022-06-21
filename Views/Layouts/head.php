<title><?= isset($title) ? $title : constant('TITLE') ?></title>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS -->
<?php if (Route::getCurrentRoute() == 'dashboard') { ?>
<link rel="stylesheet" href="<?= asset('css/dashboard.css') ?>">
<?php } ?>
<link rel="stylesheet" href="<?= asset('css/default.css') ?>">
<link rel="stylesheet" href="<?= asset('css/custom.css') ?>">
<link rel="stylesheet" href="<?= asset('css/error.css') ?>">
<link rel="stylesheet" href="<?= asset('core/bootstrap.css') ?>">

<!-- SCRIPT -->
<script src="<?= asset('core/fontawesome.js') ?>"></script>
<script src="<?= asset('core/jquery-3.6.0.min.js') ?>"></script>

<?php if (Route::getCurrentRoute() == 'dashboard') { ?>
<!-- Quill Editor -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.js"></script>

<!-- Theme included stylesheets -->
<link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">

<!-- Main Quill library -->
<script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
<?php } ?>