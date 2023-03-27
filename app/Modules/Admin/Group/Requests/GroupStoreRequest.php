<?php

namespace App\Modules\Admin\Group\Requests;

use App\Models\Group;
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

class GroupStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'id'        => ['integer'],
            'type'      => ['required', 'in:'.arrayToString(Group::getTypeList())],
            'status'    => ['required', 'in:'.arrayToString(Group::getStatusList())],
            'name_en'   => ['required', 'string', 'max:20'],
            'name_cn'   => ['required', 'string'],
            'remark'    => ['nullable', 'string'],
        ];
    }
}
