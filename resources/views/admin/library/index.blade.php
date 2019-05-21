@extends('admin.layouts.app')

@section('main-content')
<div class="row">
        <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i> Manage Library</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="/dashboard">Home</a></li>
            <li><i class="icon_document_alt"></i>Library</li>
            <li><i class="fa fa-file-text-o"></i>Manage Library</li>
        </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <section class="panel panel-default">
                <header class="panel-heading">
                    Manage Library 
                </header>
                <form class="form-horizontal" action="{{route('library.store')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <div class="panel-body" style="border-bottom: 1px solid #ccc;">
                        <div class="form-group">

                            <div class="col-sm-3">
                                <label>Add Books :</label>
                                <div class="input-group">
                                 <input class="form-control" type="file" name="file">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <label>Book Name :</label>
                                <div class="input-group">
                                 <input class="form-control" type="text" name="name">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                    <label>Book Description :</label>
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="description">
                                  
                                    </div>
                            </div>

                            <div class="col-sm-3">
                                    <label>Author :</label>
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="author">
                                  
                                    </div>
                            </div>


                        </div>
                    </div>
                <br>
                    <div class="form-group" style="margin-left: 5px;">
                            <form action="{{route('library.store')}}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                          </div>
                          
                </form>
            </section>
        </div>
    </div>
    <div class="container">
      <li class="list-item">
          <table class="table" id="myTable">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">File</th>
                  <th scope="col">Book Name</th>
                  <th scope="col">Description</th>
                  <th scope="col">Author</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($libraries as $library)
                        <tr>
                          <th scope="row">{{$library->id}}</th>
                             <td>{{$library->file}}</td>
                             <td>{{$library->name}}</td>
                             <td>{{$library->description}}</td>
                             <td>{{$library->author}}</td>
        
                             <td>
                                <a href="{{route('library.edit', $library->id)}}"  data-toggle="modal" class="btn btn-warning"><i class="icon_check_alt2"></i></a>
                                <form action="{{route('library.destroy', $library->id)}}" method="POST">
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
