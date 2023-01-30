<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use App\User;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions

        Permission::create(['name' => 'view-users']);
        Permission::create(['name' => 'create-user']);
        Permission::create(['name' => 'edit-user']);
        Permission::create(['name' => 'delete-user']);

        Permission::create(['name' => 'view-member-education-level']);
        Permission::create(['name' => 'create-member-education-level']);
        Permission::create(['name' => 'edit-member-education-level']);
        Permission::create(['name' => 'delete-member-education-level']);

        Permission::create(['name' => 'view-members']);
        Permission::create(['name' => 'create-member']);
        Permission::create(['name' => 'edit-member']);
        Permission::create(['name' => 'delete-member']);

        Permission::create(['name' => 'view-classes']);
        Permission::create(['name' => 'create-class']);
        Permission::create(['name' => 'edit-class']);
        Permission::create(['name' => 'delete-class']);

        Permission::create(['name' => 'view-students']);
        Permission::create(['name' => 'create-student']);
        Permission::create(['name' => 'edit-student']);
        Permission::create(['name' => 'delete-student']);

        Permission::create(['name' => 'view-coffee']);
        Permission::create(['name' => 'create-coffee']);
        Permission::create(['name' => 'edit-coffee']);
        Permission::create(['name' => 'delete-coffee']);

        Permission::create(['name' => 'view-loans']);
        Permission::create(['name' => 'create-loan']);
        Permission::create(['name' => 'edit-loan']);
        Permission::create(['name' => 'delete-loan']);

        Permission::create(['name' => 'view-paid-loans']);
        Permission::create(['name' => 'delete-paid-loan']);

        Permission::create(['name' => 'view-payments']);
        Permission::create(['name' => 'create-payment']);
        Permission::create(['name' => 'edit-payment']);
        Permission::create(['name' => 'delete-payment']);

        Permission::create(['name' => 'view-geolocation']);

        Permission::create(['name' => 'view-sliders']);
        Permission::create(['name' => 'create-slider']);
        Permission::create(['name' => 'edit-slider']);
        Permission::create(['name' => 'delete-slider']);

        Permission::create(['name' => 'view-testimonials']);
        Permission::create(['name' => 'create-testimonial']);
        Permission::create(['name' => 'edit-testimonial']);
        Permission::create(['name' => 'delete-testimonial']);

        Permission::create(['name' => 'view-contact-us-reports']);

        Permission::create(['name' => 'view-settings']);

        Permission::create(['name' => 'view-roles']);
        Permission::create(['name' => 'create-role']);
        Permission::create(['name' => 'edit-role']);
        Permission::create(['name' => 'delete-role']);

        Permission::create(['name' => 'view-application-log']);


        // create roles and assign existing permissions
        $role_super_admin = Role::create(['name' => 'super-admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        $role_admin = Role::create(['name' => 'admin']);
        $role_admin->givePermissionTo('view-users');
        $role_admin->givePermissionTo('view-member-education-level');
        $role_admin->givePermissionTo('view-members');
        $role_admin->givePermissionTo('view-classes');
        $role_admin->givePermissionTo('view-students');
        $role_admin->givePermissionTo('view-coffee');
        $role_admin->givePermissionTo('view-loans');
        $role_admin->givePermissionTo('view-paid-loans');
        $role_admin->givePermissionTo('view-payments');
        $role_admin->givePermissionTo('view-geolocation');
        $role_admin->givePermissionTo('view-sliders');
        $role_admin->givePermissionTo('view-testimonials');
        $role_admin->givePermissionTo('view-contact-us-reports');
        $role_admin->givePermissionTo('view-settings');
        $role_admin->givePermissionTo('view-roles');
        $role_admin->givePermissionTo('view-application-log');


        // super-admin
        $super_admin_user = User::create([
            'firstname' => 'super',
            'lastname' => 'admin',
            'email' => 'superadmin@coffee.nacmu.org',
            'phone_no' => '0702707107',
            'password' => 'superadmin',
            'is_active' => true,
            'image' => NULL,
        ]);

        $super_admin_user->assignRole($role_super_admin);

        // admin user
        $admin_user = User::create([
            'firstname' => 'admin',
            'lastname' => 'user',
            'email' => 'admin@coffee.nacmu.org',
            'phone_no' => '0772446634',
            'password' => 'adminuser',
            'is_active' => true,
            'image' => NULL,
        ]);

        $admin_user->assignRole($role_admin);


    }
}
