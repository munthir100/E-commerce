<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/admin', function (Request $request) {
    return $request->user();
});

//Route::get('countries',function (){
//    $jsondata =file_get_contents(base_path('/resources/Countries/countries.json'));
//    $countriesData = json_decode($jsondata);
//
//    //    \Modules\Shipping\Entities\Country::create();
//    foreach ($countriesData as $country) {
//
//        $data = new \Modules\Shipping\Entities\Country();
//        $data->name = $country->name;
//        $data->capital_city = $country->capital_city ?? "none";
//        $data->currency_name = $country->currency_name;
//        $data->code = $country->code;
//        $data->symbol= $country->symbol;
//        $data->save();
//    }
//    return $countriesData;
//});
