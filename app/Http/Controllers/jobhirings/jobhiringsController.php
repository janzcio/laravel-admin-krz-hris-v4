<?php

namespace App\Http\Controllers\jobhirings;

use App\Applicant;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Message;
use App\Profile;
use App\User;
use App\jobhiring;
use Illuminate\Http\Request;

class jobhiringsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $jobhirings = jobhiring::where('title', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('requirements', 'LIKE', "%$keyword%")
                ->orWhere('responsibilities', 'LIKE', "%$keyword%")
                ->orWhere('others', 'LIKE', "%$keyword%")
                ->orWhere('location', 'LIKE', "%$keyword%")
                ->orWhere('how_to_apply', 'LIKE', "%$keyword%")
                ->orWhere('slot', 'LIKE', "%$keyword%")
                ->orWhere('position', 'LIKE', "%$keyword%")
                ->orWhere('skill_requirement', 'LIKE', "%$keyword%")
                ->orWhere('available_from', 'LIKE', "%$keyword%")
                ->orWhere('available_to', 'LIKE', "%$keyword%")
                ->orWhere('email_address', 'LIKE', "%$keyword%")
                ->orWhere('is_active', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $jobhirings = jobhiring::paginate($perPage);
        }

        $jobhirings = jobhiring::paginate(25);

        $new_applicants = Applicant::where('is_read', 0)->get();

        /*count new applicants by jobhiring*/
        $data_new_applicants = [];

        foreach ($new_applicants as $value) {
            $data_new_applicants[] = $value;
        }

        /*count array values */
        // print_r(array_count_values(array_column($data_new_applicants, 'jobhiring_id'))[5]);
        // die();

        return view('admin.jobhirings.index', compact('jobhirings','data_new_applicants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.jobhirings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        jobhiring::create($requestData);

        return redirect('admin/jobhirings')->with('message', 'jobhiring added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $jobhiring = jobhiring::findOrFail($id);

        return view('admin.jobhirings.show', compact('jobhiring'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $jobhiring = jobhiring::findOrFail($id);

        return view('admin.jobhirings.edit', compact('jobhiring'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $jobhiring = jobhiring::findOrFail($id);
        $jobhiring->update($requestData);

        return redirect('admin/jobhirings')->with('message', 'jobhiring updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        jobhiring::destroy($id);

        return redirect('admin/jobhirings')->with('message', 'jobhiring deleted!');
    }

    public function showApplicants($jhid)
    {
        $Profile = new Profile();
        $applicants = Applicant::where('jobhiring_id', $jhid)->get();
        $jh = jobhiring::getAllJH();
        $p = $Profile->getProfileByuserId();
        $message = Message::getAllMessagesByUIDJHID();

        /*read notification and update to 1*/
        $read_notification = Applicant::where('jobhiring_id', $jhid)
                                      ->update(['is_read' => 1]);
                                        

        return view('admin.jobhirings.applicants', compact('applicants','jh','p','message','jhid'));
    }
}
