<?php

namespace App\Modules\Merchant\Order\Requests;

use App\Entity\Enums\CountryEnum;
use App\Entity\Enums\GenderEnum;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class MerchantOrderStoreRequest extends FormRequest
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
            'name'          => ['required', 'string', 'max:50'],
            'contact'       => ['required', 'string', 'max:50'],
            'address_1'     => ['required', 'string', 'max:50'],
            'address_2'     => ['nullable', 'string', 'max:50'],
            'address_3'     => ['nullable', 'string', 'max:50'],
            'postal_code'   => 'required|numeric|digits:5',
            'city'          => 'required|string',
            'state'         => 'required|integer',
            'rating'        => 'nullable|integer',
            'comment'       => 'nullable|string',
            'status'        => 'required|integer',
            'additional_instructions' => 'nullable|string',
        ];

        return $validation;
    }
}
