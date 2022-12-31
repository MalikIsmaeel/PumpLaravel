<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CounteryRequest extends FormRequest
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
            'countery_name'=>'required',
            'countery_nameAr'=>'required',
            'vat_rate'=>'required',
             'active'=>'required',
            'user_id'=>'required'
        ];
    }
}
