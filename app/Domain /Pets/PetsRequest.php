<?php

namespace App\Domain\Pets;

use Illuminate\Foundation\Http\FormRequest;

class PetsRequest extends FormRequest
{
    /**
     * @return array
     */
    public function messages()
    {
        return [
        // 
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'sex' => 'required|in:male,female',
            'age' => 'required|max:3',
        ];
    }
}