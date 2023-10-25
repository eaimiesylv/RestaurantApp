<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserFormRequest;
use App\Services\AuthService\AuthService;

class AuthController extends Controller
{
    protected AuthService $authService;

    public function __construct(AuthService $authService)
    {
       
        $this->authService = $authService;
    }
    public function store(UserFormRequest $request)
    {
      
        return  $this->authService->createUser($request->all());

    }
}
