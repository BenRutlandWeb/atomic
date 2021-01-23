<?php

namespace App\Providers;

use Atomic\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Atomic\Support\Facades\Ajax;
use Atomic\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your api routes.
     *
     * @var string
     */
    protected $namespace = 'api';

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map(): void
    {
        $this->mapAjaxRoutes();
        $this->mapApiRoutes();
    }

    /**
     * Define the "ajax" routes for the application.
     *
     * @return void
     */
    public function mapAjaxRoutes(): void
    {
        Ajax::middleware('ajax')
            ->group(base_path('routes/ajax.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    public function mapApiRoutes(): void
    {
        Route::namespace($this->namespace)
            ->middleware('api')
            ->group(base_path('routes/api.php'));
    }
}
