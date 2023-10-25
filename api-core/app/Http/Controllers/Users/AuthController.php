<?php

namespace App\Http\Controllers\Users;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\AuthFormRequest;
use App\Services\AuthService\AuthService;

class AuthController extends Controller
{
    protected AuthService $authService;

    public function __construct(AuthService $authService)
    {
       
        $this->authService = $authService;
    }
//handles login
    public function store(AuthFormRequest $request)
    {
        
        return  $this->authService->authenticateUser($request->all());

    }
}
