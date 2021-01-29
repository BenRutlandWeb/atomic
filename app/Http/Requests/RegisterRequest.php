<?php

namespace App\Http\Requests;

use Atomic\Http\FormRequest;
use App\Rules\Uppercase;

class RegisterRequest extends FormRequest
{
    /**
     * The form request rules
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name'          => 'required',
            'email'         => 'email|required',
            'password'      => 'required',
            'currency_code' => ['required', new Uppercase],
            'age'           => 'between:18,65|required'
        ];
    }
}
