<?php

namespace App\Test\Http\Controllers;

use Illuminate\Http\Request;

class TestController
{
    public function __invoke(Request $request)
    {
        $data = $request->all();

        return response()->json([
            'echo' => $data
        ]);
    }
}
