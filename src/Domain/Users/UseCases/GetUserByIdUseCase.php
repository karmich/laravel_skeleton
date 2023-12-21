<?php

namespace Domain\Users\UseCases;

use Illuminate\Database\Eloquent\Model;
use Infrastructure\Models\User\User;

class GetUserByIdUseCase
{
    public function __invoke($userId): Model|User|null
    {
        return User::query()
            ->where('id',$userId)
            ->first();
    }
}
