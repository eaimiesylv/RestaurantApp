<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rule;


class UserFormRequest extends FormRequest
{
    
   
    public function rules()
    {
        $rules = [
            'fullname' => [
                'required',
                'string',
                'max:255',
            ],
            'phone_number' => [
                'required',
                'max:15',
            ],
           
        ];

        if($this->getMethod() == "POST")
        {
            $rules += [
                'email' => [
                    'required',
                    'string',
                    'email',
                    'unique:users,email',
                    'max:255',
                ],
            ];
        }

        if($this->getMethod() == "PUT")
        {
           
            $user = $this->route('users.update');
            dd($user->data);
            $rules += [
                'email' => [
                    'required',
                    'string',
                    'email',
                    'max:255',
                    Rule::unique('users')->ignore($user->id),
                ],
            ];
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'fullname.required' => 'Please Enter full name',
            'email.required' => 'Please Enter Email ID',
            'email.email' => 'Please Enter Valid Email Id',
            'phone_number.required' => 'Please Enter Phone No',
           
        ];
    }
}