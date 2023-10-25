<?php

namespace App\Services\AuthService;
use App\Services\AuthService\AuthRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthRepository
{
   
   
    public function authenticateUser($request)
    {  
            
              $user = User::where('email', $request['email'])->first();
              if(!$user){
                return response()->json(['errors' => 'User not found'], 401);
              }
              
              if ($user->status === 'inactive') {
                return response()->json(['errors' => 'Your account is inactive'], 403);
              }
              if(!Hash::check($request['password'],$user->password)){
                   
                 return response()->json(['errors' => 'Wrong credentials'], 403);
              } 
              $data= [
                'token'=>$user->createToken('api-token')->plainTextToken,
                'data' => $user
              ];
              return response()->json(['success' => $data], 401);

    }
   
      
}
