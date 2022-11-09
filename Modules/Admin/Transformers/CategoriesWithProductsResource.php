<?php

namespace Modules\Admin\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoriesWithProductsResource extends JsonResource
{

  public function toArray($request)
  {
    return [
      'title' => $this->title,
      'parent id' => $this->parent_id,
      'products' => ProductsShowResource::collection($this->products),
    ];
  }
}