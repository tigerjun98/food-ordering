<?php

namespace App\Modules\User\Category\Requests;

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

class UserCategoryUpdateRequest extends FormRequest
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
            'lower_queue_id'    => ['nullable', 'exists:category_preference,id'],
            'higher_queue_id'   => ['nullable', 'exists:category_preference,id'],
        ];
    }

}
