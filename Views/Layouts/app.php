<!DOCTYPE html>
<html lang="es">

<head>
    <?php require 'views/layouts/head.php' ?>
</head>

<body class="bg-whitesmoke" style="min-width: 400px;">
    <div id="header">
        <?php require 'views/layouts/header.php' ?>
    </div>

    <div id="main">
        <?php require 'views/' . $name . '.php' ?>
    </div>

    <div id="footer">
        <?php require 'views/layouts/footer.php' ?>
    </div>
</body>

</html>