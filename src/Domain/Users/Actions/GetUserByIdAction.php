<?php

namespace Domain\Users\Actions;

use App\Users\Models\User;

class GetUserByIdAction
{
    public function __invoke($userId)
    {
        return User::query()->find($userId);
    }
}
