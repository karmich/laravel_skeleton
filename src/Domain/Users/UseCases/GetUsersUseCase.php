<?php

namespace Domain\Users\UseCases;

use Illuminate\Database\Eloquent\Collection;
use Models\User\User;

class GetUsersUseCase
{
    public function __invoke(): Collection|array
    {
        return User::all();
    }
}
