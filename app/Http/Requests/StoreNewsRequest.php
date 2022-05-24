<?php

// Проверка входящих данных в форму

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsRequest extends FormRequest
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
            'title' => ['required', 'string'],
            'category_id' => ['required', 'integer'],
            'description' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'image' => ['required', 'image'],
        ];
    }
}
