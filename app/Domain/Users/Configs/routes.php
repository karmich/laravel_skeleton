<?php

use Illuminate\Support\Facades\Route;

Route::prefix('api/users')
    ->group(function (){
        Route::get('/', \App\Domain\Users\Controllers\GetUsers::class);
        Route::get('/{id}', \App\Domain\Users\Controllers\GetUserById::class);
    });
