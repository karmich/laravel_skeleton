<?php

namespace App\Domain\Users\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;

class GetUsers{

    public function __invoke(): JsonResponse
    {
        return response()->json(User::query()->get());
    }

}
