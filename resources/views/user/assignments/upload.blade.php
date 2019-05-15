@extends('user.layouts.app')

@section('main-content')

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
                    <p>File Submission</p>
                </div>
        </div>
        <form action="{{route('submit.store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
        <div class="row">
                <div class="col-lg-12">
                    <section class="panel panel-default">

                        <div class="form-group">
                            <label for="name">Student ID</label>
                            <input type="text" class="form-control" name="studentID" id="studentID" placeholder="Enter Student ID">
                        </div>
                                  
                        <div class="form-group">
                            <label for="address">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter Subject">
                        </div>

                        <div class="form-group">
                            <label for="age">File</label>
                            <input type="file" class="form-control" name="file" id="file" placeholder="Enter Your File Here">
                        </div>

                        {{-- <header class="panel-heading">
                            Add Your Files
                        </header>

                        <div>
                            <form action="/file-upload" class="dropzone" id="dropzone"></form>
                        </div> --}}

                        <div class="form-group">
                            <form action="{{route('submit.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                            <button type="submit" class="btn btn-light">Submit</button>
                            <button type="reset" class="btn btn-light">Cancel</button>
                            </form>
                        </div>
                        {{-- <button type="button" class="btn btn-light"><a href="">Save Changes</a></button>
                        <button type="button" class="btn btn-dark"><a href="">Cancel</a></button> --}}
                        
                    </section>
                </div>
        </div>
        </form>
    </div>
</div>

@endsection