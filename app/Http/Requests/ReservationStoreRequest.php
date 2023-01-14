<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationStoreRequest extends FormRequest
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
            "first_name"=>['required'],
            "last_name"=>['required'],
            "email"=>['required'],
            "res_date"=>['required'],
            "tel_number"=>['required'],
            "guest_number"=>['required'],
            "table_id"=>['required'],
        ];

        
    }
    public function messages() {
 
        return [
            "first_name.required" => "A vezetéknév mező kitöltése kötelező!",
            "last_name.required" => "A keresztnév mező kitöltése kötelező!",
            "email.required" => "Az email mező kitöltése kötelező!",
            "res_date.required" => "Add meg a dátomot és az időt!",
            "tel_number.required" => "Add meg a telefonszámod!",
            "guest_number.required" => "Vendégek száma megadása kötelező!",
            "table_id.required" => "Válassz asztalt!",
            
           
        ];
}
}