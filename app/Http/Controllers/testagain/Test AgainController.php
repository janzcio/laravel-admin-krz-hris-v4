<?php

namespace App\Http\Controllers\testagain;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Test Again;
use Illuminate\Http\Request;

class Test AgainController extends Controller
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
            $test again = Test Again::where('name', 'LIKE', "%$keyword%")
                ->orWhere('desc', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $test again = Test Again::paginate($perPage);
        }

        return view('admin.test-again.index', compact('test again'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.test-again.create');
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
        
        Test Again::create($requestData);

        return redirect('testagain/test-again')->with('flash_message', 'Test Again added!');
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
        $test again = Test Again::findOrFail($id);

        return view('admin.test-again.show', compact('test again'));
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
        $test again = Test Again::findOrFail($id);

        return view('admin.test-again.edit', compact('test again'));
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
        
        $test again = Test Again::findOrFail($id);
        $test again->update($requestData);

        return redirect('testagain/test-again')->with('flash_message', 'Test Again updated!');
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
        Test Again::destroy($id);

        return redirect('testagain/test-again')->with('flash_message', 'Test Again deleted!');
    }
}
