<?php

namespace Domain\Users\Actions;

use App\Users\Models\User;
use Domain\Users\Repositories\UserRepository;

class GetUserByIdAction
{
    public function __invoke($userId, UserRepository $userRepository): User|null
    {
        return $userRepository->getUser($userId);
    }
}
