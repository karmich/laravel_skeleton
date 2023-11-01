<?php

namespace Infrastructure\Repositories;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Infrastructure\Models\User;

class UserRepository
{
    public function getQuery(): Builder
    {
        return User::query();
    }

    public function getUsers(): Collection|array
    {
        return $this->getQuery()->get();
    }

    public function getUser($id): Model|User|null
    {
        return $this->getQuery()->find($id);
    }
}
