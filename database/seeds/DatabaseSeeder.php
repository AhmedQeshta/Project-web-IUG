<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*$role1 = Role::create(['name' => 'user']);
        $role2 = Role::create(['name' => 'admin']);
        //////////////////
        $permission1 = Permission::create(['name' => 'create post']);
        $permission2 = Permission::create(['name' => 'edit post']);
        $permission3 = Permission::create(['name' => 'see videos']);
////////////////////////
        $role1->givePermissionTo($permission1);
        $role2->givePermissionTo($permission1);
        $role2->givePermissionTo($permission2);
        $role2->givePermissionTo($permission3);*/

        /*$user= \App\User::create([
            'name' => 'Ibrahim',
            'email' => 'ib@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('12345678'),
        ]);
        $user->assignRole('admin');*/





    }
}
