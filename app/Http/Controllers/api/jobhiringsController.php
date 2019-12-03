<?php

namespace App\Http\Controllers\api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\jobhiring;
use Illuminate\Http\Request;

class jobhiringsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $jobhirings = jobhiring::paginate(25);

        return $jobhirings;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $jobhiring = jobhiring::create($request->all());

        return response()->json($jobhiring, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jobhiring = jobhiring::findOrFail($id);

        return $jobhiring;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $jobhiring = jobhiring::findOrFail($id);
        $jobhiring->update($request->all());

        return response()->json($jobhiring, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        jobhiring::destroy($id);

        return response()->json(null, 204);
    }
}
