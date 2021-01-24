<?php

namespace App\Providers;

use Atomic\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'after_setup_theme' => [
            \App\Listeners\RegisterMenus::class,
        ],
        'wp_nav_menu_items' => [
            \App\Listeners\MenuAuthItem::class,
        ],
    ];

    /**
     * The subscriber classes to register.
     *
     * @var array
     */
    protected $subscribe = [
        \App\Listeners\EnqueueScripts::class,
    ];
}
