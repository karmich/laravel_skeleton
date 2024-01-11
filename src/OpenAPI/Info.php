<?php

namespace OpenAPI;

use OpenApi\Attributes as OA;

#[OA\Info(
    version: "0.0.1",
    title: "App skeleton"
)]
#[OA\SecurityScheme(
    securityScheme: "Bearer",
    type: "apiKey",
    name: "Authorization",
    in: "header"
)]
#[OA\Server(
    url: "http://localhost",
    description: ""
)]
class Info
{

}
