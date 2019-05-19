<?php

require __DIR__ . '/vendor/autoload.php';

$app = new Aristides\App;
$app->setRenderer(new Aristides\Renderer\PHPRenderer);

// Arquivo de rotas
require __DIR__ . '/router.php';

$app->run();