<?php

use App\Permission;
use App\Role;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

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
            $profile->surname = "admin";
            $profile->firstname = "admin";
            $profile->save();
        }   

        $user = User::firstOrCreate(array(
            'email' => 'user@user.com',
            'name' => 'User',
            'password' => bcrypt("password123")
        ));
        $user->save();

        if($user->profile == null){
            $profile = new \App\Profile();
            $profile->user_id = $user->id;
            $profile->surname = "user";
            $profile->firstname = "user";
            $profile->save();
        }

        $jobseeker = User::firstOrCreate(array(
            'email' => 'jobseeker@jobseeker.com',
            'name' => 'Jobseeker',
            'password' => bcrypt("password123")
        ));
        $jobseeker->save();

        if($jobseeker->profile == null){
            $profile = new \App\Profile();
            $profile->user_id = $jobseeker->id;
            $profile->surname = "jobseeker";
            $profile->firstname = "jobseeker";
            $profile->save();
        }

        $admin_role = Role::firstOrcreate(['name' => 'admin']);
        $user_role = Role::firstOrcreate(['name' => 'user']);
        $jobseeker_role = Role::firstOrcreate(['name' => 'jobseeker']);

        $admin->assignRole('admin');
        $user->assignRole('user');
        $jobseeker->assignRole('jobseeker');

        

        

    }
}
