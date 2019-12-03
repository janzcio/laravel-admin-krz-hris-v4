<?php

namespace App\Http\Controllers\newtest;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\New Test;
use Illuminate\Http\Request;

class New TestController extends Controller
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
            $new test = New Test::where('name', 'LIKE', "%$keyword%")
                ->orWhere('desc', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $new test = New Test::paginate($perPage);
        }

        return view('admin.new-test.index', compact('new test'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.new-test.create');
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
        
        New Test::create($requestData);

        return redirect('newtest/new-test')->with('flash_message', 'New Test added!');
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
        $new test = New Test::findOrFail($id);

        return view('admin.new-test.show', compact('new test'));
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
        $new test = New Test::findOrFail($id);

        return view('admin.new-test.edit', compact('new test'));
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
        
        $new test = New Test::findOrFail($id);
        $new test->update($requestData);

        return redirect('newtest/new-test')->with('flash_message', 'New Test updated!');
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
        New Test::destroy($id);

        return redirect('newtest/new-test')->with('flash_message', 'New Test deleted!');
    }
}
