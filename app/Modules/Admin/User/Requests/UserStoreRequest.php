<?php

namespace App\Modules\Admin\User\Requests;

use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class UserStoreRequest extends FormRequest
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

    protected function prepareForValidation()
    {
        $this->merge([
            'nric' => str_replace('-', '', $this->nric),
            'phone' => str_replace('+', '', $this->phone)
        ]);
    }

    public function rules()
    {
        return [
            'id'                                => ['integer'],
            'name_en'                           => ['required', 'string'],
            'name_cn'                           => ['nullable', 'string'],
            'nric'                              => ['required', 'string'],
            'phone'                             => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/'],
            'email'                             => ['nullable', 'email', Rule::unique('users')->ignore(request()->id, 'id')],
            'occupation'                        => ['nullable', 'string'],
            'dob'                               => ['nullable', 'date_format:Y-m-d', 'before:'.Carbon::now()],
            'remark'                            => ['nullable', 'string'],
            'remark_allergic'                   => ['nullable', 'string'],
            'gender'                            => ['required', 'in:'.arrayToString(User::getGenderList())],
            'emergency_contact_name'            => ['nullable', 'string'],
            'emergency_contact_no'              => ['nullable', 'regex:/^([0-9\s\-\+\(\)]*)$/'],
            'emergency_contact_relationship'    => ['nullable', 'string'],
            'state'                             => ['string', 'in:'.arrayToString(User::getStatesList())],
            'area'                              => ['nullable', 'string'],
            'postcode'                          => ['nullable', 'digits:5'],
            'address'                           => ['nullable', 'string'],
        ];
    }

    protected function passedValidation()
    {
        // https://stackoverflow.com/questions/31662977/how-to-modify-request-input-after-validation-in-laravel
        $this->merge(
            [ 'nric' => str_replace('-', '', $this->nric) ]
        );
    }
}
