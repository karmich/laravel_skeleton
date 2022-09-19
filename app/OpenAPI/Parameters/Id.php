<?php

namespace App\OpenAPI\Parameters;

use OpenApi\Annotations as OA;

/**
 * @OA\Parameter(
 *     parameter="id_in_path",
 *     name="id",
 *     in="path",
 *     required=true,
 *     @OA\Schema(
 *         type="int"
 *     ),
 * )
 */
class Id
{

}
