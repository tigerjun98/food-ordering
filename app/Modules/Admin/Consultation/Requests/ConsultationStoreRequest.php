<?php

namespace App\Modules\Admin\Consultation\Requests;

use App\Models\Prescription;
use App\Models\User;
use App\Modules\Admin\Consultation\Rules\QuantityChecker;
use App\Modules\Admin\Consultation\Rules\RequiredMedicine;
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
            'id'                                => ['nullable', 'integer'],
            'user_id'                           => ['required', 'exists:users,id'],
            'medicine_id.*.*'                   => ['nullable'],
            'category.*'                        => ['nullable', 'in:'.arrayToString(Prescription::getCategoryList()), new RequiredMedicine()],
            'quantity.*.*'                      => ['nullable', 'integer'],
            'time_per_day.*'                    => ['nullable', 'integer'],
            'dose_per_time.*'                   => ['nullable', 'integer'],
            'combination_amount.*'              => ['nullable', 'integer', new QuantityChecker()],
            'dose_daily.*'                      => ['nullable', 'integer'],
            'metric.*'                          => ['nullable', 'in:'.arrayToString(Prescription::getMetricList())],
            'diagnoses.*'                       => ['nullable', 'regex:/^[a-z0-9 ]*$/i'],
            'specialists.*'                     => ['nullable', 'regex:/^[a-z0-9 ]*$/i'],
            'syndromes.*'                       => ['nullable', 'regex:/^[a-z0-9 ]*$/i'],
            'direction.*'                       => ['nullable', 'in:'.arrayToString(Prescription::getDirectionList())],
            'remark.*'                          => ['nullable', 'string'],
            'advise'                            => ['nullable', 'string'],
            'symptom'                           => ['required', 'string'],
            'internal_remark'                   => ['nullable', 'string'],
            'on_hold'                           => ['nullable', 'boolean'],
        ];
    }

    public function messages()
    {
        return [
            'combination_amount.*.min' => 'Total quantity cannot be 0',
        ];
    }
}
