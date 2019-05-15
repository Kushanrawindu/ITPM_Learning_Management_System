@extends('admin.layouts.app')

@section('main-content')
     <div class="form-group">
         <form action="{{route('courseMaterials.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
                {{-- <input class="form-control" type="text" name="subName" placeholder="Subject">
                <input class="form-control" type="file" name="subFile" placeholder="File"> --}}
                
                {{-- <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" name="subName" placeholder="Enter Subject">
                        
                </div>

                <div class="form-group">
                        <label for="subject">Subject Material</label>
                        <input type="file" class="form-control" name="subFile" placeholder="Insert a file">
                        
                </div>
                <button type="submit" class="btn btn-success">Submit</button> --}}

                

         </form>
         
     </div>
@endsection