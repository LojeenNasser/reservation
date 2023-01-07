<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'avatar' => 'required|image|max:8000',
        ];


        if ($this->isMethod('PUT')) {
            $rules['avatar'] = 'sometimes';
        }

        return $rules;
    }
}
