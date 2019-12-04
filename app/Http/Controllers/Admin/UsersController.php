<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use App\Profile;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 15;

        if (!empty($keyword)) {
            $users = User::where('name', 'LIKE', "%$keyword%")->orWhere('email', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $users = User::paginate($perPage);
        }

        return view('admin.users.index', compact('users'));
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
        //     $user->assignRole($role);
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

        
        return compact('success');
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
        $user_id = null;
        $role = \Auth::user()->roles->pluck('name')[0];
        if (isset($_GET["uid"])) {
            $user_id =  $_GET["uid"];
        }else{
           $user_id =  \Auth::user()->id;
        }
        $data = Profile::where('user_id', $user_id)->first();
        return view('admin.profile.index', compact('data','role'));
    }
}
