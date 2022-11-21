<?php

use Illuminate\Support\Facades\Route;

Route::prefix('api/v1/users')
    ->middleware(['api'])
    ->group(function (){
        Route::get('/', \App\Api\V1\Users\Controllers\GetUsers::class);
        Route::get('/{id}', \App\Api\V1\Users\Controllers\GetUserById::class);
    });
