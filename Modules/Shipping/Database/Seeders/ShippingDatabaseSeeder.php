<?php

namespace Modules\Shipping\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Shipping\Entities\City;

class ShippingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create(['name' => 'khartoum']);
        City::create(['name' => 'edduiem']);
        City::create(['name' => 'kosti']);
    }
}
