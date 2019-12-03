<?php

namespace App\Http\Controllers\samplecruds;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Sample Crud;
use Illuminate\Http\Request;

class Sample CrudController extends Controller
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
            $sample crud = Sample Crud::where('first_name', 'LIKE', "%$keyword%")
                ->orWhere('last_name', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $sample crud = Sample Crud::paginate($perPage);
        }

        return view('samplecruds.sample-crud.index', compact('sample crud'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('samplecruds.sample-crud.create');
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
			'first_name' => 'required',
			'last_name' => 'required'
		]);
        $requestData = $request->all();
        
        Sample Crud::create($requestData);

        return redirect('samplecruds/sample-crud')->with('flash_message', 'Sample Crud added!');
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
        $sample crud = Sample Crud::findOrFail($id);

        return view('samplecruds.sample-crud.show', compact('sample crud'));
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
        $sample crud = Sample Crud::findOrFail($id);

        return view('samplecruds.sample-crud.edit', compact('sample crud'));
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
			'first_name' => 'required',
			'last_name' => 'required'
		]);
        $requestData = $request->all();
        
        $sample crud = Sample Crud::findOrFail($id);
        $sample crud->update($requestData);

        return redirect('samplecruds/sample-crud')->with('flash_message', 'Sample Crud updated!');
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
        Sample Crud::destroy($id);

        return redirect('samplecruds/sample-crud')->with('flash_message', 'Sample Crud deleted!');
    }
}
