<?php

namespace App\Http\Controllers\Users;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserFormRequest;
use App\Services\UserService\UserService;


class UserController extends Controller
{
    protected UserService $userService;

    public function __construct(UserService $userService)
    {
       
        $this->userService = $userService;
    }
    public function index()
    {
       
        return  $this->userService->allUsers();
    }

    public function store(UserFormRequest $request)
    {
      
        return  $this->userService->createUser($request->all());

    }

    public function show(User $user)
    {
    
        return  $this->userService->showUser($user);

    }

    public function update(UserFormRequest $request, User $user)
    {
        //$request->validated();
        return  $this->userService->updateUser($request->all(), $user);

    }

   
}
