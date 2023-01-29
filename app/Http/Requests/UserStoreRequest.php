<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{

    protected $table = "students";

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
            // 'mobile'=>'required',
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'links' => 'required',
            'notes' => 'required',
            'company' => 'required',
        ];
    }
    public function messages()
    {
        return [
            // 'mobile.required' => 'mobile number is required!',
            'name.required' => 'We can not identify you without name!',
            'address.required' => 'Name is required!',
            'email.required' => 'email is required!',
            'links.required' => 'link is required!',
            'notes.required' => 'notes is required!',
            'company.required' => 'company is required!',
        ];
    }
}
