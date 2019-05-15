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
                        <p class="btn-apply"><a href="/login">Login Here</a></p>
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
                            <li class="active"><a href="/">Home</a></li>
                            <li class="has-dropdown">
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
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
               <li style="background-image: url(user/images/img_bg_1.jpg);">
                   <div class="overlay"></div>
                   <div class="container-fluid">
                       <div class="row">
                           <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                               <div class="slider-text-inner text-center">
                                   <h1>Best Online Learning System</h1>
                                   <p><a href="/register" class="btn btn-primary btn-lg btn-learn">Register Now</a></p>
                               </div>
                           </div>
                       </div>
                   </div>
               </li>
               <li style="background-image: url(user/images/img_bg_2.jpg);">
                   <div class="overlay"></div>
                   <div class="container-fluid">
                       <div class="row">
                           <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                               <div class="slider-text-inner text-center">
                                   <h1>Online Free Course</h1>
                                   <p><a href="/about" class="btn btn-primary btn-lg btn-learn">Free Trial</a></p>
                               </div>
                           </div>
                       </div>
                   </div>
               </li>
               <li style="background-image: url(user/images/img_bg_3.jpg);">
                   <div class="overlay"></div>
                   <div class="container-fluid">
                       <div class="row">
                           <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                               <div class="slider-text-inner text-center">
                                   <h1>Education is a Key to Success</h1>
                                   <p><a href="/register" class="btn btn-primary btn-lg btn-learn">Register Now</a></p>
                               </div>
                           </div>
                       </div>
                   </div>
               </li>
               <li style="background-image: url(user/images/img_bg_4.jpg);">
                   <div class="overlay"></div>
                   <div class="container-fluid">
                       <div class="row">
                           <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                               <div class="slider-text-inner text-center">
                                   <h1>Best Online Learning Center</h1>
                                   <p><a href="register" class="btn btn-primary btn-lg btn-learn">Register Now</a></p>
                               </div>
                           </div>
                       </div>
                   </div>
               </li>	
              </ul>
          </div>
    </aside>
    
    <div id="colorlib-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-4 intro-wrap">
                    <div class="intro-flex">
                        <div class="one-third color-1 animate-box">
                            <span class="icon"><i class="flaticon-market"></i></span>
                            <div class="desc">
                                <h3>Learn Courses Online</h3>
                                <p><a href="#" class="view-more">View More</a></p>
                            </div>
                        </div>
                        <div class="one-third color-2 animate-box">
                            <span class="icon"><i class="flaticon-open-book"></i></span>
                            <div class="desc">
                                <h3>Online Library Store</h3>
                                <p><a href="#" class="view-more">View More</a></p>
                            </div>
                        </div>
                        <div class="one-third color-3 animate-box">
                            <div class="desc2">
                                <h3>50% off in all selected Courses</h3>
                                <p><a href="#" class="view-more">View More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="about-desc animate-box">
                        <h2>Welcome to ABC</h2>
                        <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                        <div class="fancy-collapse-panel">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                     <div class="panel panel-default">
                         <div class="panel-heading" role="tab" id="headingOne">
                             <h4 class="panel-title">
                                 <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Why choose us?
                                 </a>
                             </h4>
                         </div>
                         <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                             <div class="panel-body">
                                 <div class="row">
                                              <div class="col-md-6">
                                                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                                              </div>
                                              <div class="col-md-6">
                                                  <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                              </div>
                                          </div>
                             </div>
                         </div>
                     </div>
                     <div class="panel panel-default">
                         <div class="panel-heading" role="tab" id="headingTwo">
                             <h4 class="panel-title">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What we do?
                                 </a>
                             </h4>
                         </div>
                         <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                             <div class="panel-body">
                                 <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                            <ul>
                                                <li>Separated they live in Bookmarksgrove right</li>
                                                <li>Separated they live in Bookmarksgrove right</li>
                                            </ul>
                             </div>
                         </div>
                     </div>
                     <div class="panel panel-default">
                         <div class="panel-heading" role="tab" id="headingThree">
                             <h4 class="panel-title">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Offer Services
                                 </a>
                             </h4>
                         </div>
                         <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                             <div class="panel-body">
                                 <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>	
                             </div>
                         </div>
                     </div>
                  </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <div id="colorlib-services">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center animate-box">
                    <div class="services">
                        <span class="icon">
                            <i class="flaticon-books"></i>
                        </span>
                        <div class="desc">
                            <h3>Professional Courses</h3>
                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <div class="services">
                        <span class="icon">
                            <i class="flaticon-professor"></i>
                        </span>
                        <div class="desc">
                            <h3>Experienced Instructor</h3>
                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <div class="services">
                        <span class="icon">
                            <i class="flaticon-book"></i>
                        </span>
                        <div class="desc">
                            <h3>Practical Training</h3>
                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <div class="services">
                        <span class="icon">
                            <i class="flaticon-diploma"></i>
                        </span>
                        <div class="desc">
                            <h3>Validated Certificate</h3>
                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="colorlib-counter" class="colorlib-counters" style="background-image: url(user/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="col-md-3 col-sm-6 animate-box">
                            <div class="counter-entry">
                                <span class="icon"><i class="flaticon-book"></i></span>
                                <div class="desc">
                                    <span class="colorlib-counter js-counter" data-from="0" data-to="1539" data-speed="5000" data-refresh-interval="50"></span>
                                    <span class="colorlib-counter-label">Courses</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 animate-box">
                            <div class="counter-entry">
                                <span class="icon"><i class="flaticon-student"></i></span>
                                <div class="desc">
                                    <span class="colorlib-counter js-counter" data-from="0" data-to="3653" data-speed="5000" data-refresh-interval="50"></span>
                                    <span class="colorlib-counter-label">Students</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 animate-box">
                            <div class="counter-entry">
                                <span class="icon"><i class="flaticon-professor"></i></span>
                                <div class="desc">
                                    <span class="colorlib-counter js-counter" data-from="0" data-to="2300" data-speed="5000" data-refresh-interval="50"></span>
                                    <span class="colorlib-counter-label">Teachers</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 animate-box">
                            <div class="counter-entry">
                                <span class="icon"><i class="flaticon-earth-globe"></i></span>
                                <div class="desc">
                                    <span class="colorlib-counter js-counter" data-from="0" data-to="200" data-speed="5000" data-refresh-interval="50"></span>
                                    <span class="colorlib-counter-label">Countries</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="colorlib-classes colorlib-light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                    <h2>Our Classes</h2>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 animate-box">
                    <div class="classes">
                        <div class="classes-img" style="background-image: url(user/images/classes-1.jpg);">
                            <span class="price text-center"><small>$450</small></span>
                        </div>
                        <div class="desc">
                            <h3><a href="/login">Developing Mobile Apps</a></h3>
                            <p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
                            <p><a href="/login" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="classes">
                        <div class="classes-img" style="background-image: url(user/images/classes-2.jpg);">
                            <span class="price text-center"><small>$450</small></span>
                        </div>
                        <div class="desc">
                            <h3><a href="/login">Convert PSD to HTML</a></h3>
                            <p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
                            <p><a href="/login" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="classes">
                        <div class="classes-img" style="background-image: url(user/images/classes-3.jpg);">
                            <span class="price text-center"><small>$450</small></span>
                        </div>
                        <div class="desc">
                            <h3><a href="/login">Convert HTML to WordPress</a></h3>
                            <p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
                            <p><a href="/login" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="classes">
                        <div class="classes-img" style="background-image: url(user/images/classes-4.jpg);">
                            <span class="price text-center"><small>$450</small></span>
                        </div>
                        <div class="desc">
                            <h3><a href="/login">Developing Mobile Apps</a></h3>
                            <p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
                            <p><a href="/login" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="classes">
                        <div class="classes-img" style="background-image: url(user/images/classes-5.jpg);">
                            <span class="price text-center"><small>$450</small></span>
                        </div>
                        <div class="desc">
                            <h3><a href="/login">Learned Smoke Effects</a></h3>
                            <p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
                            <p><a href="/login" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="classes">
                        <div class="classes-img" style="background-image: url(user/images/classes-6.jpg);">
                            <span class="price text-center"><small>$450</small></span>
                        </div>
                        <div class="desc">
                            <h3><a href="/login">Convert HTML to WordPress</a></h3>
                            <p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
                            <p><a href="/login" class="btn-learn">Learn More <i class="icon-arrow-right3"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>	
    </div>

    <div id="colorlib-testimony" class="testimony-img" style="background-image: url(user/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                    <h2>What Are The Students Says</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="row animate-box">
                        <div class="owl-carousel1">
                            <div class="item">
                                <div class="testimony-slide">
                                    <div class="testimony-wrap">
                                        <blockquote>
                                            <span>Sophia Foster</span>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                        </blockquote>
                                        <div class="figure-img" style="background-image: url(user/images/person1.jpg);"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-slide">
                                    <div class="testimony-wrap">
                                        <blockquote>
                                            <span>John Collins</span>
                                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                        </blockquote>
                                        <div class="figure-img" style="background-image: url(user/images/person2.jpg);"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-slide">
                                    <div class="testimony-wrap">
                                        <blockquote>
                                            <span>Adam Ross</span>
                                            <p>Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                        </blockquote>
                                        <div class="figure-img" style="background-image: url(user/images/person3.jpg);"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="colorlib-trainers">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                    <h2>Our Experienced Professor</h2>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-3 animate-box">
                    <div class="trainers-entry">
                        <div class="trainer-img" style="background-image: url(user/images/person1.jpg)"></div>
                        <div class="desc">
                            <h3>Olivia Young</h3>
                            <span>Teacher</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 animate-box">
                    <div class="trainers-entry">
                        <div class="trainer-img" style="background-image: url(user/images/person2.jpg)"></div>
                        <div class="desc">
                            <h3>Daniel Anderson</h3>
                            <span>Professor</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 animate-box">
                    <div class="trainers-entry">
                        <div class="trainer-img" style="background-image: url(user/images/person3.jpg)"></div>
                        <div class="desc">
                            <h3>David Brook</h3>
                            <span>Teacher</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 animate-box">
                    <div class="trainers-entry">
                        <div class="trainer-img" style="background-image: url(user/images/person4.jpg)"></div>
                        <div class="desc">
                            <h3>Brigeth Smith</h3>
                            <span>Teacher</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="colorlib-event">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                    <h2>Upcoming Events</h2>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
                </div>
            </div>
            <div class="event-flex row-pb-sm">
                <div class="half event-img animate-box" style="background-image: url(user/images/event.jpg);">
                </div>
                <div class="half">
                    <div class="row">
                        <div class="col-md-12 animate-box">
                            <div class="event-entry">
                                <div class="desc">
                                    <p class="meta"><span class="day">19</span><span class="month">Apr</span></p>
                                    <p class="organizer"><span>Organized by:</span> <span>Noah Henderson</span></p>
                                    <h2><a href="/event">We Held Free Training for Basic Programming</a></h2>
                                </div>
                                <div class="location">
                                    <span class="icon"><i class="icon-map"></i></span>
                                    <p>291 South 21th Street, Suite 721 New York NY 10016</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 animate-box">
                            <div class="event-entry">
                                <div class="desc">
                                    <p class="meta"><span class="day">19</span><span class="month">Apr</span></p>
                                    <p class="organizer"><span>Organized by:</span> <span>Noah Henderson</span></p>
                                    <h2><a href="/event">You're Invited 1st Anniversary of ABC</a></h2>
                                </div>
                                <div class="location">
                                    <span class="icon"><i class="icon-map"></i></span>
                                    <p>291 South 21th Street, Suite 721 New York NY 10016</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 animate-box">
                            <div class="event-entry">
                                <div class="desc">
                                    <p class="meta"><span class="day">19</span><span class="month">Apr</span></p>
                                    <p class="organizer"><span>Organized by:</span> <span>Noah Henderson</span></p>
                                    <h2><a href="/event">Practice Workshop 2018</a></h2>
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
        </div>
    </div>


    <div class="colorlib-blog colorlib-light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                    <h2>Recent News</h2>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 animate-box">
                    <article class="article-entry">
                        <a href="/news" class="blog-img" style="background-image: url(user/images/blog-1.jpg);">
                            <p class="meta"><span class="day">18</span><span class="month">Apr</span></p>
                        </a>
                        <div class="desc">
                            <h2><a href="/news">Creating Mobile Apps</a></h2>
                            <p class="admin"><span>Posted by:</span> <span>James Smith</span></p>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-6">
                    <div class="f-blog animate-box">
                        <a href="/news" class="blog-img" style="background-image: url(user/images/blog-1.jpg);">
                        </a>
                        <div class="desc">
                            <h2><a href="/news">How to Create Website in Scratch</a></h2>
                            <p class="admin"><span>04 March 2018</span></p>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                        </div>
                    </div>
                    <div class="f-blog animate-box">
                        <a href="/news" class="blog-img" style="background-image: url(user/images/blog-2.jpg);">
                        </a>
                        <div class="desc">
                            <h2><a href="/news">How to Convert PSD File to HTML File?</a></h2>
                            <p class="admin"><span>04 March 2018</span></p>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                        </div>
                    </div>
                    <div class="f-blog animate-box">
                        <a href="/news" class="blog-img" style="background-image: url(user/images/blog-3.jpg);">
                        </a>
                        <div class="desc">
                            <h2><a href="/news">How to Build Games App in Mobile</a></h2>
                            <p class="admin"><span>04 March 2018</span></p>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
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
    
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>


@endsection