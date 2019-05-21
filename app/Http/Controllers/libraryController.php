<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\library;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libraries = library::all();
        return view('admin.library.index',compact('libraries'));      
    }

    public function showAll() {
        $books = library::all();
        return view('user.library')->with('books', $books);
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
            'file'=>'required|mimes:docx,pdf,ppt,rar,zip|max:1999',
            'name'=>'required',
            'description'=>'required',
            'author'=>'required'
            
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


        $library = new library();
        $library->file = $fileNameToStore;
        $library->name = $request->name;
        $library->description = $request->description;
        $library->author = $request->author;
        $library->save();
        return redirect(route('library.index'));
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
        $library = library::find($id);
        return view('admin.library.edit')->with('library', $library);
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
            'newfile'=>'required|mimes:docx,pdf,ppt,rar,zip|max:1999',
            'newname'=>'required',
            'newdescription'=>'required',
            'newauthor'=>'required'
        ]);

        //handle file upload
        if($request->hasFile('newfile')){
            $filenameWithExt = $request->file('newfile')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('newfile')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' .time().'.'.$extension;
            $path = $request->file('newfile')->storeAs('public/file', $fileNameToStore);
        }
        else {
            $fileNameToStore = 'noImage.jpg';
        }

        $library = library::findOrFail($id);
        $library->file = $fileNameToStore;
        $library->name = $request->newname;
        $library->description = $request->newdescription;
        $library->author = $request->newauthor;
        $library->update();
        
        return redirect(route('library.index'))->with('success', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $library = library::find($id);
        $library->delete();

        return redirect('/admin/library');
    }
}
