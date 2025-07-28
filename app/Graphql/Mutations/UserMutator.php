<?php

namespace App\Graphql\Mutations;

use App\Models\User;

class UserMutator
{
    public function update($root, $args)
    {
        $data=$args["input"];
        if (isset($data['id'])) {
            $user = User::find($data['id']);
            $user->update([
                "name"=>$data["name"],
                "email"=>$data["email"],
                "password"=>bcrypt($data["password"]),
                "role"=>$data["role"]
            ]);
            return $user;
        } else {
            return User::create([
                "name"=>$data["name"],
                "email"=>$data["email"],
                "password"=>bcrypt($data["password"]),
                "role"=>$data["role"]
            ]);
        }
    }
}
