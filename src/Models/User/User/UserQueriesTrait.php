<?php

namespace Models\User\User;

use Models\User\User\Queries\GetById;

trait UserQueriesTrait
{
    public static function getById(int $id)
    {
        return (new GetById())($id);
    }
}
