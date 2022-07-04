<?php

namespace Modules\UserModule\Http\Requests;


class DeleteProductRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "sku_products"=>'required|array',
            'sku_products.*' => 'exists:products,sku',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

}
