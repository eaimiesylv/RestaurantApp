<?php

namespace App\Services\AuthService;
use App\Services\AuthService\AuthRepository;
use Illuminate\Support\Facades\Hash;


class AuthService
{
    protected AuthRepository $authRepository;
    

    public function __construct(AuthRepository $authRepository)
    {
        $this->authRepository = $authRepository;

    }
  
    public function authenticateUser(array $request)
    {
    
        $user=$this->authRepository->findUser($request);
      
        if ($user['status'] === 'inactive') {
            return response()->json(['errors' => 'Your account is inactive'], 403);
        }

        if(!Hash::check($request['password'],$user['password'])){
               
             return response()->json(['errors' => 'Wrong credentials'], 403);
        } 
        
        $data= [
            'token'=>$user->createToken('api-token')->plainTextToken,
            'data' => $user
          ];
          return response()->json(['success' => $data], 200);

    }
    
   
   
}