<?php

namespace App\Users\Http\Controllers\v1;

use App\Users\Http\JsonResources\UserResource;
use Domain\Users\UseCases\GetUserByIdUseCase;
use OpenApi\Attributes as OA;

#[OA\Get(
    path: "/api/v1/users/{id}",
    security: [["Bearer" => []]],
    tags: ["Users"],
    parameters: [
        new OA\Parameter(ref: "#/components/parameters/id_in_path_required")
    ]
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
class GetUserByIdController
{
    public function __invoke($id, GetUserByIdUseCase $getUserByIdUseCase)
    {
        return new UserResource($getUserByIdUseCase($id));
    }
}
