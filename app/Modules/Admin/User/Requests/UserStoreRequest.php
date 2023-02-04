<?php

namespace App\Modules\Admin\User\Requests;

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
    public function rules()
    {
        return [
            'id'                                => ['integer'],
            'name_en'                           => ['required', 'string'],
            'name_cn'                           => ['string'],
            'nric'                              => ['required', 'string'],
            'phone'                             => ['required, regex:/^([0-9\s\-\+\(\)]*)$/'],
            'email'                             => ['email', Rule::unique('users')->ignore(request()->id, 'id')],
            'occupation'                        => ['required', 'string'],
            'dob'                               => ['required', 'date_format:Y-m-d', 'before:'.Carbon::now()],
            'remark'                            => ['required', 'string'],
            'gender'                            => ['required', 'in:1,2'],
            'emergency_contact_name'            => ['string'],
            'emergency_contact_no'              => ['regex:/^([0-9\s\-\+\(\)]*)$/'],
            'emergency_contact_relationship'    => ['string'],
            'state_id'                          => ['integer'],
        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate()
    {
        $this->ensureIsNotRateLimited();

        if (! Auth::guard('admin')->attempt($this->only('email', 'password'), $this->boolean('remember'))) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());
    }

    /**
     * Ensure the login request is not rate limited.
     *
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ensureIsNotRateLimited()
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request.
     *
     * @return string
     */
    public function throttleKey()
    {
        return Str::lower($this->input('email')).'|'.$this->ip();
    }
}
