<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        return [
            'name'=>['required'],
            'description'=>['required'],
            'image'=>['required','image'],
            'price'=>['required'],
            
        ];
    }
}
