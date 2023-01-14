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
    public function messages() {
 
        return [
            "name.required" => "A név mező kitöltése kötelező!",
            "image.required" => "Nincs kiválasztott kép, feltöltés sikertelen !",
            "description.required" => "Megjegyzés kitöltése kötelező!",
            "price.required" => "Ingyen nem adunk semmit!",
           
        ];
    }
}
