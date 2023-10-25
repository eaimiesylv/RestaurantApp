<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rule;


class RecipesFormRequest extends FormRequest
{
    
   
    public function rules()
    {
        return [
            'image' => 'required|string|max:100',
            'name' => 'required|string|max:100',
            'instruction' => 'required|string',
            'calories_count' => 'required|string|max:100',
            'cost' => 'required|string|max:100',
        ];
    }

    
}