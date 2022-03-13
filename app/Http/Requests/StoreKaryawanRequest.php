<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreKaryawanRequest extends FormRequest
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
            'name' => 'required|string|unique:tutors,name',
            'gender' => 'required',
            'email' => 'required|string|unique:tutors,email',
            'address' => 'required|string',
            'contact' => 'required|string|unique:tutors,contact'
        ];
    }
}
