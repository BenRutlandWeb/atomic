<?php

namespace App\Listeners;

class RegisterMenus
{
    /**
     * Handle the event.
     *
     * @return void
     */
    public function handle(): void
    {
        register_nav_menus([
            'primary_menu' => __('Primary Menu'),
        ]);
    }
}
