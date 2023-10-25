<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rule;


class SearchFormRequest extends FormRequest
{
    
   
    public function rules()
    {
        return [
            'keyword' => 'required|string|max:200',
            'category_type' => 'required|string',
            'category_id' => 'required|integer',
        ];
    }

    
}