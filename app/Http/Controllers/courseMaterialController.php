<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\courseMaterial;

class courseMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courseMaterials = courseMaterial::all();
        return view('admin.courseMaterials.index')->with('courseMaterials', $courseMaterials);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.courseMaterials.create');
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
            'week'=>'required',
            'subFile'=>'required|mimes:docx,pdf,ppt,rar,zip|max:1999'
        ]);
        
        //handle file upload
        if($request->hasFile('subFile')){
            $filenameWithExt = $request->file('subFile')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('subFile')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' .time().'.'.$extension;
            $path = $request->file('subFile')->storeAs('public/courseMaterials', $fileNameToStore);
        }
        else {
            $fileNameToStore = 'noImage.jpg';
        } 


        $courseMaterials = new courseMaterial;
        $courseMaterials->subname = $request->subName;
        $courseMaterials->week = $request->week;
        $courseMaterials->filename = $fileNameToStore;
        $courseMaterials->save();
        
        return redirect(route('courseMaterials.index'))->with('success', 'Successfully Added');
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
        $courseMaterials = courseMaterial::find($id);
        return view('admin.courseMaterials.edit')->with('courseMaterials', $courseMaterials);
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
            'newSubName'=>'required',
            'newSubFile'=>'required|mimes:docx,pdf,ppt,rar,zip|max:1999'
        ]);
        
        //handle file upload
        if($request->hasFile('newSubFile')){
            $filenameWithExt = $request->file('newSubFile')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('newSubFile')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' .time().'.'.$extension;
            $path = $request->file('newSubFile')->storeAs('public/courseMaterials', $fileNameToStore);
        }
        else {
            $fileNameToStore = 'No File';
        } 


        $courseMaterials = courseMaterial::find($id);
        $courseMaterials->subname = $request->newSubName;
        $courseMaterials->filename = $fileNameToStore;
        $courseMaterials->update();
        
        return redirect(route('courseMaterials.index'))->with('success', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $courseMaterials = courseMaterial::findOrFail($id);
        $courseMaterials->delete();

        return redirect(route('courseMaterials.index'))->with('success', 'Successfully Deleted');

    }
}
