@extends('admin.layouts.app')

@section('main-content')
    <div class="row">
        <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i> Manage Assignment</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="/dashboard">Home</a></li>
            <li><i class="icon_document_alt"></i>Assignment</li>
            <li><i class="fa fa-file-text-o"></i>Manage Assignments</li>
        </ol>
        </div>
    </div>

    <div>
            {{-- <a href="{{route('courseMaterials.create')}}" class="btn btn-success">ADD SUBJECT MATERIALS</a> --}}
            <div class="container">
              <a href="#myModal" data-toggle="modal" class="btn btn-primary">Add Assignments</a>
            </div>
            
      
            <form action="{{route('assignment.store')}}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        <h4 class="modal-title">Add Assignments</h4>
                      </div>
                      <div class="modal-body">
      
                        <form role="form">
                          <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" name="subName" id="subName" placeholder="Enter Subject">
                          </div>

                          <div class="form-group">
                            {{-- <label for="description">Description</label> --}}
                            {{-- <input type="text" class="form-control" name="description" id="description" placeholder="Enter Description"> --}}
                            <select class="form-control input-sm m-bot15" name="description" id="description">
                                <option>Assignment 1</option>
                                <option>Assignment 2</option>
                                <option>Assignment 3</option>
                                <option>Assignment 4</option>
                                <option>Assignment 5</option>
                                <option>Assignment 6</option>
                                <option>Assignment 7</option>
                                <option>Assignment 8</option>
                                <option>Assignment 9</option>
                                <option>Assignment 10</option>
                            </select>
                          </div>

                          <div class="form-group">
                              <label class="control-label col-sm-3">Closing Date</label>
                              <div class="col-sm-13">
                                <input id="dp1" type="datetime-local" name="started_date" class="form-control">
                              </div>
                          </div>
                          
                          <div class="form-group">
                      
                              <button type="submit" class="btn btn-primary">Submit</button>
                
                          </div> 
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
            </form>
    </div>

    {{-- <div class="container">
            <li class="list-item">
                <table class="table" id="myTable">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Description</th>
                        <th scope="col">Closing Date</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                          @foreach ($assignment as $assignment)
                        <tr>
                          <th scope="row">{{$assignment->id}}</th>
                             <td>{{$assignment->subName}}</td>
                             <td>{{$assignment->description}}</td>
                             <td>{{$assignment->date}}</td>
                             
                             <td><a href="#myEditModel" data-toggle="modal" class="btn btn-warning"><i class="icon_check_alt2"></i></a>
                                <form action="{{route('assignment.destroy', $assignment->id)}}" method="POST">
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
    </div> --}}

    <div class="container">
        <li class="list-item">
            <table class="table" id="myTable">
                <thead>
                  <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Subject</th>
                      <th scope="col">Description</th>
                      <th scope="col">Closing Date</th>
                      <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                      @foreach ($assignment as $assignment)
                    <tr>
                      <th scope="row">{{$assignment->id}}</th>
                      <td>{{$assignment->subName}}</td>
                      <td>{{$assignment->description}}</td>
                      <td>{{$assignment->date}}</td>
    
                         <td>
                           
                          <a href="{{route('assignment.edit', $assignment->id)}}" class="btn btn-warning"><i class="icon_check_alt2"></i></a>
                          <form action="{{route('assignment.destroy', $assignment->id)}}" method="POST">
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

          {{-- edit assignment --}}
    {{-- <div>
          <form action="{{route('assignment.update', $assignment->id)}}" method="POST" enctype="multipart/form-data">

            @method('PUT')
      
            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myEditModel" class="modal fade">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 class="modal-title">Add Assignments</h4>
                  </div>
                  <div class="modal-body">
  
                    <form role="form">
                      <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" name="newsubName" id="subName" value="{{$assignment->subName}}">
                      </div>

                      <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" name="newdescription" id="description" value="{{$assignment->description}}">
                      </div>

                      <div class="form-group">
                        <form action="{{route('assignment.update', $assignment->id)}}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                      </div> 
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </form>
  </div> --}}
@endsection