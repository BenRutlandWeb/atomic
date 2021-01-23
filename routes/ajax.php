<?php

use Atomic\Support\Facades\Ajax;

Ajax::get('dummy_action', \App\Http\Controllers\DummyController::class)->name('dummy');
