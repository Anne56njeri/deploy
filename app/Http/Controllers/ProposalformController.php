<?php

namespace App\Http\Controllers;
use App\proposalform;
use Illuminate\Http\Request;

class ProposalformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //code for retrival of data stored in the db
        $proposalform=proposalform::all();
        return view('index')->withproposalform($proposalform);
}
public function index_album($proposalformID = null)
{
    //code for retrival of data stored in the db
    $proposalform=proposalform::all();
    return view('media/index')->withproposalform($proposalform);
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


      $proposalforms = new proposalform;
      $proposalforms->name = $request->input('name');
      $proposalforms->organization=$request->input('organization');
      $proposalforms->address=$request->input('address');
      $proposalforms->phone=$request->input('phone');
      $proposalforms->email=$request->input('email');
      $proposalforms->submitted_by=$request->input('submitted_by');
      $proposalforms->title=$request->input('title');
      $proposalforms->summary=$request->input('summary');
      $proposalforms->background=$request->input('background');
      $proposalforms->activities=$request->input('activities');
      $proposalforms->budget=$request->input('budget');
      $proposalforms->Status=$request->input('status');
      $proposalforms->save();
      return redirect('/home')->with('success', 'Information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //to display information with taking an id
        $proposalform=proposalform::find($id);
        return view('show',compact('proposalform','id'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //editing view
        $proposalform=proposalform::find($id);
        return view ('edit',compact('proposalform','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( $id ,Request $request)
    {
       $proposalform=proposalform::find($id);
       $proposalform->Status=$request->get('status');
       $proposalform->save();
       return redirect('/admin')->with('success', 'Information has been added');






    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

                $proposalform=proposalform::find($id);
                $proposalform->delete();
                return redirect ('proposal')->with('success','Information has been deleted');
    }
}
