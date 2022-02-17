<?php

namespace App\Http\Requests\Backend\Galleries;

use Illuminate\Foundation\Http\FormRequest;

class StoreGalleryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-gallery');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'max:191', 'unique:pages,title'],
            'description' => ['required', 'string'],
            'status' => ['boolean'],
            'cannonical_link' => ['string', 'nullable', 'url'],
            'seo_title' => ['string', 'nullable'],
            'seo_keyword' => ['string', 'nullable'],
            'seo_description' => ['string', 'nullable'],
        ];
    }
}
