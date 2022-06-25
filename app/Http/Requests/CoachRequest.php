<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoachRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'firstName' => ['required', 'string'],
            'lastName' => ['required', 'string'],
            'description' => ['required', 'string'],
            'rate' => ['numeric|min:0', 'numeric|max:6']
        ];
    }
}
