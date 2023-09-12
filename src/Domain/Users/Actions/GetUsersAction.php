<?php

namespace Domain\Users\Actions;

use Domain\Users\Repositories\UserRepository;
use Illuminate\Database\Eloquent\Collection;

class GetUsersAction
{
    public function __invoke(UserRepository $userRepository): Collection
    {
        return $userRepository->getUsers();
    }
}
