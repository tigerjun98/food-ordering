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
            'id'                    => ['integer'],
            'appointment_datetime'  => ['required'],
            'remark'                => ['nullable'],
            'status'                => ['nullable'],
            'user_id'               => ['required'],
            'queue_id'              => ['required'],
            'admin_id'              => ['required'],
        ];
    }
}
