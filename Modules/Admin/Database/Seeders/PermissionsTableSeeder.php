<?php
namespace Modules\Admin\Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::findOrCreate('admin');
        $permissions = config('admin.permissions');
        
        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission,
            ]);
        }
        
        $role->givePermissionTo($permissions);
    }
}
