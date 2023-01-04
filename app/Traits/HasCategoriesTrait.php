<?php

namespace App\Traits;

use Modules\Admin\Entities\Category;


trait HasCategoriesTrait
{
    /**
     * Get categories for the given store link and type.
     *
     * @param string $storeLink
     * @param string $type
     * @return \Illuminate\Database\Eloquent\Collection
     */
    protected function getCategories(string $storeLink)
    {
        $categories = Category::forStoreLink($storeLink)->get();
        return Category::buildCategoryTree($categories);
    }
}
