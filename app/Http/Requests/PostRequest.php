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


    public function rules()
    {

        $rules = [
            'title' => 'required|string',
            'description' => 'required|string|min:5|max:500',
            'status' => 'in:0,1'
        ];
        return $rules;
    }
}
