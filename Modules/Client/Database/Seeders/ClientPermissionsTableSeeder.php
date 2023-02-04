<?php
namespace Modules\Client\Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class ClientPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::findOrCreate('client');
        $permissions = config('client.permissions');
        
        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission,
            ]);
        }
        
        $role->givePermissionTo($permissions);
    }
}
