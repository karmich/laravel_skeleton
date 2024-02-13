<?php

namespace App\Test\Http\Controllers;

use Http\Requests\BaseRequest;
use Illuminate\Http\JsonResponse;
use Models\User\User;

use OpenApi\Attributes as OA;

#[OA\Get(
    path: "/api/v1/test",
    security: [["Bearer" => []]],
    tags: ["Test"],
)]
#[OA\Response(
    response: 200,
    description: "Success"
)]
class TestController
{
    public function __invoke(BaseRequest $request): JsonResponse
    {
        $user = User::query()->with('ph')->findOrFail(1);
        $user->load('ph');

        return response()->json([
            'user' => $user
        ]);
    }
}
