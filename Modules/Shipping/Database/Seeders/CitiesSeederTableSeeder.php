<?php

namespace Modules\Shipping\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Shipping\Entities\City;

class CitiesSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        
        City::create([
            'name' => 'jedda',
        ]);
        City::create([
            'name' => 'al-riad',
        ]);
        City::create([
            'name' => 'mekka',
        ]);
        City::create([
            'name' => 'ararr',
        ]);
    }
}
