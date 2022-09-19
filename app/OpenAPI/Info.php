<?php

namespace App\OpenAPI;

use OpenApi\Annotations as OA;

/**
 * @OA\Info(
 *     title="Laravel skeleton",
 *     version="0.0.1"
 * )
 *
 * @OA\SecurityScheme(
 *     type="apiKey",
 *     in="header",
 *     securityScheme="Bearer",
 *     name="Authorization"
 * )
 *
 * @OA\Server(
 *     url="http://localhost",
 *     description=""
 * )
 */
class Info
{

}
