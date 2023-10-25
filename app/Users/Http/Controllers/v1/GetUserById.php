<?php

namespace App\Users\Http\Controllers\v1;

use App\Common\Http\Responses\JsonResponse;
use Domain\Users\Actions\GetUserByIdAction;

use OpenApi\Attributes as OA;

#[OA\Get(
    path: "/api/v1/users/{id}",
    security: [["Bearer" => []]],
    tags: ["Users"],
    parameters: [
        new OA\Parameter(ref: "#/components/parameters/id_in_path")
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
class GetUserById
{
    public function __invoke($id, GetUserByIdAction $getUserByIdAction): JsonResponse
    {
        return new JsonResponse(['user' => $getUserByIdAction($id)]);
    }
}
