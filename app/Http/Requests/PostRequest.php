<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'shoku' => ['required','max:5'],
            'kyoku' => ['max:7'],
            'yoku' => ['max:5'],
            'shiku' => ['max:7'],
            'kekku' => ['max:7'],
        ];
    }
}
