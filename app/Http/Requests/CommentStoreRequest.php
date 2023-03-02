<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    
    public function rules()
    {
    
            return [
                "first_name" => ['required'],
                "last_name" => ['required'],
                "email" => ['required'],
                "comment" => ['required'],
        ];


      
    }
    public function messages() {
    return [
        "first_name.required" => "A név mező kitöltése kötelező!",
        "last_name.required" => "Nincs kiválasztott kép , feltöltés sikertelen!",
        "email.required" => "Az email mező kitöltése kötelező!",
        "commnet.required" => "Az Komment mező kitöltése kötelező!",

    ];
}
}
