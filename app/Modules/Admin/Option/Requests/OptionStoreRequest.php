<?php

namespace App\Modules\Admin\Option\Requests;

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

class OptionStoreRequest extends FormRequest
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
            'type'      => ['required', 'in:'.arrayToString(Option::getTypeList())],
            'name_en'   => ['nullable', 'string', 'regex:/^[\w\-\s]+$/'],
            'name_cn'   => ['required', 'string'],
            'desc_en'   => ['nullable', 'string'],
            'desc_cn'   => ['nullable', 'string'],
        ];
    }
}
