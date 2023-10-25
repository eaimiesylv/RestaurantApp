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
    public function allAuths()
    {
    
        return $this->authRepository->allAuths();

    }
    public function showAuth($auth){

        return  $this->authRepository->showAuth($auth);
    }
    public function createAuth(array $all)
    {
    
        return $this->authRepository->createAuth($all);

    }
    public function updateAuth($request, $auth){
        
        return  $this->authRepository->updateAuth($request, $auth);   
    }
   
   
}