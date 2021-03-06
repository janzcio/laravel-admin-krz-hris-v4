<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\jobhiring;
use App\user;
use App\Role;
use App\Profile;
use App\Message;
use App\Applicant;
use Carbon\Carbon;

use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // var_dump(Auth::user()->roles->pluck('name'));
        // die();
        
        return view('admin.dashboard');
    }


    public function welcome()
    {
        // var_dump(\Auth::user()->roles->pluck('name'));
        // die();
        $jobhirings = jobhiring::paginate(3);
        $users = user::getUserByID();
        $applicants = Applicant::getAllapplicantByids();
        
        // $jh = jobhiring::getAllJH();
        return view('welcome', compact('jobhirings', 'users','applicants'));
    }

    public function apply($jhid)
    {
        $role = \Auth::user();
        if (!isset($role)) {
            // return redirect('/js/register');
            return redirect('/js/register?jhid='.$jhid);
        }else{
            $user_id = \Auth::user()->id;
            $applicant = new Applicant();
            $applicant->user_id = $user_id;
            $applicant->jobhiring_id = $jhid;
            if ($applicant->save()) {
               return redirect('/')->with('message', 'Successfully Applied');
            }
            
        }
        
    }

    public function jsRegister()
    {
        $roles = Role::select('id', 'name', 'label')->get();
        $roles = $roles->pluck('label', 'name');
        $jhid = isset($_GET["jhid"]) ? $_GET["jhid"] : 0;
        return view('auth.register', compact('roles','jhid'));
    }

    public function jsView()
    {
        $canApply = (Auth::user() != null && Auth::user()->roles->pluck('name')[0] == "admin" ? false : true);
        
        $jhid = isset($_GET["jhid"]) ? $_GET["jhid"] : 0;
        $applicants = Applicant::getAllapplicantByids();
        $jobhiring = jobhiring::findOrFail($jhid);
        $jobhiring->requirements = "shiiit minds";
        $jobhiring->requirements = explode("*", $jobhiring->requirements);
        $jobhiring->responsibilities = explode("*", $jobhiring->responsibilities);
        $jobhiring->others = explode("*", $jobhiring->others);
        $jobhiring->how_to_apply = explode("*", $jobhiring->how_to_apply);
        $jobhiring->location = explode("*", $jobhiring->location);
        return view('pages.view-jobhiring', compact('jhid','applicants','jobhiring','canApply'));
    }

    public function jsStore(Request $request)
    {
        $success = false;
        $jhid = $request->jhid;
        $bio = $request->bio;
        $message = "";
        // $request->name = $request->firstname . " " . $request->lastname;
        // $this->validate($request, ['email' => 'required', 'password' => 'required', 'roles' => 'required']);
        
        $data = $request;
        // $data['password'] = Hash::make($request->password);
        $user = User::create([
            'name' => $data['firstname'].' '.$data['lastname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        $profile = $user->profile;
        if($user->profile == null){
            $profile = new  Profile();
        }

        if($request->date_of_birth != null){
            $date =  Carbon::parse($request->date_of_birth)->format('Y-m-d');
        }else{
            $date = $request->date_of_birth;
        }

        $profile->firstname = $request->firstname;
        $profile->surname = $request->lastname;
        $profile->user_id = $user->id;
        $profile->sex = $request->sex;
        $profile->date_of_birth = $date;
        $profile->bio = $bio;
        // $profile->pic = $request['pic'];
        $profilesave = $profile->save();

        foreach ($request->roles as $role) {
            $user->assignRole($role);
        }

        if ($profilesave && $user) {

            if ($jhid != "") {
                $applicant = new Applicant();
                $applicant->user_id = $user->id;
                $applicant->jobhiring_id = $jhid;
                $applicant->save();
                $message = "Successfully registered and Applied.";
            }else{
                $message = "Successfully registered";
            }
            /*automatic login*/
            \Auth::loginUsingId($profile->user_id, true);

            // $message = "";
            // if (isset($jhid)) {
            //      $message = "";
            // }
            // $message = "Successfully Registered";

            return redirect('/')->with('message', $message);
        }
    }

    public function notifications(){
        $jobhirings = jobhiring::getAllJH();
        $users = user::getUserByID();
        $latest_applicants = [];

         /*all*/
         $new_applicants = Applicant::where('is_read', 0)->get()->count();
         if ($new_applicants > 0) {
             $latest_applicants = Applicant::orderBy('created_at','desc')->first();
         }

         /*messages*/
         $new_message = Message::where('is_read', 0)
                        ->where('user_id', \Auth::user()->id)
                        ->get();

        /*rfu*/
        $rfu = Profile::where('rfu', 1)
                        ->where('user_id', \Auth::user()->id)
                        ->count();
        
         /*bywave admin user*/
         return view('ajax.notifications', compact('new_applicants','latest_applicants','new_message','jobhirings','users','rfu'));
         // return ;
    }


}
