<?php

namespace App\Listeners;

use Atomic\Auth\AuthManager;

class MenuAuthItem
{
    protected $auth;

    /**
     * Create the event listener.
     */
    public function __construct(AuthManager $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle the event.
     *
     * @param string $event
     * @return string
     */
    public function handle(string $items): string
    {
        if ($this->auth->check()) {
            $items .= '<li class="group relative">';
            $items .= $this->auth->user()->display_name;
            $items .= '<ul class="sub-menu hidden group-hover:grid absolute top-full -right-4 bg-white rounded shadow">';
            $items .= '<li><a class="hover:bg-steel-200 py-2 px-4 block" href="' . url()->admin() . '">' . __('Dashboard') . '</a></li>';
            $items .= '<li><a class="hover:bg-steel-200 py-2 px-4 block" href="' . url()->logout('/') . '">' . __('Logout') . '</a></li>';
            $items .= '</ul>';
            $items .= '</li>';
        } else {
            $items .= '<li><a href="' . url()->login('/') . '">' . __('Login') . '</a></li>';
        }

        return $items;
    }
}
