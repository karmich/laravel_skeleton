<?php

namespace App\Test\Http\Controllers;

use Http\Requests\BaseRequest;

class TestController
{
    public function __invoke(BaseRequest $request)
    {
        $data = $request->asStdClass();

        return response()->json([
            'echo' => $data
        ]);
    }
}
