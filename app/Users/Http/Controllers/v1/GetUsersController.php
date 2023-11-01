<?php

namespace App\Users\Http\Controllers\v1;

use App\Common\Http\Responses\JsonResponse;
use Domain\Users\UseCases\GetUsersUseCase;
use OpenApi\Attributes as OA;

#[OA\Get(
    path: "/api/v1/users",
    security: [["Bearer" => []]],
    tags: ["Users"],
)]
#[OA\Response(
    response: 200,
    description: "Success",
    content: new OA\JsonContent(properties: [
        new OA\Property('status', type: 'string', example: 'success'),
        new OA\Property('message', type: 'string', example: 'ok'),
        new OA\Property('data', ref: "#/components/schemas/user"),
    ])
)]
class GetUsersController
{
    public function __invoke(GetUsersUseCase $getUsersUseCase): JsonResponse
    {
        return new JsonResponse(['users' => $getUsersUseCase()]);
    }
}
