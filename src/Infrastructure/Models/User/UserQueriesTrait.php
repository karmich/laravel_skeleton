<?php

namespace Infrastructure\Models\User;

use Infrastructure\Models\User\Queries\GetById;

trait UserQueriesTrait
{
    public static function getById(int $id)
    {
        return (new GetById())($id);
    }
}
