<?php

namespace Modules\Acl\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Acl\Database\Seeders\RolesSeeder;
use Modules\Shipping\Database\Seeders\CitiesSeederTableSeeder;

class AclDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(RolesSeeder::class);
        $this->call(UserTypesSeederTableSeeder::class);
        $this->call(CustomSeederTableSeeder::class);
    }
}
