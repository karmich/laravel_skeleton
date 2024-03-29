<?php

namespace Models\User\User\Queries;

use Illuminate\Database\Eloquent\Model;
use Models\User\User;

class GetById
{
    public function __invoke__(int $id): Model|User|null
    {
        return User::query()
            ->where('id', $id)
            ->first()
        ;
    }
}
