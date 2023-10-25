<?php

namespace OpenAPI\Parameters;

use OpenApi\Attributes as OA;

#[OA\Parameter(
    parameter: "id_in_path",
    name: "id",
    in: "path",
    required: true
)]
class Id
{

}
