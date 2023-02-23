<?php

namespace App\Modules\Admin\Queue\Requests;

use App\Models\Medicine;
use App\Models\Option;
use App\Models\Queue;
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

class QueueUpdateSortingRequest extends FormRequest
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
        // dd(request()->higher_queue_id != null, request()->higher_queue_id);

        return [
            'id'                => ['integer'],
            'status'            => ['required', 'in:'.arrayToString(Queue::getStatusList())],
            'lower_queue_id'    => ['nullable', 'exists:queues,id'],
            'higher_queue_id'   => ['nullable', 'exists:queues,id'],
//            'status'        => ['nullable', 'in:'.arrayToString(Queue::getStatusList())],
        ];
    }
}
