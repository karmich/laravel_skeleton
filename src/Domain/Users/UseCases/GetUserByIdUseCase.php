<?php

namespace Domain\Users\UseCases;

use Illuminate\Database\Eloquent\Model;
use Infrastructure\Models\User;
use Infrastructure\Repositories\UserRepository;

class GetUserByIdUseCase
{
    public function __construct(
        public UserRepository $userRepository
    )
    {
    }

    public function __invoke($userId): Model|User|null
    {
        return $this->userRepository->getUser($userId);
    }
}
