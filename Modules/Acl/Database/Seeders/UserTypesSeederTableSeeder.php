<?php

namespace Modules\Acl\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Acl\Entities\UserTypes;

class UserTypesSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();
        UserTypes::create(['name' => 'admin']);
        UserTypes::create(['name' => 'seller']);
        UserTypes::create(['name' => 'client']);
    }
}
