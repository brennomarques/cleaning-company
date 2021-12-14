<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateAndCreate extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            "title" => "required|min:3|max:20",
            "document_size" => ["required",  "min: 1" , "max: 100"],
            "subscription_number" => ["required", "min: 1", "max: 100"],
            "responsible_signature" => ["required", "min: 1" , "max: 20"],
            "number_pages" => ["required", "min: 1", "max: 255"],
        ];
    }

    public function messages()
    {
        return [
            "title.required" => "O campo titulo e obrigatório.",
            "document_size.required" => "O campo tamanho do documento e obrigatório.",
            "subscription_number.required" => "O campo número de assinatura e obrigatório.",
            "responsible_signature.required" => "O campo assinatura do responsável e obrigatório.",
            "number_pages.required" => "O número de paginas e obrigatório."
        ];
    }
}
