<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\teacher;

class teacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacher = teacher::all();
        return view('teacher.index', compact('teacher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.index');
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
            'img'=>'required',
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'date'=>'required'
            
        ]);

        //handle file upload
        if($request->hasFile('img')){
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' .time().'.'.$extension;
            $path = $request->file('img')->storeAs('public/img', $fileNameToStore);
        }
        else {
            $fileNameToStore = 'noImage.jpg';
        } 


        $teacher = new teacher();
        $teacher->img = $fileNameToStore;
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->address = $request->address;
        $teacher->phone = $request->phone;
        $teacher->date = $request->date;
        $teacher->save();
        return redirect(route('teacher.index'));
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
