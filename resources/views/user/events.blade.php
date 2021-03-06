@extends('user.layouts.app')

@section('main-content')

<div class="colorlib-loader"></div>

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
                            <li class="btn-cta"><a href="#"><span>Free Trial</span></a></li>
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
                                   <h1>Upcoming Events</h1>
                                   <h2><span><a href="/welcome">Home</a> | Events</span></h2>
                               </div>
                           </div>
                       </div>
                   </div>
               </li>
              </ul>
          </div>
    </aside>
    
    <div class="colorlib-event">
        <div class="container">
            <div class="row">
                <div class="col-md-4 animate-box">
                    <div class="event-entry">
                        <div class="desc">
                            <p class="meta"><span class="day">19</span><span class="month">Apr</span></p>
                            <p class="organizer"><span>Organized by:</span> <span>Noah Henderson</span></p>
                            <h2><a href="/events">We Held Free Training for Basic Programming</a></h2>
                        </div>
                        <div class="location">
                            <span class="icon"><i class="icon-map"></i></span>
                            <p>291 South 21th Street, Suite 721 New York NY 10016</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="event-entry">
                        <div class="desc">
                            <p class="meta"><span class="day">19</span><span class="month">Apr</span></p>
                            <p class="organizer"><span>Organized by:</span> <span>Noah Henderson</span></p>
                            <h2><a href="/events">You're Invited 1st Anniversary of Eskwela</a></h2>
                        </div>
                        <div class="location">
                            <span class="icon"><i class="icon-map"></i></span>
                            <p>291 South 21th Street, Suite 721 New York NY 10016</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="event-entry">
                        <div class="desc">
                            <p class="meta"><span class="day">19</span><span class="month">Apr</span></p>
                            <p class="organizer"><span>Organized by:</span> <span>Noah Henderson</span></p>
                            <h2><a href="/events">Practice Workshop 2018</a></h2>
                        </div>
                        <div class="location">
                            <span class="icon"><i class="icon-map"></i></span>
                            <p>291 South 21th Street, Suite 721 New York NY 10016</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 animate-box">
                    <div class="event-entry">
                        <div class="desc">
                            <p class="meta"><span class="day">19</span><span class="month">Apr</span></p>
                            <p class="organizer"><span>Organized by:</span> <span>Noah Henderson</span></p>
                            <h2><a href="/eventsl">We Held Free Training for Basic Programming</a></h2>
                        </div>
                        <div class="location">
                            <span class="icon"><i class="icon-map"></i></span>
                            <p>291 South 21th Street, Suite 721 New York NY 10016</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="event-entry">
                        <div class="desc">
                            <p class="meta"><span class="day">19</span><span class="month">Apr</span></p>
                            <p class="organizer"><span>Organized by:</span> <span>Noah Henderson</span></p>
                            <h2><a href="/events">You're Invited 1st Anniversary of Eskwela</a></h2>
                        </div>
                        <div class="location">
                            <span class="icon"><i class="icon-map"></i></span>
                            <p>291 South 21th Street, Suite 721 New York NY 10016</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="event-entry">
                        <div class="desc">
                            <p class="meta"><span class="day">19</span><span class="month">Apr</span></p>
                            <p class="organizer"><span>Organized by:</span> <span>Noah Henderson</span></p>
                            <h2><a href="/eventsl">Practice Workshop 2018</a></h2>
                        </div>
                        <div class="location">
                            <span class="icon"><i class="icon-map"></i></span>
                            <p>291 South 21th Street, Suite 721 New York NY 10016</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="colorlib-subscribe" class="subs-img" style="background-image: url(user/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                    <h2>Subscribe Newsletter</h2>
                    <p>Subscribe our newsletter and get latest update</p>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3">
                    <div class="row">
                        <div class="col-md-12">
                        <form class="form-inline qbstp-header-subscribe">
                            <div class="col-three-forth">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" placeholder="Enter your email">
                                </div>
                            </div>
                            <div class="col-one-third">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Subscribe Now</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
    </div>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>


@endsection