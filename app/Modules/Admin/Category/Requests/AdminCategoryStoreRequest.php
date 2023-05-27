<?php

namespace App\Modules\Admin\Category\Requests;

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
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class AdminCategoryStoreRequest extends FormRequest
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
        $validation = [
            'id'            => ['integer'],
            'name_en'       => ['required', 'string', 'max:50'],
        ];

        return $validation;
    }
}
