<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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


    public function rules()
    {

        $rules = [
            'title' => 'required|string',
            'order' => 'required',
            'avatar' => 'required|image|max:8000',
            'status' => 'in:0,1'

        ];


        if ($this->isMethod('PUT')) {
            $rules['avatar'] = 'sometimes';
        }

        return $rules;
    }
}
