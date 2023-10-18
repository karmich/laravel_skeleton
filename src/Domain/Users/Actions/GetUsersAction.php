<?php

namespace Domain\Users\Actions;

use Domain\Users\Repositories\UserRepository;
use Illuminate\Database\Eloquent\Collection;

class GetUsersAction
{
    public function __construct(
        public UserRepository $userRepository
    )
    {
    }

    public function __invoke(): Collection
    {
        return $this->userRepository->getUsers();
    }
}
