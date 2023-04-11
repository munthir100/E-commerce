<?php

namespace Modules\Shipping\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Shipping\Entities\City;
use Illuminate\Support\Facades\File;
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
        // Read the contents of the cities.json file
        $json = File::get("resources/Countries/cities.json");

        // Decode the JSON data
        $data = json_decode($json, true);

        // Loop through each country and insert it into the countries table
        foreach ($data['countries'] as $country) {
            $country = Country::create([
                'name' => $country['name'],
                'capital_city' => $country['capital_city'],
                'currency_name' => $country['currency_name'],
                'code' => $country['code'],
                'symbol' => $country['symbol'],
                'phone_code' => $country['phone_code'],
                'phone_digits_number' => $country['phone_digits_number'],
            ]);

            // Loop through each city and insert it into the cities table with the country_id
            foreach ($data[$country['name']] as $englishName => $arabicName) {
                City::create([
                    'name' => $englishName,
                    'country_id' => $country->id,
                ]);
            }
        }
    }
}
