<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GateStoreRequest extends FormRequest
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
            'building_id' => ['required','string'],
            'name' => ['required', 'string', 'max:255' ,'unique:gates'],
        ];
    }

    public function messages()
    {
        return [
            'building_id.required' => "Kekrohet zgjedhja e baneses",
            'name.required'=>'Kerkohet zgjedhja e Hyrjes',
            'name.unique'=>'Hyrja duhet te jete unike'

        ];
    }
}
