@extends('admin.layouts.app')

@section('main-content')
     <div class="form-group">
         <form action="{{route('assignment.update', $assignment->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
          
                
                
                <form role="form">
                    <div class="form-group">
                      <label for="subject">Subject</label>
                      <input type="text" class="form-control" name="newsubName" placeholder="Enter Subject" value="{{$assignment->subname}}">
                    </div>

                    <div class="form-group">
                      <select class="form-control input-sm m-bot15" name="newdescription" id="newdescription">
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
                          <input id="dp1" type="datetime-local" name="newdate" class="form-control">
                        </div>
                    </div>
                    
                    {{-- <div class="form-group">
                
                        <button type="submit" class="btn btn-primary">Submit</button>
          
                    </div> --}}

                <button type="submit" class="btn btn-success">Update</button>
         </form>
         
     </div>
@endsection