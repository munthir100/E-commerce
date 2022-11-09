<?php

namespace Modules\Admin\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductsShowResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'sku' => $this->sku,
            'quantity' => $this->quantity,
            'price' => $this->price,
            'on_store' => $this->on_store,
        ];
    }
}
