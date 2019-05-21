@extends('admin.layouts.app')

@section('main-content')
    <div class="row">
            <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Uploaded Assignment</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/dashboard">Home</a></li>
                <li><i class="icon_document_alt"></i>Assignment</li>
                <li><i class="fa fa-file-text-o"></i>Uploaded Assignments</li>
            </ol>
            </div>
    </div>

    <div class="container">
            <li class="list-item">
                <table class="table" id="myTable">
                    <thead>
                      <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Student ID</th>
                          <th scope="col">Subject</th>
                          <th scope="col">File</th>
                          <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                          @foreach ($submitAssignments as $submitAssignment)
                        <tr>
                          <th scope="row">{{$submitAssignment->id}}</th>
                          <td>{{$submitAssignment->studentID}}</td>
                          <td>{{$submitAssignment->subject}}</td>
                          <td>{{$submitAssignment->file}}</td>
        
                             <td>
                               {{-- <a href="{{route('uploadedAssignment.edit', $submitAssignment->id)}}" class="btn btn-warning"><i class="icon_check_alt2"></i></a> --}}
                              <form action="{{route('uploadedAssignment.destroy', $submitAssignment->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="icon_close_alt2"></i></button>
                              
                              </form>
                                 
                                </td> 
                        </tr>
                      @endforeach
                      
                    </tbody>
                </table>
            </li>
        </div>
@endsection