<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function (): void {
    $this->comment('FitFreak Pro');
})->purpose('Display the application name');
