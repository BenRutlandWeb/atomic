<?php

namespace App\Http\Controllers;

use Atomic\Routing\Controller;
use App\Http\Requests\RegisterRequest;

class DummyController extends Controller
{
    /**
     * Return a random Hogwarts house
     *
     * @return string
     */
    public function __invoke(RegisterRequest $request)
    {
        return $request;
    }
}
