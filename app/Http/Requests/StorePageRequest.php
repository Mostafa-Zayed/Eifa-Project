<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePageRequest extends FormRequest
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
            'name_ar' => 'required|max:255|unique:pages,name',
            'name_en' => 'required|max:255|unique:pages,name',
            'description_ar' => 'nullable',
            'description_en' => 'nullable',
            'status' => 'nullable',
            'order' => 'required|max:255|unique:pages,order',
            'url' => 'required|max:255'
        ];
    }
}
