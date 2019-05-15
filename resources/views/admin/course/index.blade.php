@extends('admin.layouts.app')

@section('main-content')

    <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> Manage Courses</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="/dashboard">Home</a></li>
            <li><i class="icon_document_alt"></i>Courses</li>
            <li><i class="fa fa-file-text-o"></i>Manage Courses</li>
          </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel panel-default">
                <header class="panel-heading">
                    Manage Course
                </header>
                <form class="form-horizontal" action="{{route('courses.store')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <div class="panel-body" style="border-bottom: 1px solid #ccc;">
                        <div class="form-group">

                            <div class="col-sm-3">
                                <label>Cover Image :</label>
                                <div class="input-group">
                                 <input class="form-control" type="file" name="coverImg">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <label>Course Name :</label>
                                <div class="input-group">
                                 <input class="form-control" type="text" name="courseName">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                    <label>Course Description :</label>
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="courseDescription">
                                  
                                    </div>
                            </div>


                        </div>
                    </div>
                
                    
                        {{-- <form action="{{route('course.store')}}" method="POST" enctype="multipart/form-data">
                          @csrf --}}
                          <button type="submit" class="btn btn-primary">Create Course</button>
                        {{-- </form> --}}
                    
                </form>
            </section>
        </div>
    </div>

    {{-- <div class="row">
        <form class="form-horizontal" action="{{route('course.store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
                
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Add Notice Here</label>
                                
                            <textarea class="form-control" rows="5" name="notice" id="notice" placeholder="Write Something Here.."></textarea>
                                
                    </div>
                </div>
                  
                
                <div class="panel-footer">
                    <button type="submit" class="btn btn-primary">Add Notice</button>
                </div>
        </form>
    </div> --}}

    <div class="container">
        <li class="list-item">
            <table class="table" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                {{-- <tbody>
                      @foreach ($userCourses as $userCourses)
                    <tr>
                      <th scope="row">{{$userCourses->id}}</th>
                         <td>{{$userCourses->coverName}}</td>
                         <td>{{$userCourses->coverDesc}}</td>
    
                         <td><a href="{{route('courseMaterials.edit', $userCourses->id)}}" class="btn btn-warning"><i class="icon_check_alt2"></i></a>
                          <form action="{{route('courseMaterials.destroy', $userCourses->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="icon_close_alt2"></i></button>
                          
                          </form>
                             
                            </td> 
                    </tr>
                    @endforeach
                  
                  
                </tbody> --}}
              </table>
    
        
        </li>
    </div>
@endsection

