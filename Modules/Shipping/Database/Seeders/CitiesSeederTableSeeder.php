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
        Country::create([
            'name' => 'Saudi Arabia',
        ]);
        Country::create([
            'name' => 'Egypt',
        ]);
        Country::create([
            'name' => 'Lebanon',
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

        



        City::create([
            'name' => 'CAiro',
            'country_id' => 3,
        ]);
        City::create([
            'name' => 'Beirut',
            'country_id' => 4,
        ]);
        City::create([
            'name' => 'Jedda',
            'country_id' => 2,
        ]);
    }
}
