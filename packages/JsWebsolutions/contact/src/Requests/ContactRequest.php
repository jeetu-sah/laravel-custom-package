<?php

namespace JsWebsolutions\Contact\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'            => 'required',
            'contact_number'  => 'required|numeric',
            'email'           => 'required|email',
            'subject'         => 'required',
            'inquiry'         => 'required',
        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'The name field is required',
            // ..
        ];
    }
}
