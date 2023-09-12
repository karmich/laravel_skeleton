<?php

namespace Domain\Users\Repositories;

use App\Users\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class UserRepository
{
    public function getUsers(): Collection|array
    {
        return User::query()->get();
    }

    public function getUser($id): Model|User|null
    {
        return User::query()->find($id);
    }
}
