<?php

namespace Modules\Admin\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class StoreWithProductsResource extends JsonResource
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
            'store_name' => $this->store_name,
            'store_link' => $this->store_name,
            'categories' => CategoriesWithProductsResource::collection($this->categories),
            'media' => MediaResource::collection($this->media)
        ];
    }
}
