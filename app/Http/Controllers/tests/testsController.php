<?php

namespace App\Http\Controllers\tests;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\test;
use Illuminate\Http\Request;

class testsController extends Controller
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
            $tests = test::where('test_field', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $tests = test::paginate($perPage);
        }

        return view('tests.tests.index', compact('tests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('tests.tests.create');
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
			'test_field' => 'required'
		]);
        $requestData = $request->all();
        
        test::create($requestData);

        return redirect('tests/tests')->with('flash_message', 'test added!');
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
        $test = test::findOrFail($id);

        return view('tests.tests.show', compact('test'));
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
        $test = test::findOrFail($id);

        return view('tests.tests.edit', compact('test'));
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
			'test_field' => 'required'
		]);
        $requestData = $request->all();
        
        $test = test::findOrFail($id);
        $test->update($requestData);

        return redirect('tests/tests')->with('flash_message', 'test updated!');
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
        test::destroy($id);

        return redirect('tests/tests')->with('flash_message', 'test deleted!');
    }
}
