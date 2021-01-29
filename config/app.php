<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Atomic hash service to add a "pepper" to the hash.
    |
    */
    'key' => env('AUTH_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Asset Directory
    |--------------------------------------------------------------------------
    |
    | This directory is used by the URL generator when creating asset URLs.
    |
    */
    'asset_url' => 'assets',

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */
    'providers' => [

        /**
         * Atomic framework service providers
         */
        \Atomic\Auth\AuthServiceProvider::class,
        \Atomic\Console\ConsoleServiceProvider::class,
        \Atomic\Filesystem\FilesystemServiceProvider::class,
        \Atomic\Http\FormRequestServiceProvider::class,
        \Atomic\Mail\MailServiceProvider::class,
        \Atomic\View\ViewServiceProvider::class,
        \Atomic\Validation\ValidationServiceProvider::class,
        \Atomic\WordPress\WordPressServiceProvider::class,

        /**
         * Theme service providers
         */
        \App\Providers\EventServiceProvider::class,
        \App\Providers\RouteServiceProvider::class,
        \App\Providers\ShortcodeServiceProvider::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */
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
        'File'       => \Atomic\Support\Facades\File::class,
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
