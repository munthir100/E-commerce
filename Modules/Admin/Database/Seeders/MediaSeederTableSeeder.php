<?php

namespace Modules\Admin\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Admin\Entities\Media;

class MediaSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Media::create(['name' => 'instagram']);
        Media::create(['name' => 'snapn chat']);
        Media::create(['name' => 'tewtter']);
        Media::create(['name' => 'tictoc']);
        Media::create(['name' => 'whatsapp']);
        Media::create(['name' => 'maroof']);
        Media::create(['name' => 'phone']);
        Media::create(['name' => 'facebook']);
        Media::create(['name' => 'google play']);
        Media::create(['name' => 'app store']);

        // $this->call("OthersTableSeeder");
    }
}
