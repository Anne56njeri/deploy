<?php

namespace App\Http\Controllers;
use App\Stage;
use Illuminate\Http\Request;

class StageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $stage = new stage;
        $stage->name = $request->input('name');
        $date=date_create($request->input('date'));
        $format=date_format($date,"Y-m-d");
        $stage->date = strtotime($format);
        $stage->Proposal = $request->input('Proposal');
        $stage->number = $request->input('number');
        $stage->save();
        return redirect('/stagetwo')->with('success', 'Information has been moved to the second stage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //we  query the db for the specific id
        $stage=stage::find($id);
        $stage->delete();
        return redirect ('/stagetwo')->with('success','Information has been deleted');
    }
}
