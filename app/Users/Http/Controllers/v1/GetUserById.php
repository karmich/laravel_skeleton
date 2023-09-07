<?php

namespace App\Users\Http\Controllers\v1;

use App\Common\Http\Responses\JsonResponse;
use Domain\Users\Actions\GetUserByIdAction;

/**
 * @OA\Get(
 *     path="/api/v1/users/{id}",
 *     tags={"Users"},
 *     security={{"Bearer":{}}},
 *     @OA\Parameter(ref="#/components/parameters/id_in_path"),
 *     @OA\Response(
 *       response="200",
 *       description="Success",
 *       @OA\JsonContent(
 *         @OA\Property(property="status", type="string", example="success"),
 *         @OA\Property(property="message", type="string", example="ok"),
 *         @OA\Property(property="data", ref="#/components/schemas/user")
 *       ),
 *     )
 * )
 */
class GetUserById{

    public function __invoke($id, GetUserByIdAction $getUserByIdAction): JsonResponse
    {
        return new JsonResponse(['users' => $getUserByIdAction($id)]);
    }
}
