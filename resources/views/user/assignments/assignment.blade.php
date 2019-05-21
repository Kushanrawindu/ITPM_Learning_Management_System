@extends('user.layouts.app')

@section('main-content')
<div id="page">
    <nav class="colorlib-nav" role="navigation">
        <div class="upper-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-4">
                        <p>Welcome to ABC</p>
                    </div>
                    <div class="col-xs-6 col-md-push-2 text-right">
                        <p>
                            <ul class="colorlib-social-icons">
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            </ul>
                        </p>
                        <p class="btn-apply"><a href="#">Apply Now</a></p>
                    </div>
                </div>
            </div>
        </div>

        
    </nav>
    <div class="colorlib-classes">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                        <h2>Assignment Submission</h2>
                        <p>Submission Status</p>
                    </div>
                    
                </div>
                <div>
                    
                        
                        <table class="table table-striped">
                            @foreach($assignments as $assignment)
                                {{-- <tr>
                                    <td>{{$assignment->id}}</td>
                                    <td>{{$assignment->subName}}</td>
                                    <td>{{$assignment->description}}</td>
                                    <td>{{$assignment->date}}</td>
                                </tr> --}}
                                <tbody>
                                    <tr>
                            
                                        <td>Submission Status</td>
                                        <td>Not Attempt</td>
                                        
                                      </tr>
                                      <tr>
                                        
                                        <td>Grading Status</td>
                                        <td>Not Graded</td>
                                        
                                      </tr>
                                      <tr>
                                        
                                        <td>Due Date</td>
                                        
                                            <td>{{ $assignment->date}}</td>
                                        
                                      </tr>
                                      <tr>
                                        
                                        <td>Time Remaining</td>
                                        <td></td>
                                        
                                      </tr>
                                      <tr>
                                        
                                        <td>Submission comments</td>
                                        <td></td>
                                        
                                      </tr>
                                </tbody>
                            @endforeach
                        </table>

                    <div>
                        <button type="button" class="btn btn-outline-success"><a href="/assignment/upload">Add Submission</a></button>
                    </div>

                </div>
                <div class="row">
    
                </div>
            </div>	
        </div>
</div>
@endsection