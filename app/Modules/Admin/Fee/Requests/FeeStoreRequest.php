<?php

namespace App\Modules\Admin\Fee\Requests;

use App\Models\Fee;
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

class FeeStoreRequest extends FormRequest
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
            'category'  => ['required', 'in:'.arrayToString(Fee::getCategoryList())],
            'status'    => ['required', 'in:'.arrayToString(Fee::getStatusList())],
            'name_en'   => ['required', 'string'],
            'name_cn'   => ['nullable', 'string'],
            'remark'    => ['nullable', 'string'],
            'price'     => ['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
            'type'      => ['required', 'integer'],
        ];
    }
}
