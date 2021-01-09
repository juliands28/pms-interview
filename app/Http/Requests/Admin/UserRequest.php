<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
                'name' => 'required|string|max:50', //maximal isi nya 50 huruf
                'email' => 'required|email|unique:users', //Email harus unik sesuai dari users
                'role' => 'required|string|in:ADMIN,USER'// admin hanya memiliki ADMIN atau USER
            ];
        }
}