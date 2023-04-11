<?php

namespace Modules\Acl\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Modules\Acl\Entities\User;
use Modules\Admin\Entities\Admin;
use Modules\Admin\Entities\Category;
use Modules\Admin\Entities\Store;

class CustomSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'user_type_id' => 1,
            'name' => 'a',
            'email' => 'a@a.a',
            'phone' => '1',
            'password' => Hash::make('aaa'),
            'country_id' => 1,
        ]);
        Admin::create([
            'user_id' => 1
        ]);
        
        Store::create([
            'admin_id' => 1,
            'store_name' => 'aaa',
            'store_link' => 'aaa'
        ]);
        Category::create([
            'title' => 'test',
            'store_id' => 1,
        ]);

        Category::create([
            'title' => 'test child',
            'store_id' => 1,
            'parent_id' => 1,
        ]);

        Category::create([
            'title' => 'child test child',
            'store_id' => 1,
            'parent_id' => 2,
        ]);
    }
}
