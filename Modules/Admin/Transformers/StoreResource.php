<?php

namespace Modules\Admin\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class StoreResource extends JsonResource
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
            'store_link' => $this->store_link,
            'store_desc' => $this->store_desc,
            'categories' => new CategoriesShowResource($this->categories),
        ];
    }
}
