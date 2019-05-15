<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course;
use App\userCourse;

class userCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = userCourse::all();

        return view('user.courses', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course.index');
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
            'coverImg'=>'required',
            'courseName'=>'required',
            'courseDescription'=>'required'
            ]);

        //handle file upload
        if($request->hasFile('coverImg')){
            $filenameWithExt = $request->file('coverImg')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('coverImg')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' .time().'.'.$extension;
            $path = $request->file('coverImg')->storeAs('public/coverImg', $fileNameToStore);
        }
        else {
            $fileNameToStore = 'noImage.jpg';
        } 


        $userCourses = new userCourse();
        $userCourses->coverImg = $fileNameToStore;
        $userCourses->coverName = $request->courseName;
        $userCourses->coverDesc = $request->courseDescription;
        $userCourses->save();
        return redirect(route('course.index'));
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
        // $userCourses = userCourse::find($id);
        // return view('admin.course.index')->with('userCourse', $userCourses);
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
