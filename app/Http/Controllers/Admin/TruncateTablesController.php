<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TruncateTablesController extends Controller
{
    public function trunctateAll(){
    	
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0; ');
		DB::table('role_user')->truncate();
		DB::table('users')->truncate();
		DB::table('roles')->truncate();
		DB::table('profiles')->truncate();
		DB::table('permissions')->truncate();
		DB::table('permission_role')->truncate();
		DB::table('applicants')->truncate();
		DB::table('jobhirings')->truncate();
		DB::table('jobhirings')->truncate();
		DB::table('messages')->truncate();
		DB::table('migrations')->truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS = 1; ');
		return "All truncated successfully!";
    }
}
