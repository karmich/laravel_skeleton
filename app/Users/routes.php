<?php

Route::prefix('api/v1/users')
    ->middleware(['auth:api'])
    ->group(function (){
        Route::get('/', \App\Users\Http\Controllers\v1\GetUsersController::class);
        Route::get('/{id}', \App\Users\Http\Controllers\v1\GetUserByIdController::class);
    });
