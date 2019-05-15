@extends('admin.layouts.app')

@section('main-content')

    <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> Manage Students</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="/dashboard">Home</a></li>
            <li><i class="icon_document_alt"></i>Students</li>
            <li><i class="fa fa-file-text-o"></i>Manage Students</li>
          </ol>
        </div>
    </div>

    <div>
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                            <section class="panel panel-default">
                                <header class="panel-heading">
                                        
                                    <div class="col-sm-8">
                                                List Of Student
                                    </div>
                                    <div class="col-sm-4">
                                                <a href="#myModal" data-toggle="modal" class="btn btn-primary">Add New Student</a>
                                    </div>
                                </header>
                                
                                <form class="form-horizontal" action="{{route('student.store')}}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                    <div class="panel-body" style="border-bottom: 1px solid #ccc;">
                                        <div class="form-group">
                                                <div class="box">
                                                        <!--box header-->
                                                        <div class="box-header">
                                                            <div class="row">
                                                               <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                                                              <h4 class="modal-title">Add New Student</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                
                                                                            <form role="form">
                                                                                <div class="form-group">
                                                                                  <label for="name">Student Name</label>
                                                                                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                                                                                </div>
                                                                                
                                                                                <div class="form-group">
                                                                                        <label for="address">Address</label>
                                                                                        <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address">
                                                                                </div>
                                        
                                                                                <div class="form-group">
                                                                                        <label for="age">Age</label>
                                                                                        <input type="text" class="form-control" name="age" id="age" placeholder="Enter Age">
                                                                                </div>
                                        
                                                                                <div class="form-group">
                                                                                        <label for="faculty">Faculty</label>
                                                                                        <input type="text" class="form-control" name="faculty" id="faculty" placeholder="Enter Faculty">
                                                                                </div>
                                        
                                                                                <div class="form-group">
                                                                                        <label class="control-label col-sm-2">Birth Date</label>
                                                                                        <div class="col-sm-13">
                                                                                          <input id="dp1" type="date" name="birthdate" value="28-10-2013" size="25" class="form-control">
                                                                                        </div>
                                                                                </div>
                                        
                                                                                <div class="form-group">
                                                                                        <label class="control-label col-sm-3">Started Date</label>
                                                                                        <div class="col-sm-13">
                                                                                          <input id="dp1" type="date" name="started_date" value="28-10-2013" size="25" class="form-control">
                                                                                        </div>
                                                                                </div>
                                        
                                                                                
                                                                                <div class="form-group">
                                                                                  <form action="{{route('student.store')}}" method="POST" enctype="multipart/form-data">
                                                                                    @csrf
                                                                                    <div class="col-sm-2">
                                                                                        <button type="submit" class="btn btn-primary">Add</button>
                                                                                    </div>
                                                                                  </form>
                                                                                </div>
                                                                                
                                                                            </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                        
                                                            </div>
                                                        </div>
                                        
                                                        <!--/box header-->
                                        
                                                        <!--box body-->
                                                        <div class="box-body">
                                                                <div class="row">
                                                                  <div class="col-sm-6"></div>
                                                                  <div class="col-sm-6"></div>
                                                                </div>
                                                                {{-- <form method="POST" action="{{ route('student.search') }}">
                                                                   {{ csrf_field() }}
                                                                   @component('admin.layouts.search', ['title' => 'Search'])
                                                                    @component('admin.layouts.two-cols-search-row', ['items' => ['First Name', 'Faculty'], 'oldVals' => [isset($searchingVals) ? $searchingVals['firstname'] : '', isset($searchingVals) ? $searchingVals['faculty'] : '']])
                                                                    @endcomponent
                                                                  @endcomponent
                                                                </form> --}}

                                                                <div class="container">
                                                                        <li class="list-item">
                                                                            <table class="table" id="myTable">
                                                                                <thead>
                                                                                  <tr>
                                                                                    <th scope="col">ID</th>
                                                                                    <th scope="col">Student Name</th>
                                                                                    <th scope="col">Address</th>
                                                                                    <th scope="col">Age</th>
                                                                                    <th scope="col">Faculty</th>
                                                                                    <th scope="col">Birth Date</th>
                                                                                    <th scope="col">Started Date</th>
                                                                                  </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                      @foreach ($student as $student)
                                                                                    <tr>
                                                                                      <th scope="row">{{$student->id}}</th>
                                                                                         <td>{{$student->name}}</td>
                                                                                         <td>{{$student->address}}</td>
                                                                                         <td>{{$student->age}}</td>
                                                                                         <td>{{$student->faculty}}</td>
                                                                                         <td>{{$student->birthdate}}</td>
                                                                                         <td>{{$student->started_date}}</td>
                                                                    
                                                                                         <td><a href="{{route('student.edit', $student->id)}}" class="btn btn-warning"><i class="icon_check_alt2"></i></a>
                                                                                          <form action="{{route('student.destroy', $student->id)}}" method="POST">
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

                                                              
                                                            </div>
                                                            <!-- /.box-body -->
                                                          </div>
                                                              </section> 
                                                              <!-- /.content -->
                                                        </div><!--/box body-->
                                                    </div>
                                        </div>
                                    </div>
                                
                                    
                                </form>
                            </section>
                        </div>
                    </div>
            
        </section>
    </div>

@endsection