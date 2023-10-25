<?php

namespace App\Services\UserService;
use App\Services\UserService\UserRepository;



class UserService
{
    protected UserRepository $userRepository;
    

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;

    }
    public function allUsers()
    {
    
        return $this->userRepository->allUsers();

    }
    public function showUser($user){

        return  $this->userRepository->showUser($user);
    }
    public function createUser(array $all)
    {
    
        return $this->userRepository->createUser($all);

    }
    public function updateUser($request, $user){
        
        return  $this->userRepository->updateUser($request, $user);   
    }
   
   
}