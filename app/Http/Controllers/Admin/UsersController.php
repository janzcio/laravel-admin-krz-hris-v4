<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Profile;
use App\Role;
use App\User;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {
        $p = new Profile();
        $keyword = $request->get('search');
        $perPage = 15;
        $profile = $p->getProfileByuserId();
        if (!empty($keyword)) {
           $users = DB::table('users')
                ->join('role_user', 'users.id', '=', 'role_user.user_id')
                ->join('roles', 'role_user.role_id', '=', 'roles.id')
                ->where('name', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->where('roles.name', 'LIKE', "User")
                ->paginate($perPage);
        } else {
            $users = DB::table('users')
                ->select('users.*')
                ->join('role_user', 'users.id', '=', 'role_user.user_id')
                ->join('roles', 'role_user.role_id', '=', 'roles.id')
                ->where('roles.name', 'LIKE', "User")
                ->paginate($perPage);
        }

        return view('admin.users.index', compact('users','profile'));
    }

    public function jobseekers(Request $request)
    {
        $role = new Role();
        $p = new Profile();
        $keyword = $request->get('search');
        $perPage = 15;
        $arrRole = $role->getRoleListByName();
        $profile = $p->getProfileByuserId();
        if (!empty($keyword)) {
            $users = DB::table('users')
                ->join('role_user', 'users.id', '=', 'role_user.user_id')
                ->join('roles', 'role_user.role_id', '=', 'roles.id')
                ->where('name', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->where('roles.name', 'LIKE', "jobseeker")
                ->paginate($perPage);
        } else {
            // $users = User::paginate($perPage);
            $users = DB::table('users')
                ->select('users.*')
                ->join('role_user', 'users.id', '=', 'role_user.user_id')
                ->join('roles', 'role_user.role_id', '=', 'roles.id')
                ->join('profiles', 'users.id', '=', 'profiles.user_id')
                ->where('roles.name', 'LIKE', "jobseeker")
                ->paginate($perPage);
        }

        return view('admin.users.jobseekers', compact('users', 'arrRole','profile'));
    }

    function rfu(Request $request){
        $uid = isset($request['uid']) ? $request['uid'] : 0;
        $usertype = $request['usertype'];
        if ($uid != 0) {
            $read_notification = Profile::where('user_id', $uid)
                          ->update(['rfu' => true, 'updated_at' => Carbon::now()]);
            $message = "Request for update sent!";
        }else{
            $message = "No User was selected";
        }

        if (isset($_GET['applicant']) && isset($_GET['jhid'])) {
            return redirect('/admin/jobhirings/'.$_GET['jhid'].'/applicants')->with('message', $message);
        }

        return redirect('/admin/'.$usertype)->with('message', $message);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $roles = Role::select('id', 'name', 'label')->get();
        $roles = $roles->pluck('label', 'name');
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return void
     */
    public function store(Request $request)
    {
        $success = false;
        $requestData = json_decode($request->all()["formData"]);
        // $this->validate($requestData, ['name' => 'required', 'email' => 'required', 'password' => 'required', 'roles' => 'required']);

        // $data = $requestData->except('password');
        $data['password'] = bcrypt($requestData->password);
        $data['name'] = $requestData->name;
        $data['email'] = $requestData->email;
        $user = User::create($data);

        // foreach ($requestData->roles as $role) {
            // $user->assignRole($role);
        // }

        if ($user) {
            $profiledata = (array)$requestData;
            $profiledata['user_id'] = (int)$user->id;
            unset($profiledata["id"]);
            unset($profiledata["name"]);
            unset($profiledata["email"]);
            unset($profiledata["roles[]"]);
            unset($profiledata["password"]);
            $profilesave = profile::create($profiledata);
           if ($profilesave) {
                $success = true;
                $user->assignRole('user');
                $redirectlink = '/profile?uid='.(int)$user->id;
           //      if (isset($_FILES['file']) && $_FILES['file']['error'] == 0){
           //          /*save upload*/
           //          $info = pathinfo($_FILES['file']['name']);
           //          $ext = $info['extension']; // get the extension of the file
           //          $newname = $save->id.".".$ext;
           //          $target = 'images/users/';

           //          if (!file_exists($target)) {
           //              mkdir($target, 0777, true);
           //              move_uploaded_file($_FILES['file']['tmp_name'], $target."/".$newname);
           //          }else{
           //              move_uploaded_file($_FILES['file']['tmp_name'], $target."/".$newname);
           //          }
                // }
           }
        }

        
        return compact('success','redirectlink');
        // return redirect('admin/users')->with('flash_message', 'User added!');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id)
    {
        $roles = Role::select('id', 'name', 'label')->get();
        $roles = $roles->pluck('label', 'name');

        $user = User::with('roles')->select('id', 'name', 'email')->findOrFail($id);
        $user_roles = [];
        foreach ($user->roles as $role) {
            $user_roles[] = $role->name;
        }

        return view('admin.users.edit', compact('user', 'roles', 'user_roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int      $id
     *
     * @return void
     */
    public function update(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
                'email' => 'required|string|max:255|email|unique:users,email,' . $id,
                'roles' => 'required'
            ]
        );

        $data = $request->except('password');
        if ($request->has('password')) {
            $data['password'] = bcrypt($request->password);
        }

        $user = User::findOrFail($id);
        $user->update($data);

        $user->roles()->detach();
        foreach ($request->roles as $role) {
            $user->assignRole($role);
        }

        return redirect('admin/users')->with('flash_message', 'User updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function destroy($id)
    {
        User::destroy($id);

        return redirect('admin/users')->with('flash_message', 'User deleted!');
    }

    public function profile(){
        $isUpdate = (isset($_GET['edit']) && $_GET['edit'] == 1) ? 1 : 0;
        $rfu = isset($_GET['rfu']) ? 1 : 0;

        $isNew = isset($_GET['new']) ? 1 : 0;

        $user_id = null;
        $role = \Auth::user()->roles->pluck('name')[0];
        if (isset($_GET["uid"])) {
            $user_id =  $_GET["uid"];
        }else{
           $user_id =  \Auth::user()->id;
        }
        
        // read notification
        if ($rfu > 0) {
            $update = DB::table('profiles')
                ->where('id', $user_id)
                ->update(['rfu' => 0]);
        }

        $data = Profile::where('user_id', $user_id)->first();
        $user = User::find($user_id);
        return view('admin.profile.index', compact('data','role','isUpdate','user'));
    }

    public function profileUpdate(Request $request){
        $request = $request->all();
        $success = 'false';

        $update = DB::table('profiles')
                ->where('id', $request["id"])
                ->update([$request["element"] => $request["element_value"]]);

        if ($update) {
            $success = 'true';
        }

        return $success;
    }

    public function saveJson(Request $request){
        $update = DB::table('profiles')
                ->where('id', $request["editId"])
                ->update([$request["columnName"] => $request["jsonData"]]);
    }

    public function updateCredential(Request $request){
        $request = $request->all();
        $data = [];

        $user = User::where('id', $request["id"])->first();

        if (Hash::check($request["currentpassword"], $user->password)) {
            $update = DB::table('users')
                ->where('id', $request["id"])
                ->update([
                    'password' => bcrypt($request["newpassword"]),
                    'email' => $request["email"],
                ]);
                if ($update) {
                    $data = [
                        'status' => 'success',
                        'message' => 'Authentication updated successfully!'
                    ];
                }else{
                    $data = [
                        'status' => 'error',
                        'message' => 'Something went wrong during updating!'
                    ];
                }
        }else{
            $data = [
                        'status' => 'error',
                        'message' => 'Wrong Authentication'
                    ];
        }

        return $data;
    }

    public function upload(Request $request){
        $reqdata = $request->all();

        $success = false;
        $update_profic = null;

        $filename = $_FILES["file"]["name"];
        
        $file_ext = pathinfo($filename,PATHINFO_EXTENSION);
        $newName= $reqdata["dataid"].".".$file_ext;
        $sourcePath = $_FILES['file']['tmp_name'];
        
        $targetPathDir = public_path('uploads\profpic');
        $targetPath = public_path('uploads\profpic\\') . $newName;
        if (!file_exists($targetPathDir)) {
            mkdir($targetPathDir, 0777, true);
        }

        if(file_exists($targetPath)) {
            chmod($targetPath,0755); //Change the file permissions if allowed
            unlink($targetPath); //remove the file
        }

        if (move_uploaded_file($sourcePath,$targetPath)) {
            $update_profic = Profile::where('id', $reqdata["dataid"])
                          ->update([
                                'image_url' => $newName,
                                'image_name' => $filename
                            ]);
        }

        return compact('reqdata');
    }
}
