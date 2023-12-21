<?php

namespace App\Users\Http\JsonResources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class UserResourceCollection extends ResourceCollection
{
    public static $wrap = null;

    public function toArray($request): array
    {
        return [
            'users' => UserResource::collection($this->collection)
        ];
    }
}
