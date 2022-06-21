<?php

require_once 'vendor/autoload.php';

require_once 'Libs/Core/ServiceProvider.php';

require_once 'Libs/Core/Application.php';

ServiceProvider::load();

$app = new Application();

return $app;