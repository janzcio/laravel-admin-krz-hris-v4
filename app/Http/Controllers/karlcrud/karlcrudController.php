<?php

namespace App\Http\Controllers\karlcrud;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\karlcrud;
use Illuminate\Http\Request;

class karlcrudController extends Controller
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
            $karlcrud = karlcrud::where('Name', 'LIKE', "%$keyword%")
                ->orWhere('Address', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $karlcrud = karlcrud::paginate($perPage);
        }

        return view('admin.karlcrud.index', compact('karlcrud'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.karlcrud.create');
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
			'Name' => 'required',
			'Address' => 'required'
		]);
        $requestData = $request->all();
        
        karlcrud::create($requestData);

        return redirect('admin/karlcrud')->with('flash_message', 'karlcrud added!');
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
        $karlcrud = karlcrud::findOrFail($id);

        return view('admin.karlcrud.show', compact('karlcrud'));
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
        $karlcrud = karlcrud::findOrFail($id);

        return view('admin.karlcrud.edit', compact('karlcrud'));
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
			'Name' => 'required',
			'Address' => 'required'
		]);
        $requestData = $request->all();
        
        $karlcrud = karlcrud::findOrFail($id);
        $karlcrud->update($requestData);

        return redirect('admin/karlcrud')->with('flash_message', 'karlcrud updated!');
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
        karlcrud::destroy($id);

        return redirect('admin/karlcrud')->with('flash_message', 'karlcrud deleted!');
    }
}
