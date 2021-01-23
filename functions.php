<?php

require __DIR__ . '/vendor/autoload.php';

$app = new Atomic\Foundation\Application(__DIR__);

$app->singleton(
    Atomic\Foundation\Http\Kernel::class,
    App\Http\Kernel::class
);

$kernel = $app->make(Atomic\Foundation\Http\Kernel::class);

$kernel->handle(
    $request = Atomic\Http\Request::capture()
);
