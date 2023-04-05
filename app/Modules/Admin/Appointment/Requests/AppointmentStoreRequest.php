<?php

namespace App\Modules\Admin\Appointment\Requests;

use App\Models\Appointment;
use Illuminate\Foundation\Http\FormRequest;

class AppointmentStoreRequest extends FormRequest
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
            'datetime'  => ['required', 'date_format:Y-m-d g:i A'], // 2023(Y)-10(m)-27(d) 7(g - without leading zero):15(i) AM(A)
            'remark'    => ['nullable', 'string'],
            'status'    => ['required', 'in:'.arrayToString(Appointment::getStatusList())],
            'user_id'   => ['required', 'exists:users,id'],
            'queue_id'  => ['nullable'],
            'admin_id'  => ['required', 'exists:admins,id'],
        ];
    }
}
