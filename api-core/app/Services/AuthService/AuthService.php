<?php

namespace App\Services\AuthService;
use App\Services\AuthService\AuthRepository;



class AuthService
{
    protected AuthRepository $authRepository;
    

    public function __construct(AuthRepository $authRepository)
    {
        $this->authRepository = $authRepository;

    }
  
    public function authenticateUser(array $user)
    {
    
        return $this->authRepository->authenticateUser($user);

    }
    
   
   
}