<?php

namespace OpenAPI\Schemas;

use OpenApi\Attributes as OA;

#[OA\Schema(
    schema: "user",
    properties: [
        new OA\Property(property: 'id', example: 1),
        new OA\Property(property: 'name', example: 1),
        new OA\Property(property: 'email', example: 1),
        new OA\Property(property: 'created_at', example: 1),
        new OA\Property(property: 'updated_at', example: 1),
    ]
)]
class User
{

}
