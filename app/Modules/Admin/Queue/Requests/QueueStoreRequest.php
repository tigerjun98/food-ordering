<?php

namespace App\Modules\Admin\Queue\Requests;

use App\Models\Medicine;
use App\Models\Option;
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

class QueueStoreRequest extends FormRequest
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
            'id'            => ['integer'],
            'user_id'       => ['required', 'exists:users,id'],
            'doctor_id'     => ['nullable', 'exists:admins,id'],
            'remark'        => ['nullable', 'string'],
        ];
    }
}
