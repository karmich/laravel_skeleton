<?php

namespace App\Users\Http\Controllers\v1;

use App\Common\Http\Responses\JsonResponse;
use Domain\Users\Actions\GetUsersAction;

/**
 * @OA\Get(
 *     path="/api/v1/users",
 *     tags={"Users"},
 *     security={{"Bearer":{}}},
 *     @OA\Response(
 *       response="200",
 *       description="Success",
 *       @OA\JsonContent(
 *         @OA\Property(property="status", type="string", example="success"),
 *         @OA\Property(property="message", type="string", example="ok"),
 *         @OA\Property(property="data", type="array", @OA\Items(ref="#/components/schemas/user"))
 *       ),
 *     )
 * )
 */
class GetUsers{

    public function __invoke(GetUsersAction $getUsersAction): JsonResponse
    {
        return new JsonResponse(['user' => $getUsersAction()]);
    }

}
