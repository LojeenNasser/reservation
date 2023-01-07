<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
     *
     */
    public function rules()
    {

        $rules = [
            'title' => 'required|string',
            'description' => 'required|string|min:5|max:500',
            'day' => 'required|string',
            'price' => 'required',
            'avatar' => 'required|image|max:8000',
            'status' => 'in:0,1'

        ];


        if ($this->isMethod('PUT')) {
            $rules['avatar'] = 'sometimes';
        }

        return $rules;
    }
}
