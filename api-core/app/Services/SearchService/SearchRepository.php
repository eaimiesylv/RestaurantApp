<?php

namespace App\Services\UserService;
use App\Models\User;

class UserRepository
{
   
    public function allUsers()
    {  
      
        return User::all();

    }
    public function createUser($all)
    {  

        return User::create($all);

    }
    public function updateUser($request, $user){
        
        $user->update($request);
        return $user;
        

    }
      
}
