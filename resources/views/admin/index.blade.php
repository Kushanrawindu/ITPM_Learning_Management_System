@extends('admin.layouts.app')

@section('main-content')

<div class="container">
    <li class="list-item">
        <table class="table" id="myTable">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Subject</th>
                <th scope="col">File Name</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            {{-- <tbody>
                  @foreach ($courseMaterials as $courseMaterial)
                <tr>
                  <th scope="row">{{$courseMaterial->id}}</th>
                     <td>{{$courseMaterial->subname}}</td>
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
              
              
            </tbody> --}}
        </table>
    </li>
  </div>  
    
@endsection