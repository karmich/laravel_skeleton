<?php

namespace Domain\Users\UseCases;

use Illuminate\Database\Eloquent\Collection;
use Infrastructure\Models\User;

class GetUsersUseCase
{
    public function __invoke(): Collection|array
    {
        return User::query()->get();
    }
}
