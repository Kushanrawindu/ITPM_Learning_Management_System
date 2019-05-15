@extends('admin.layouts.app')

@section('main-content')
     <div class="form-group">
         <form action="{{route('assignment.update', $assignment->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
          
                {{-- <input class="form-control" type="text" name="subName" placeholder="Subject">
                <input class="form-control" type="file" name="subFile" placeholder="File"> --}}
                
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" name="newSubName" placeholder="Enter new Subject" value="{{$assignment->subName}}">
                </div>

                <div class="form-group">
                    <label for="subject">Description</label>
                    <input type="file" class="form-control" name="newdescription" placeholder="Enter New Description" value="{{$assignment->description}} >
                </div>

                <button type="submit" class="btn btn-success">Update</button>
         </form>
         
     </div>
@endsection