<?php

namespace App\Http\Requests\API\Major;

use Illuminate\Foundation\Http\FormRequest;

class CreateMajorRequest extends FormRequest
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
            'major_name' => 'required|string',
            'major_code' => 'required|string',
        ];
    }
}
