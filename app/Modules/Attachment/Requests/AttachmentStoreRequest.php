<?php

namespace App\Modules\Attachment\Requests;

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

class AttachmentStoreRequest extends FormRequest
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
            'ref_id'        => ['required', 'string'],
            'ref_model'     => ['nullable', 'string'],
            'path'          => ['nullable', 'string'],
            'type'          => ['nullable', 'string'],
            'file'          => ['file', 'mimes:jpeg,png,jpg', 'max:5000'],
        ];
    }

    public function messages()
    {
        return [
            'file.max' => 'File is too big. Maximum allowed size is :max kb', //:max
        ];
    }
}
