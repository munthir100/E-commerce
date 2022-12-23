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
        Country::create([
            'name' => 'Sudan',
        ]);

        City::create([
            'name' => 'khartoum',
            'country_id' => 1,
        ]);
        City::create([
            'name' => 'edduiem',
            'country_id' => 1,
        ]);
        City::create([
            'name' => 'kosti',
            'country_id' => 1,
        ]);
    }
}
