<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NosotrosFormRequest extends FormRequest
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
            'titulo1' => 'max:50',
            'img1' => 'max:200',
            'titulo2' => 'max:50',
            'titulo3' => 'max:50',
        ];
    }
}
