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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3|max:255',
            'content' => 'required|min:10',
        ];
    }

    public function messages()
    {
        return[
            'title.required' => 'il campo titolo è obbligatorio',
            'title.min' => 'il campo titolo deve contenere minimo :min caratteri',
            'title.max' => 'il campo titolo deve contenere massimo :max caratteri',
            'content.required' => 'il campo contenuto è obbligatorio',
            'content.min' => 'il campo contenuto deve contenere minimo :min caratteri',
        ];
    }
}
