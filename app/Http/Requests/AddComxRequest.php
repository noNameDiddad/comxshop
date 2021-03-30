<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddComxRequest extends FormRequest
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
            'header' => 'required',
            'price_site' => 'required',
            'comx_img_1' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'header' => 'Поле названия комикса',
            'price_site' => 'Поле цены',
        ];
    }

    public function messages()
    {
        return [
            'comx_img_1.required' => 'Фото комикса не загружено'
        ];
    }
}
