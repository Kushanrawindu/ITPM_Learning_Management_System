@extends('admin.layouts.app')

@section('main-content')
     <div class="form-group">
         <form action="{{route('courseMaterials.update', $courseMaterials->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
          
                {{-- <input class="form-control" type="text" name="subName" placeholder="Subject">
                <input class="form-control" type="file" name="subFile" placeholder="File"> --}}
                
                <div class="form-group">
                        <label for="subject">Subject</label>
                <input type="text" class="form-control" name="newSubName" placeholder="Enter new Subject" value="{{$courseMaterials->subname}}">
                        
                </div>

                <div class="form-group">
                        <label for="subject">Subject Material</label>
                        <input type="file" class="form-control" name="newSubFile" placeholder="Update a file"  >
                        
                </div>
                <button type="submit" class="btn btn-success">Update</button>
         </form>
         
     </div>
@endsection