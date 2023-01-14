<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TableStoreRequest extends FormRequest
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
            "name"=>['required'],
            "guest_number"=>['required'],
            "status"=>['required'],
            "location"=>['required'],
        ];
    }
    public function messages() {
 
        return [
            "name.required" => "A név mező kitöltése kötelező!",
            "guest_number.required" => "Egyedül ne menj étterembe!",
            "status.required" => "Státusz mező üresen maradt!",
            "location.required" => "Töltsd ki mielőtt nem marad több hely!",
           
        ];
    }
}
