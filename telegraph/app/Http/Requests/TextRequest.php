<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TextRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'author' => 'required',
            'title' => 'required',
            'email' => 'required',
            'text' => 'required|min:10|max:250'
        ];
    }

    public function messages()
    {
        return [
            'author.required' => 'Не забывайте указать имя',
            'title.required' => 'Без заголовка ни как',
            'email.required' => 'Напишите свой email',
            'text.required' => 'Напишите хоть с десяток слов'
        ];
    }
}
