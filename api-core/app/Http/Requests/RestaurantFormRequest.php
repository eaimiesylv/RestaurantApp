<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rule;


class RestaurantFormRequest extends FormRequest
{
    
   
    public function rules()
    {
        return [
            'image' => 'required|string|max:100',
            'name' => 'required|string|max:100',
            'city' => 'required|string|max:100',
            'description' => 'required|string|max:500',
            'address' => 'required|string|max:100',
            'opening_hours' => 'required|string|max:100',
        ];
    }

    
}