<?php

namespace App\Providers;

use Atomic\Support\ServiceProvider;

class ShortcodeServiceProvider extends ServiceProvider
{
    /**
     * The shortcodes
     *
     * @var array
     */
    public $singletons = [];

    /**
     * Boot the shortcodes
     *
     * @return void
     */
    public function boot(): void
    {
        foreach ($this->singletons as $abstract) {
            $this->app->make($abstract)->register();
        }
    }
}
