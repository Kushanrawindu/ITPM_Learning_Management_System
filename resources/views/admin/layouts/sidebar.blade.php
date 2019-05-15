<!--sidebar start-->
<aside>
        <div id="sidebar" class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu">
            <li class="active">
              <a class="" href="">
                            <i class="icon_house_alt"></i>
                            <span>Dashboard</span>
                        </a>
            </li>
            {{-- <li class="sub-menu">
              <a href="{{route('course.index')}}" class="">
                            <i class="icon_document_alt"></i>
                            <span>Courses</span>
                            
                        </a>
             
            </li> --}}

<li class="sub-menu">
    <a href="javascript:;" class="">
                  <i class="icon_desktop"></i>
                  <span>Courses</span>
                  <span class="menu-arrow arrow_carrot-right"></span>
    </a>
    <ul class="sub">
        <li class="sub-menu">
            <a href="{{route('course.index')}}" class="">
                          <i class="icon_document_alt"></i>
                          <span>Manage Courses</span>
                          
            </a>
           
        </li>

        <li class="sub-menu">
              <a href="{{route('courseMaterials.index')}}" class="">
                            <i class="icon_document_alt"></i>
                            <span>Subject Materials</span>
                            
              </a>
             
        </li>
    </ul>
  </li>

  <li class="sub-menu">
              <a href="javascript:;" class="">
                            <i class="icon_desktop"></i>
                            <span>Teachers</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                        </a>
              <ul class="sub">
              <li><a class="" href="{{route('teacher.index')}}">
                          <span>Lecturers</span>
                        </a>
                </li>

                <li><a class="" href="general.html">
                            <span>Instructors</span>
                          </a>
                </li>   

                <li><a class="" href="{{route('teacher.index')}}">
                    <span>All Associate Teachers</span>
                  </a>
                </li>
                
              </ul>
  </li>
            {{-- <li>
              <a class="" href="widgets.html">
                            <i class="icon_genius"></i>
                            <span>Widgets</span>
                        </a>
            </li>
            <li>
              <a class="" href="chart-chartjs.html">
                            <i class="icon_piechart"></i>
                            <span>Charts</span>
    
                        </a>
    
            </li> --}}

            <li class="sub-menu">
              <a href="javascript:;" class="">
                            <i class="icon_table"></i>
                            <span>Students</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                        </a>
              <ul class="sub">
              <li><a class="" href="{{route('student.index')}}">Add Students</a></li>
                <li><a class="" href="basic_table.html">All Students</a></li>
              </ul>
            </li>
    
            <li class="sub-menu">
              <a href="javascript:;" class="">
                            <i class="icon_table"></i>
                            <span>Assignments</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                        </a>
              <ul class="sub">
                <li><a class="" href="{{route('assignment.index')}}">Add Assignments</a></li>
                <li><a class="" href="{{route('uploadedAssignment.index')}}">Uploaded Assignments</a></li>
              </ul>
              
            </li>
    
            <li class="sub-menu">
              <a href="javascript:;" class="">
                            <i class="icon_documents_alt"></i>
                            <span>Pages</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                        </a>
              <ul class="sub">
                <li><a class="" href="profile.html">Profile</a></li>
                <li><a class="" href="login.html"><span>Login Page</span></a></li>
                <li><a class="" href="contact.html"><span>Contact Page</span></a></li>
                <li><a class="" href="blank.html">Blank Page</a></li>
                <li><a class="" href="404.html">404 Error</a></li>
              </ul>
            </li>
    
          </ul>
          <!-- sidebar menu end-->
        </div>
</aside>
      <!--sidebar end-->