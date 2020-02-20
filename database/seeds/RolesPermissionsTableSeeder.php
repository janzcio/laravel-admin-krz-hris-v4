<?php

use App\Permission;
use App\Role;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RolesPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Permission
        $data = [
            [
                'name' => 'all permission',
                'label' => 'all permission',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'can-apply',
                'label' => 'can-apply',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'can-request-for-update',
                'label' => 'can-request-for-update',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'view-message',
                'label' => 'view-message',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'view-applicants',
                'label' => 'view-applicants',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'can-view-request-for-update',
                'label' => 'can-view-request-for-update',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
    



        \DB::table('permissions')->insert($data);

        $permissions = Permission::all();

        $roles_arr = ["admin","user","jobseeker"];

        foreach ($permissions as  $item) {
            // admin
            $permissions_selected_for_admin = ["all permission","can-request-for-update", "view-applicants"];
            if (in_array($item->name, $permissions_selected_for_admin)) {
                $admin_role_get = Role::where('name', $roles_arr[0])->first();
                $p_admin = Permission::where('name', $item->name)->first();
                $admin_role_get->givePermissionTo($p_admin);
            }

            // user
            $permissions_selected_for_user = ["can-apply","view-message", "can-view-request-for-update"];
            if (in_array($item->name, $permissions_selected_for_user)) {
                $user_role_get = Role::where('name', $roles_arr[1])->first();
                $p_user = Permission::where('name', $item->name)->first();
                $user_role_get->givePermissionTo($p_user);
            }

            // jobseeker
            $permissions_selected_for_jobseeker = ["can-apply","view-message", "can-view-request-for-update"];
            if (in_array($item->name, $permissions_selected_for_jobseeker)) {
                $jobseeker_role = Role::where('name', $roles_arr[2])->first();
                $p_jobseeker = Permission::where('name', $item->name)->first();
                $jobseeker_role->givePermissionTo($p_jobseeker);
            }

        }
    }
}
