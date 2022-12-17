<?php

namespace App\Traits;

use Spatie\MediaLibrary\InteractsWithMedia;


trait HasMediaTrait
{
    use InteractsWithMedia;

    public function upload($file, $collectionName)
    {
        $this->addMedia($file)
            ->toMediaCollection($collectionName);
    }
}
