<?php

namespace App\Modules\User\OrderItem\Requests;

use App\Entity\Enums\StatusEnum;
use App\Models\Order;
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

class OrderStoreRequest extends FormRequest
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
        $order = Order::find(request()->id);
        if($order && $order->status == StatusEnum::COMPLETED){
            return [
                'rating'        => 'nullable|integer',
                'comment'       => 'nullable|string',
            ];
        }

        return [
            'id'            => ['required', 'integer'],
            'user_id'       => ['required', 'exists:users,id'],
            'name'          => ['required', 'string', 'max:50'],
            'contact'       => ['required', 'string', 'max:50'],
            'address_1'     => ['required', 'string', 'max:50'],
            'address_2'     => ['nullable', 'string', 'max:50'],
            'address_3'     => ['nullable', 'string', 'max:50'],
            'postal_code'   => 'required|numeric|digits:5',
            'city'          => 'required|string',
            'state'         => 'required|integer',
            'additional_instructions' => 'nullable|string',
        ];
    }

}
