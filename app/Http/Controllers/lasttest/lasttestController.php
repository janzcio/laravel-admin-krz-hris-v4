<?php

namespace App\Http\Controllers\lasttest;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\lasttest;
use Illuminate\Http\Request;

class lasttestController extends Controller
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
            $lasttest = lasttest::where('name', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $lasttest = lasttest::paginate($perPage);
        }

        return view('admin.lasttest.index', compact('lasttest'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.lasttest.create');
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
        
        lasttest::create($requestData);

        return redirect('admin/lasttest')->with('flash_message', 'lasttest added!');
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
        $lasttest = lasttest::findOrFail($id);

        return view('admin.lasttest.show', compact('lasttest'));
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
        $lasttest = lasttest::findOrFail($id);

        return view('admin.lasttest.edit', compact('lasttest'));
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
        
        $lasttest = lasttest::findOrFail($id);
        $lasttest->update($requestData);

        return redirect('admin/lasttest')->with('flash_message', 'lasttest updated!');
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
        lasttest::destroy($id);

        return redirect('admin/lasttest')->with('flash_message', 'lasttest deleted!');
    }
}
