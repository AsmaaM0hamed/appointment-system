<?php

namespace App\Graphql\Queries;

use App\Models\User;

class UserQuery
{
    public function getUsers()
    {
        return User::query();
    }
}
