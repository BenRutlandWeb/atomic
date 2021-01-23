<?php

namespace App\Http;

use Atomic\Foundation\Http\Kernel as BaseKernel;

class Kernel extends BaseKernel
{
    /**
     * The application's middleware stack.
     *
     * @var array
     */
    protected $middleware = [];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'api' => [],
        'ajax' => [],
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
    ];
}
