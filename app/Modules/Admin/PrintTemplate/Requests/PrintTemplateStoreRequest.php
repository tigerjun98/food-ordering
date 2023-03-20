<?php

namespace App\Modules\Admin\PrintTemplate\Requests;

use App\Entity\Enums\GenderEnum;
use App\Models\Prescription;
use App\Models\PrintTemplate;
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

class PrintTemplateStoreRequest extends FormRequest
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

//    public function rules()
//    {
//        'name' => [
//        function ($attribute, $value, $fail) {
//            $fail('validation.translation.key')->translate();
//        },
//    ],
//}

    public function rules()
    {
        return [
            'id'        => ['integer'],
            'name'      => ['required', 'string'],
            'type'      => ['required', 'in:'.arrayToString(PrintTemplate::getTypeList())],
            'name_en'   => ['required', 'string'],
            'name_cn'   => ['nullable', 'string'],
            'value.*'   => ['required'],
            'remark'    => ['nullable', 'string'],
        ];
    }
}
