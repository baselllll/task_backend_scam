<?php

namespace Modules\UserModule\Http\Resources;



class ProductResource extends BaseResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "sku" => $this->sku,
            "name" => $this->name,
            "price" => $this->price,
            "size" => $this->size,
            "type" => $this->type,
            "height" => $this->height,
            "weight" => $this->weight,
            "length" => $this->length,
        ];
    }
}
