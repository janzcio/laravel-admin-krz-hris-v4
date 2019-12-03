<?php

namespace App\Http\Controllers\newagaintest;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\newagaintestCN;
use Illuminate\Http\Request;

class newagaintestCNController extends Controller
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
            $newagaintestcn = newagaintestCN::where('name', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $newagaintestcn = newagaintestCN::paginate($perPage);
        }

        return view('admin.newagaintest-c-n.index', compact('newagaintestcn'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.newagaintest-c-n.create');
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
        
        newagaintestCN::create($requestData);

        return redirect('admin/newagaintest-c-n')->with('flash_message', 'newagaintestCN added!');
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
        $newagaintestcn = newagaintestCN::findOrFail($id);

        return view('admin.newagaintest-c-n.show', compact('newagaintestcn'));
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
        $newagaintestcn = newagaintestCN::findOrFail($id);

        return view('admin.newagaintest-c-n.edit', compact('newagaintestcn'));
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
        
        $newagaintestcn = newagaintestCN::findOrFail($id);
        $newagaintestcn->update($requestData);

        return redirect('admin/newagaintest-c-n')->with('flash_message', 'newagaintestCN updated!');
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
        newagaintestCN::destroy($id);

        return redirect('admin/newagaintest-c-n')->with('flash_message', 'newagaintestCN deleted!');
    }
}
