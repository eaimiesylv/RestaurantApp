<?php

namespace App\Services\AuthService;
use App\Services\AuthService\AuthRepository;
use App\Models\Auth;

class AuthRepository
{
   
    public function allAuths()
    {  
      
        return Auth::all();

    }
    public function createAuth($all)
    {  

        return Auth::create($all);

    }
    public function showAuth($Auth){

         return Auth::find($Auth);
    }
    public function updateAuth($request, $Auth){
        
        $Auth->update($request);
        return $user;
        

    }
      
}
