<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CharacterStoreRequest extends FormRequest
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
            'nickname' => ['required', 'string', 'min:3' , 'max:55' ],
            'occupation' => ['required', 'string'],
            'quote' => ['required' , 'string', 'min:3', 'max:155',],
            'status' => ['required', 'string', ],
        ];
    }
}
