<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolesAndPermissionSeeder extends Seeder
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
        Permission::create(['name' => 'create artist']);
        Permission::create(['name' => 'view artist']);
        Permission::create(['name' => 'update artist']);
        Permission::create(['name' => 'delete artist']);

        Permission::create(['name' => 'create album']);
        Permission::create(['name' => 'update album']);
        Permission::create(['name' => 'delete album']);
        Permission::create(['name' => 'view album']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'label']);
        $role1->givePermissionTo('create artist');
        $role1->givePermissionTo('create album');
        $role1->givePermissionTo('update album');
        $role1->givePermissionTo('delete album');

        $role2 = Role::create(['name' => 'independent-artist']);
        $role2->givePermissionTo('view artist');
        $role2->givePermissionTo('update artist');
        $role2->givePermissionTo('delete artist');
        $role2->givePermissionTo('create album');
        $role2->givePermissionTo('update album');

        $role3 = Role::create(['name' => 'admin']);

        $role4 = Role::create(['name' => 'super-admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo users
        $user = Factory(App\User::class)->create([
            'name' => 'Rick Sanchez',
            'email' => 'rick@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        $user->assignRole($role1);

        $user = Factory(App\User::class)->create([
            'name' => 'Admin User',
            'email' => 'admin@audiotap.com',
            'password' => Hash::make('12345678')
        ]);
        $user->assignRole($role3);

        $user = Factory(App\User::class)->create([
            'name' => 'Super Admin',
            'email' => 'superadmin@audiotap.com',
            'password' => Hash::make('12345678')
        ]);
        $user->assignRole($role4);
    }
}
