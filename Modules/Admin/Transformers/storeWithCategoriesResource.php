<?php

namespace Modules\Admin\Transformers;

use Modules\Admin\Transformers\MediaResource;
use Illuminate\Http\Resources\Json\JsonResource;

class storeWithCategoriesResource extends JsonResource
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
            'categories' => CategoriesShowResource::collection($this->categories),
            'media' => MediaResource::collection($this->media)
        ];
    }
}
