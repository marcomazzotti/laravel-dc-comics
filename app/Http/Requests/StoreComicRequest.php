<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            "title" => "required|min:5|max:50",
            "description" => "required",
            "thumb" => "required",
            "price" => "required|max:10",
            "series" => "required|min:5|max:50",
            "sale_date" => "required",
            "type" => "required|max:50"
        ];
    }

    public function messages()
    {
        return [
            "title.required" => "Il titolo è obbligatorio",
            "title.min" => "Il titolo deve avere lunghezza minima di 5 caratteri",
            "title.max" => "Il titolo deve avere lunghezza massima di 50 caratteri",
            "description.required" => "La descrizione è obbligatoria",
            "thumb.required" => "La locandina è obbligatoria",
            "price.required" => "Il prezzo è obbligatorio",
            "price.max" => "Il prezzo deve essere lungo massima 10 caratteri",
            "series.required" => "La serie è obbligatoria",
            "series.min" => "La serie deve avere lunghezza minima di 5 caratteri",
            "series.max" => "La serie deve avere lunghezza massima di 50 caratteri",
            "sale_date.required" => "La data di uscita è obbligatoria",
            "type.required" => "Il tipo di fumetto è obbligatorio",
            "type.max" => "Il tipo di fumetto deve avere lunghezza massima di 50 caratteri"
        ];
    }
}
