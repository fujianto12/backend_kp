<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
            'question_text' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'options' => 'required|array|min:1',
            'options.*' => 'required|string|max:255',
            'points' => 'required|array',
            'points.*' => 'required|numeric|min:0',
        ];
    }
}
