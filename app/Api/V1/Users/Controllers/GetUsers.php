<?php

namespace App\Api\V1\Users\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use OpenApi\Annotations as OA;

/**
 * @OA\Get(
 *     path="/api/users",
 *     tags={"Users"},
 *     @OA\Response(
 *       response="200",
 *       description="Success"
 *     )
 * )
 */
class GetUsers{

    public function __invoke(): JsonResponse
    {
        return response()->json(User::query()->get());
    }

}
