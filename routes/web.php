<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    Debugbar::info('Some information');
    Debugbar::error('Something went wrong');
    Debugbar::warning('Watch out!');
    Debugbar::addMessage('Another message', 'mylabel');

    return view('welcome');
});

$var = function () {
    return true;
};

Route::get('/test', function (): void {});
