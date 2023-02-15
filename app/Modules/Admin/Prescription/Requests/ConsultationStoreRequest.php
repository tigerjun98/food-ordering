<?php

namespace App\Modules\Admin\Consultation\Requests;

use App\Models\Order;
use App\Models\Prescription;
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

class ConsultationStoreRequest extends FormRequest
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
            'id'                => ['integer'],
            'user_id'           => ['required', 'exists:users,id'],
            'medicine_id.*.*'   => ['required'],
            'quantity.*.*'      => ['required', 'integer'],
            'time_per_day.*'    => ['nullable', 'integer'],
            'dose.*'            => ['nullable', 'integer'],
            'diagnoses.*'       => ['nullable', 'string'],
            'specialists.*'     => ['nullable', 'string'],
            'syndromes.*'       => ['nullable', 'string'],
            'remark.*'          => ['nullable', 'string'],
            'direction.*'       => ['nullable', 'in:'.arrayToString(Prescription::getDirectionList())],
            'category.*'        => ['required', 'in:'.arrayToString(Prescription::getCategoryList())],
            'metric.*'          => ['nullable', 'in:'.arrayToString(Prescription::getMetricList())],
            'advise'            => ['nullable', 'string'],
            'symptom'           => ['required', 'string'],
            'internal_remark'   => ['nullable', 'string'],
        ];
    }
}
