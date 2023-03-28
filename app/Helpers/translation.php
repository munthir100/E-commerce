<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;
use Stichoza\GoogleTranslate\GoogleTranslate;

function translate($stringToTranslate, $defaultLanguage = null)
{

    if (empty($defaultLanguage)) {
        $defaultLanguage = config('app.locale');
    }

    $currentLanguage = session('locale', $defaultLanguage);
    $cacheKey = "translation.$currentLanguage.$stringToTranslate";
    $translatedString = Cache::get($cacheKey);
    // Check if the string exists in the custom translations array
    if ($currentLanguage == 'ar') {
        $pathToTranslationFile = resource_path('lang/ar.json');
        $translationData = File::get($pathToTranslationFile);
        $customTranslations = json_decode($translationData, true);
        if (isset($customTranslations[$stringToTranslate])) {
            $translatedString = $customTranslations[$stringToTranslate];
        }
    } else {
        // If no custom translation exists, use Google Translate
        if (!$translatedString) {
            $translatedString = GoogleTranslate::trans($stringToTranslate, $currentLanguage);
            Cache::put($cacheKey, $translatedString, now()->addDay());
        }
    }

    return $translatedString;
}
