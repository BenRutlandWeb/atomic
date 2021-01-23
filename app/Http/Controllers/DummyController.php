<?php

namespace App\Http\Controllers;

use Atomic\Http\Request;
use Atomic\Routing\Controller;

class DummyController extends Controller
{
    /**
     * Return a random Hogwarts house
     *
     * @return string
     */
    public function __invoke(Request $request)
    {
        return $request;
    }
}
