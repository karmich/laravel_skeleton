<?php

namespace App\Test\Http\Controllers;

use Http\Requests\BaseRequest;
use Illuminate\Http\JsonResponse;

class TestController
{
    public function __invoke(BaseRequest $request): JsonResponse
    {
        $data = $request->asStdClass();

        return response()->json([
            'echo' => $data
        ]);
    }
}
