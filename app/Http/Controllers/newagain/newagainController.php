<?php

namespace App\Http\Controllers\newagain;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\newagain;
use Illuminate\Http\Request;

class newagainController extends Controller
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
            $newagain = newagain::where('name', 'LIKE', "%$keyword%")
                ->orWhere('desc', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $newagain = newagain::paginate($perPage);
        }

        return view('admin.newagain.index', compact('newagain'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.newagain.create');
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
        
        newagain::create($requestData);

        return redirect('newagain/newagain')->with('flash_message', 'newagain added!');
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
        $newagain = newagain::findOrFail($id);

        return view('admin.newagain.show', compact('newagain'));
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
        $newagain = newagain::findOrFail($id);

        return view('admin.newagain.edit', compact('newagain'));
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
        
        $newagain = newagain::findOrFail($id);
        $newagain->update($requestData);

        return redirect('newagain/newagain')->with('flash_message', 'newagain updated!');
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
        newagain::destroy($id);

        return redirect('newagain/newagain')->with('flash_message', 'newagain deleted!');
    }
}
