<?php

namespace Domain\Users\UseCases;

use Illuminate\Database\Eloquent\Collection;
use Infrastructure\Repositories\UserRepository;

class GetUsersUseCase
{
    public function __construct(
        public UserRepository $userRepository
    )
    {
    }

    public function __invoke(): Collection|array
    {
        return $this->userRepository->getUsers();
    }
}
