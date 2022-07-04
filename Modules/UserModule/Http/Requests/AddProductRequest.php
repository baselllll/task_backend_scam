<?php

namespace Modules\UserModule\Http\Requests;


class AddProductRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name"=>"required",
            "price"=>"required",
            "size"=>"required",
            'type' => 'required|in:DVD,Book,Furniture',
            'height' => 'required',
            'weight' => 'required',
            'length' => 'required',
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
