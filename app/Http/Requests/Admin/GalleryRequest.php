<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
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
            'travel_packages_id' => 'required|integer|exists:travel_packages,id', // (required|integer|exists:travel_packages,id jangan dispasi)  untuk menunjukan bahwa travel_package itu merupakan bagian dari table data base travel package
            'image' => 'required|image'  //validasi untuk image
        ];
    }
}
