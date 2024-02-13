<?php

Route::prefix('api/v1/test')
    ->group(function (){
        Route::get('/', \App\Test\Http\Controllers\TestController::class);
    });
