<?php

namespace App\Http\Controllers\test2;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\test2;
use Illuminate\Http\Request;

class test2Controller extends Controller
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
            $test2 = test2::where('name', 'LIKE', "%$keyword%")
                ->orWhere('desc', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $test2 = test2::paginate($perPage);
        }

        return view('admin.test2.index', compact('test2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.test2.create');
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
        $this->validate($request, [
			'name' => 'required',
			'desc' => 'required'
		]);
        $requestData = $request->all();
        
        test2::create($requestData);

        return redirect('test2/test2')->with('flash_message', 'test2 added!');
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
        $test2 = test2::findOrFail($id);

        return view('admin.test2.show', compact('test2'));
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
        $test2 = test2::findOrFail($id);

        return view('admin.test2.edit', compact('test2'));
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
			'name' => 'required',
			'desc' => 'required'
		]);
        $requestData = $request->all();
        
        $test2 = test2::findOrFail($id);
        $test2->update($requestData);

        return redirect('test2/test2')->with('flash_message', 'test2 updated!');
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
        test2::destroy($id);

        return redirect('test2/test2')->with('flash_message', 'test2 deleted!');
    }
}
