<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Permission;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::firstOrCreate(array(
            'email' => 'admin@admin.com',
            'name' => 'Admin',
            'password' => bcrypt("password123")
        ));
        $admin->save();

        if($admin->profile == null){
            $profile = new \App\Profile();
            $profile->user_id = $admin->id;
            $profile->save();
        }

        $user = User::firstOrCreate(array(
            'email' => 'user@user.com',
            'name' => 'User'
        ));
        $user->password = bcrypt("password123");
        $user->save();

        if($user->profile == null){
            $profile = new \App\Profile();
            $profile->user_id = $user->id;
            $profile->save();
        }

        $admin_role = Role::firstOrcreate(['name' => 'admin']);
        $user_role = Role::firstOrcreate(['name' => 'user']);
    }
}
