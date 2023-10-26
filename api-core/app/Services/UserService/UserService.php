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
    
        $user=$this->userRepository->createUser($all);
        if ($user) {
            return response()->json(['success' => 'Registration ok. Please login'], 200);
        }

    }
    public function updateUser($request, $user){
        
        return  $this->userRepository->updateUser($request, $user);   
    }
   
   
}