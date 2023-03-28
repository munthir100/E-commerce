<?php

namespace Modules\Shipping\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Shipping\Entities\City;
use Modules\Shipping\Entities\Country;
use Illuminate\Database\Eloquent\Model;

class CitiesSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $jsondata =file_get_contents(base_path('/resources/Countries/countries.json'));
        $countriesData = json_decode($jsondata);

        foreach ($countriesData as $country) {

            $data = new Country();
            $data->name = $country->name;
            $data->capital_city = $country->capital_city ?? "none";
            $data->currency_name = $country->currency_name;
            $data->code = $country->code;
            $data->symbol= $country->symbol;
            $data->save();
        }



//        City::create([
//            'name' => 'khartoum',
//            'country_id' => 1,
//        ]);
//        City::create([
//            'name' => 'edduiem',
//            'country_id' => 1,
//        ]);
//        City::create([
//            'name' => 'kosti',
//            'country_id' => 1,
//        ]);
//
//
//        City::create([
//            'name' => 'CAiro',
//            'country_id' => 3,
//        ]);
//        City::create([
//            'name' => 'Beirut',
//            'country_id' => 4,
//        ]);
//        City::create([
//            'name' => 'Jedda',
//            'country_id' => 2,
//        ]);
    }
}
