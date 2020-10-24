<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Notify extends FormRequest
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
            'service' => 'required|exists:services,name|max:255',
            'receipt' => 'required|file|mimes:pdf,jpeg,png',
        ];
    }
}
