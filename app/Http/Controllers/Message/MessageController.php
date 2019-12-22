<?php

namespace App\Http\Controllers\Message;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Message;
use App\Profile;
use App\jobhiring;
use Illuminate\Http\Request;

use Auth;

class MessageController extends Controller
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
        $user_id = \Auth::user()->id;
        if (!empty($keyword)) {
            $message = Message::where('jh_id', 'LIKE', $keyword)
                ->orWhere('message', 'LIKE', "%$keyword%")
                ->where('user_id', 'LIKE', $user_id)
                ->paginate($perPage);
        } else {
            $message = Message::where('user_id', 'LIKE', $user_id)->paginate($perPage);
        }
        $Profile = new Profile();
        $jh = jobhiring::getAllJH();
        $p = $Profile->getProfileByuserId();

        return view('admin.message.index', compact('message','jh','p'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {

        $jh_id = $_GET["jhid"];
        $user_id = $_GET["uid"];

        $p = new Profile();
        $jobhiring = jobhiring::getAllJH();
        $profile = $p->getProfileByuserId();
        
        $j = $jobhiring[$jh_id];
        $prof = $profile[$user_id];

        return view('admin.message.create', compact('j','prof','jh_id','user_id'));
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
  //       $this->validate($request, [
		// 	'jh_id' => 'required',
		// 	'user_id' => 'required'
		// ]);
        // $jhid = $_GET['jhid'];

        $user_id = \Auth::user()->id;
        $requestData = $request->all();
        $requestData["sent_by"] = $user_id;
        $jh_id = $requestData['jh_id'];
        Message::create($requestData);

        return redirect('/admin/jobhirings/'.$jh_id.'/applicants')->with('message', 'Message Sent!');
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
        $message = Message::findOrFail($id);

        $read_notification = Message::where('id', $id)
                          ->update(['is_read' => 1]);


        return view('admin.message.show', compact('message'));
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
        $message = Message::findOrFail($id);

        return view('admin.message.edit', compact('message'));
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
        $this->validate($request, [
			'jh_id' => 'required',
			'user_id' => 'required'
		]);
        $requestData = $request->all();
        
        $message = Message::findOrFail($id);
        $message->update($requestData);

        return redirect('admin/message')->with('flash_message', 'Message updated!');
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
        Message::destroy($id);

        return redirect('admin/message')->with('flash_message', 'Message deleted!');
    }
}
