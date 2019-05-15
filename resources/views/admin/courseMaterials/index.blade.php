@extends('admin.layouts.app')

@section('main-content')

    <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-file-text-o"></i>Subject Materials</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="/dashboard">Home</a></li>
            <li><i class="icon_document_alt"></i>Courses</li>
            <li><i class="fa fa-file-text-o"></i>Subject Materials</li>
          </ol>
        </div>
    </div>
    <div>
      {{-- <a href="{{route('courseMaterials.create')}}" class="btn btn-success">ADD SUBJECT MATERIALS</a> --}}
      <div class="container">
        <a href="#myModal" data-toggle="modal" class="btn btn-primary">Add Subject Materials</a>
      </div>

      <form action="{{route('courseMaterials.store')}}" method="POST" enctype="multipart/form-data">

          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                  <h4 class="modal-title">Add Subject Material</h4>
                </div>
                <div class="modal-body">

                   
                  <form role="form">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Subject</label>
                      <select class="form-control input-sm m-bot15" name="subName" id="exampleInputEmail3">
                        <option>NDM</option>
                        <option>Android App Development</option>
                        <option>Web Designing</option>
                      </select>
                    </div>
                    

                    <div class="form-group">
                      <label for="week">Week</label>
                      <select class="form-control input-sm m-bot15" name="week" id="week">
                        <option>5 FEBRUARY - 11 FEBRUARY</option>
                        <option>12 FEBRUARY - 18 FEBRUARY</option>
                        <option>19 FEBRUARY - 25 FEBRUARY</option>
                        <option>26 FEBRUARY - 4 MARCH</option>
                        <option>5 MARCH - 11 MARCH</option>
                        <option>12 MARCH - 18 MARCH</option>
                        <option>19 MARCH - 25 MARCH</option>
                        <option>26 MARCH - 1 APRIL</option>
                        <option>2 APRIL - 8 APRIL</option>
                        <option>9 APRIL - 15 APRIL</option>
                        <option>16 APRIL - 22 APRIL</option>
                        <option>23 APRIL - 29 APRIL</option>
                        <option>30 APRIL - 6 MAY</option>
                        <option>7 MAY - 13 MAY</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label for="subject">Subject Material</label>
                      <input type="file" class="form-control" name="subFile" placeholder="Insert a file">
                      
                    </div>

                    <div class="form-group">
                      <form action="{{route('courseMaterials.store')}}" method="POST" enctype="multipart/form-data">
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

    <div class="row">

    </div>

    <div class="col-lg-12">
      <section class="panel">
        <header class="panel-heading">
          Add Your Notice Here
        </header>
        <div class="panel-body">
          <div class="form">
            <form action="#" class="form-horizontal">
              <div class="form-group">
                {{-- <label class="control-label col-sm-2">CKEditor</label> --}}
                <div class="col-sm-10">
                  <textarea class="form-control ckeditor" name="editor1" rows="4"></textarea>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>

    <div class="container">
      <li class="list-item">
          <table class="table" id="myTable">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Subject</th>
                  <th scope="col">Week</th>
                  <th scope="col">File Name</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                    @foreach ($courseMaterials as $courseMaterial)
                  <tr>
                    <th scope="row">{{$courseMaterial->id}}</th>
                       <td>{{$courseMaterial->subname}}</td>
                       <td>{{$courseMaterial->week}}</td>
                       <td>{{$courseMaterial->filename}}</td>
  
                       <td><a href="{{route('courseMaterials.edit', $courseMaterial->id)}}" class="btn btn-warning"><i class="icon_check_alt2"></i></a>
                        <form action="{{route('courseMaterials.destroy', $courseMaterial->id)}}" method="POST">
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
