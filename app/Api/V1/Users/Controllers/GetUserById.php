<?php

namespace App\Api\V1\Users\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use OpenApi\Annotations as OA;

/**
 * @OA\Get(
 *     path="/api/v1/users/{id}",
 *     tags={"Users"},
 *     @OA\Parameter(ref="#/components/parameters/id_in_path"),
 *     @OA\Response(
 *       response="200",
 *       description="Success"
 *     )
 * )
 */
class GetUserById{

    public function __invoke($id): JsonResponse
    {
        return response()->json(User::query()->findOrFail($id));
    }

}
