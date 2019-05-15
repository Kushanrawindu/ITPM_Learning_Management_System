<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\uploadedAssignment;
use App\submitAssignment;

class uploadedAssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('admin.uploadedAssignments.index');
         $uploadedAssignments = uploadedAssignment::all();
         $submitAssignments = submitAssignment::all();
         return view('admin.uploadedAssignments.index', compact('uploadedAssignments','submitAssignments'));
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
            'studentID'=>'required',
            'subject'=>'required',
            'file'=>'required|mimes:docx,pdf,ppt,rar,zip|max:1999'
        ]);
        
        //handle file upload
        if($request->hasFile('file')){
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' .time().'.'.$extension;
            $path = $request->file('file')->storeAs('public/file', $fileNameToStore);
        }
        else {
            $fileNameToStore = 'noImage.jpg';
        } 


        $uploadedAssignments = new uploadedAssignment;
        $uploadedAssignments->studentID = $request->studentID;
        $uploadedAssignments->subject = $request->subject;
        $uploadedAssignments->file = $fileNameToStore;
        $uploadedAssignments->save();
        
        return redirect(route('uploadedAssignment.index'))->with('success', 'Successfully Added');
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
        //
    }
}
