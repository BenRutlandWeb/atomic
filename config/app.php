<?php

return [

    'key' => env('AUTH_KEY'),

    'asset_url' => get_template_directory_uri() . '/assets/',

    'providers' => [

        // Atomic providers
        \Atomic\Auth\AuthServiceProvider::class,
        \Atomic\Console\ConsoleServiceProvider::class,
        \Atomic\Filesystem\FilesystemServiceProvider::class,
        \Atomic\Mail\MailServiceProvider::class,
        \Atomic\View\ViewServiceProvider::class,
        \Atomic\WordPress\WordPressServiceProvider::class,

        // app providers
        \App\Providers\EventServiceProvider::class,
        \App\Providers\RouteServiceProvider::class,
        \App\Providers\ShortcodeServiceProvider::class,

    ],

    'aliases' => [
        'App'        => \Atomic\Support\Facades\App::class,
        'Action'     => \Atomic\Support\Facades\Action::class,
        'Ajax'       => \Atomic\Support\Facades\Ajax::class,
        'Arr'        => \Atomic\Support\Arr::class,
        'Auth'       => \Atomic\Support\Facades\Auth::class,
        'Collection' => \Atomic\Support\Collection::class,
        'Config'     => \Atomic\Support\Facades\Config::class,
        'Console'    => \Atomic\Support\Facades\Console::class,
        'Event'      => \Atomic\Support\Facades\Event::class,
        'Filter'     => \Atomic\Support\Facades\Filter::class,
        'Hash'       => \Atomic\Support\Hash::class,
        'Mail'       => \Atomic\Support\Facades\Mail::class,
        'Route'      => \Atomic\Support\Facades\Route::class,
        'Request'    => \Atomic\Support\Facades\Request::class,
        'Str'        => \Atomic\Support\Str::class,
        'Url'        => \Atomic\Support\Facades\Url::class,
        'View'       => \Atomic\Support\Facades\View::class,
    ],
];
