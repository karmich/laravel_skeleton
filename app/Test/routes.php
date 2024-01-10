<?php

Route::prefix('api/v1/test')
    ->group(function (){
        Route::post('/', \App\Test\Http\Controllers\TestController::class);
    });
