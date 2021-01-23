<?php

use Atomic\Support\Facades\Route;

Route::get('dummy/route', \App\Http\Controllers\DummyController::class)->name('dummy');
