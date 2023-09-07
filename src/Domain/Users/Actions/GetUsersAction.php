<?php

namespace Domain\Users\Actions;

use App\Users\Models\User;

class GetUsersAction
{
    public function __invoke()
    {
        return User::query()->get();
    }
}
