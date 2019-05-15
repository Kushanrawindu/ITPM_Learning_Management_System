@extends('admin.layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12">
      <h3 class="page-header"><i class="fa fa-file-text-o"></i>All Associated Teachers</h3>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="/dashboard">Home</a></li>
        <li><i class="icon_document_alt"></i>Teachers</li>
        <li><i class="fa fa-file-text-o"></i>All Associated Teachers</li>
      </ol>
    </div>
</div>

<div>
        {{-- <a href="{{route('courseMaterials.create')}}" class="btn btn-success">ADD SUBJECT MATERIALS</a> --}}
        <div class="container">
          <a href="#myModal" data-toggle="modal" class="btn btn-primary">Add Teachers</a>
        </div>
  
        <form action="{{route('teacher.store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 class="modal-title">Add Teacher</h4>
                  </div>
                  <div class="modal-body">
  
                    <form role="form">
                        <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" name="img" placeholder="Insert Image">
                        
                        </div>

                        <div class="form-group">
                            <label>Teacher Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Insert Name">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Insert Email">
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="Insert address">
                        </div>

                        <div class="form-group">
                            <label>Telephone</label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Insert Telephone Number">
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2">Joined Date</label>
                            <div class="col-sm-13">
                                <input id="date" type="date" name="date" value="28-10-2013" size="25" class="form-control">
                            </div>
                        </div>
                          
                        <div class="form-group">
                            <form action="{{route('teacher.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                      
  
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </form>
      </div>

<div class="container">
    <li class="list-item">
        <table class="table" id="myTable">
            <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Teacher Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Joined Date</th>
                    <th scope="col">Actions</th>
                  </tr>
            </thead>
            <tbody>
                @foreach ($teacher as $teacher)
                    <tr>
                      <th scope="row">{{$teacher->id}}</th>
                      <td>{{$teacher->img}}</td>
                      <td>{{$teacher->name}}</td>
                      <td>{{$teacher->email}}</td>
                      <td>{{$teacher->address}}</td>
                      <td>{{$teacher->phone}}</td>
                      <td>{{$teacher->date}}</td>
    
                        <td><a href="{{route('teacher.edit', $teacher->id)}}" class="btn btn-warning"><i class="icon_check_alt2"></i></a>
                        <form action="{{route('teacher.destroy', $teacher->id)}}" method="POST">
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