<?php

namespace App\Modules\Admin\User\Requests;

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
        $validation = [
            'id'                                => ['integer'],
            'name_en'                           => ['required', 'string'],
            'name_cn'                           => ['nullable', 'string'],
            'nric'                              => ['required', 'string', Rule::unique('users')->ignore(request()->id, 'id')],
            'email'                             => ['nullable', 'email', Rule::unique('users')->ignore(request()->id, 'id')],
            'occupation'                        => ['nullable', 'string'],
            'dob'                               => ['nullable', 'date_format:Y-m-d', 'before:'.Carbon::now()],
            'remark'                            => ['nullable', 'string'],
            'remark_allergic'                   => ['nullable', 'string'],
            'gender'                            => ['required', 'in:'.arrayToString(GenderEnum::getListing())],
            'emergency_contact_name'            => ['nullable', 'string'],
            'emergency_contact_no'              => ['nullable', 'regex:/^([0-9\s\-\+\(\)]*)$/'],
            'emergency_contact_relationship'    => ['nullable', 'string'],
            'state'                             => ['nullable', 'string', 'in:'.arrayToString(User::getStatesList())],
            'area'                              => ['nullable', 'string'],
            'postcode'                          => ['nullable', 'digits:5'],
            'address'                           => ['nullable', 'string'],
            'nationality'                       => ['required', 'in:'.arrayToString(CountryEnum::getCountryList(false))],
            'group_id'                          => ['required', 'exists:groups,id'],
        ];

        $validation['phone'] = request()->phone
            ? ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/', Rule::unique('users')->ignore(request()->id, 'id')]
            : ['nullable'];

        return $validation;
    }

    protected function passedValidation()
    {
        // https://stackoverflow.com/questions/31662977/how-to-modify-request-input-after-validation-in-laravel
        $this->merge(
            [ 'nric' => str_replace('-', '', $this->nric) ]
        );
    }
}
