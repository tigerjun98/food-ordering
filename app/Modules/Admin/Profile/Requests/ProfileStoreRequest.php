<?php

namespace App\Modules\Admin\Profile\Requests;

use App\Entity\Enums\GenderEnum;
use App\Entity\Enums\StatusEnum;
use App\Models\Order;
use App\Models\User;
use App\Modules\Users\Account\Rules\MatchOldPassword;
use Carbon\Carbon;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class ProfileStoreRequest extends FormRequest
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
            'id'        => ['integer'],
            'name_en'   => ['required', 'string'],
            'name_cn'   => ['nullable', 'string'],
            'phone'     => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/', Rule::unique('admins')->ignore(request()->id, 'id')],
            'email'     => ['required', 'email', Rule::unique('admins')->ignore(request()->id, 'id')],
            'gender'    => ['required', 'in:'.arrayToString(GenderEnum::getListing())],
            'status'    => ['nullable', 'in:'.arrayToString(StatusEnum::getListing())],
        ];
    }
}
