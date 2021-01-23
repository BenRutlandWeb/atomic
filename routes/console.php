<?php

use Atomic\Support\Facades\Console;

Console::command('inspire', function () {
    $this->success('test');
})->describe('Display an inspiring quote');
