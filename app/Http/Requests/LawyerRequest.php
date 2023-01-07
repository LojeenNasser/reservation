<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LawyerRequest extends FormRequest
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
     */
    public function rules()
    {
        $rules = [
            'name' => 'required|string',
            'email' => 'required',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'avatar' => 'required|image|max:8000',
            'tags' =>  'required',
            'job_title' =>  'required',
            'description' =>  'required',
            'city' =>  'required',
            'voice_call' =>  'required',
            'message' =>  'required',
            'video_call' =>  'required',

        ];


        if ($this->isMethod('PUT')) {
            $rules['avatar'] = 'sometimes';
        }

        return $rules;
    }

}
