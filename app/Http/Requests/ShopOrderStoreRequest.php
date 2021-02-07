<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopOrderStoreRequest extends FormRequest
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
            'shop_order_status_id' => 'int|exists:shop_order_statuses,id',
            'user_id'       => 'int|exists:users,id',
            'user_name'     =>  'string',
            'user_phone'    =>  'string',
            'user_address'  =>  'required|string',
            'user_email'    =>  'email'
        ];
    }
}
