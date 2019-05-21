@extends('admin.layouts.app')

@section('main-content')
     <div class="form-group">
         <form action="{{route('library.update', $library->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
          
            <div class="col-sm-3">
                    <label>Add Books :</label>
                    <div class="input-group">
                     <input class="form-control" type="file" name="newfile">
                    </div>
                </div>

                <div class="col-sm-3">
                    <label>Book Name :</label>
                    <div class="input-group">
                     <input class="form-control" type="text" name="newname">
                    </div>
                </div>

                <div class="col-sm-3">
                        <label>Book Description :</label>
                        <div class="input-group">
                            <input class="form-control" type="text" name="newdescription">
                      
                        </div>
                </div>

                <div class="col-sm-3">
                        <label>Author :</label>
                        <div class="input-group">
                            <input class="form-control" type="text" name="newauthor">
                      
                        </div>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
         </form>
         
     </div>
@endsection