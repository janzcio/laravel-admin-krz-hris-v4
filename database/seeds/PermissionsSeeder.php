<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
