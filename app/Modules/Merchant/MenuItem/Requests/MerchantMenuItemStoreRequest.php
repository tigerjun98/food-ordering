<?php

namespace App\Modules\Merchant\MenuItem\Requests;

use Illuminate\Foundation\Http\FormRequest;
class MerchantMenuItemStoreRequest extends FormRequest
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
        $validation = [
            'id'            => ['integer'],
            'category_id'   => ['required', 'exists:categories,id'],
            'merchant_id'   => ['required', 'exists:merchants,id'],
            'name_en'       => ['required', 'string', 'max:50'],
            'desc_en'       => ['nullable', 'string', 'max:500'],
            'price'         => ['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
        ];

        return $validation;
    }
}
