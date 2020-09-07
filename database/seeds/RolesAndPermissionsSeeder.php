<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'edit clients']);
        Permission::create(['name' => 'delete clients']);
        Permission::create(['name' => 'write clients']);
        Permission::create(['name' => 'read clients']);

        Permission::create(['name' => 'edit appointments']);
        Permission::create(['name' => 'delete appointments']);
        Permission::create(['name' => 'write appointments']);
        Permission::create(['name' => 'read appointments']);

        Permission::create(['name' => 'edit workers']);
        Permission::create(['name' => 'delete workers']);
        Permission::create(['name' => 'write workers']);
        Permission::create(['name' => 'read workers']);

        Permission::create(['name' => 'edit worke_schedule']);
        Permission::create(['name' => 'delete worke_schedule']);
        Permission::create(['name' => 'write worke_schedule']);
        Permission::create(['name' => 'read worke_schedule']);

        Permission::create(['name' => 'edit photo_gallery']);
        Permission::create(['name' => 'delete photo_gallery']);
        Permission::create(['name' => 'write photo_gallery']);
        Permission::create(['name' => 'read photo_gallery']);

        Permission::create(['name' => 'edit company_info']);
        Permission::create(['name' => 'delete company_info']);
        Permission::create(['name' => 'write company_info']);
        Permission::create(['name' => 'read company_info']);

        // create roles and assign created permissions

        // this can be done as separate statements
        // $role = Role::create(['name' => 'writer']);
        // $role->givePermissionTo('edit articles');

        // // or may be done by chaining
        // $role = Role::create(['name' => 'moderator'])
        //     ->givePermissionTo(['publish articles', 'unpublish articles']);

        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());

        $role = Role::create(['name' => 'boss']);
        $role->givePermissionTo(Permission::all());

        $role = Role::create(['name' => 'manager']);
        $role->givePermissionTo([
            'edit clients', 'delete clients', 'write clients', 'read clients',
            'edit appointments', 'delete appointments', 'write appointments', 'read appointments',
            'edit workers', 'delete workers', 'write workers', 'read workers',
            'edit worke_schedule', 'delete worke_schedule', 'write worke_schedule', 'read worke_schedule',
            'edit photo_gallery', 'delete photo_gallery', 'write photo_gallery', 'read photo_gallery'
        ]);

        $role = Role::create(['name' => 'worker']);
        $role->givePermissionTo([
            'edit clients', 'write clients', 'read clients',
            'edit appointments', 'delete appointments', 'write appointments', 'read appointments',
            'read workers',
            'read worke_schedule',
            'write photo_gallery', 'read photo_gallery'
        ]);

        $role = Role::create(['name' => 'client']);
        $role->givePermissionTo([
            'edit appointments', 'delete appointments', 'write appointments', 'read appointments',
            'read workers',
            'read worke_schedule'
        ]);
    }
}
