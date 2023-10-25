<?php

namespace App\Services\AuthService;
use App\Services\AuthService\AuthRepository;
use Illuminate\Http\Request;

use App\Models\User;

class AuthRepository
{
   
   
    public function findUser($request)
    {  
            
              return User::where('email', $request['email'])->first();
             
              
              

    }
    

   
      
}
