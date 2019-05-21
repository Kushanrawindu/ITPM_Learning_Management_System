<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\assignment;
use Notification;
use App\Notifications\notify;

class assignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $assignment = assignment::all();
        return view('admin.assignment.index')->with('assignment', $assignment);
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
        $this->validate($request, [
            'subName'=>'required',
            'description'=>'required',
            'started_date'=>'required'
        ]);

        $assignment = new assignment;
        $assignment->subName = $request->subName;
        $assignment->description = $request->description;
        $assignment->date = $request->started_date;
        $assignment->save();
        
        return redirect(route('assignment.index'))->with('success', 'Successfully Added');

        Notification::route('mail','kushanrawindu@gmail.com')->notify(new notify($post));
        //dd($request->all());
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
        $assignment = assignment::find($id);
        return view('admin.assignment.edit')->with('assignment', $assignment);
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
        $this->validate($request, [
            'newsubName'=>'required',
            'newdescription'=>'required',
            'newdate'=>'required'
        ]);

        $assignment = new assignment;
        $assignment->subName = $request->newsubName;
        $assignment->description = $request->newdescription;
        $assignment->date = $request->newdate;
        $assignment->update();
        
        return redirect(route('assignment.index'))->with('success', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $assignment = assignment::findOrFail($id);
        $assignment->delete();

        return redirect(route('assignment.index'))->with('success', 'Successfully Deleted');
    }
}
