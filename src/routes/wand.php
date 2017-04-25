<?php

use Illuminate\Foundation\Inspiring;

Artisan::command('inspires', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');
