<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name" => ['required'],
            "image" => ['required', 'image'],
            "description" => ['required'],
        
        ];
    }
    public function messages() {
 
        return [
            "name.required" => "A név mező kitöltése kötelező!",
            "image.required" => "Nincs kiválasztott kép , feltöltés sikertelen!",
            "description.required" => "A megjegyzés mező kitöltése kötelező!",
           
        ];
    }
}
