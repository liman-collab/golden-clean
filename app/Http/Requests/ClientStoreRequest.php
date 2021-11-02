<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientStoreRequest extends FormRequest
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
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'city_name' => ['required', 'string', 'max:255'],
            'start_month' => ['date'],
            'phone'=> ['required', 'string', 'max:255'],
            'building_id' => ['required', 'string'],
            'gate_id' => ['required', 'string'],
            'packages' => ['required','nullable'],
//            'payment'=>['nullable'],
//            'ashensor'=>['nullable'],
//            'mbeturinat'=>['nullable'],
//            'internet'=>['nullable'],
//            'paid'=>['nullable'],
            'end_month'=> ['date'],
        ];
    }


}
