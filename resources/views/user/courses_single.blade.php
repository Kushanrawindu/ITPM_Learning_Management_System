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
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div id="colorlib-logo"><a href="/">ABC</a></div>
                    </div>
                    <div class="col-md-10 text-right menu-1">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li class="has-dropdown active">
                                <a href="/courses">Courses</a>
                                <ul class="dropdown">
                                    <li><a href="/courses_single">Courses Single</a></li>
                                    <li><a href="#">Mobile Apps</a></li>
                                    <li><a href="#">Website</a></li>
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">WordPress</a></li>
                                </ul>
                            </li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/events">Events</a></li>
                            <li><a href="/news">News</a></li>
                            <li><a href="/contact">Contact</a></li>
                            {{-- <li class="btn-cta"><a href="#"><span>Free Trial</span></a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
               <li style="background-image: url(user/images/img_bg_2.jpg);">
                   <div class="overlay"></div>
                   <div class="container-fluid">
                       <div class="row">
                           <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                               <div class="slider-text-inner text-center">
                                   <h1>Courses Single</h1>
                                   <h2><span><a href="index.html">Home</a> | <a href="course.html">Courses</a> | Courses Single</span></h2>
                               </div>
                           </div>
                       </div>
                   </div>
               </li>
              </ul>
          </div>
    </aside>
    
    <div class="colorlib-classes">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="row row-pb-lg">
                        <div class="col-md-12 animate-box">
                            <div class="classes class-single">
                                <div class="classes-img"  style="background-image: url(user/images/classes-1.jpg);">
                                   
                                </div>
                                <div class="desc desc2">
                                    <h3><a href="#">Developing Mobile Apps</a></h3>
                                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                                    <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                                    <blockquote>
                                        The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.
                                    </blockquote>

                                    <h3>Notice</h3>
                                        @foreach ($course_materials as $courseMaterial)
                                        <blockquote>
                                            <h4>{{$courseMaterial->notice}}</h4>
                                        </blockquote>
                                
                                        @endforeach
                                   
                                    <h3>Week</h3>
                                        
                                            @foreach ($course_materials as $courseMaterial)
                                            
                                                <h4>{{$courseMaterial->week}}</h4>
                                                    <blockquote>
                                                        <li><a href="">{{$courseMaterial->filename}}</a></li>
                                                    </blockquote>
                                            
                                            @endforeach
                                        

                                    <h3>Assignment</h3>
                                        <blockquote>
                                            @foreach ($assignments as $assignment)
                                                <li><a href="/assignment">{{ $assignment->description}}</a></li>
                                            @endforeach
                                        </blockquote>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>	
    </div>
    
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>
@endsection