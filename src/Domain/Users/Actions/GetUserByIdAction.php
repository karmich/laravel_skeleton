<?php

namespace Domain\Users\Actions;

use App\Users\Models\User;
use Domain\Users\Repositories\UserRepository;

class GetUserByIdAction
{
    public function __construct(
        public UserRepository $userRepository
    )
    {
    }

    public function __invoke($userId): User|null
    {
        return $this->userRepository->getUser($userId);
    }
}
