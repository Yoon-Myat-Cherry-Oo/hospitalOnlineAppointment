<nav class="sidebar sidebar-offcanvas" id="sidebar" style="
    background: #9796f0;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #fbc7d4, #9796f0);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #fbc7d4, #9796f0); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="{{ route('userProfile') }}" class="nav-link">
          <div class="nav-profile-image">
            @if (isset(Auth::user()->image))
            <img src="{{ asset('/admin/assets/userImg/'.Auth::user()->image) }}" alt="profile">
            @else
            <img src="{{ asset('/admin/assets/user.jpg') }}" alt="profile">
            @endif
            <span class="login-status online"></span>

            <!--change to offline or busy as needed-->
          </div>
          <div class="nav-profile-text d-flex flex-column">
            <span class="font-weight-bold mb-2">{{ Auth::user()->name }}</span>
            {{-- <span class="text-secondary text-small">Project Manager</span> --}}
          </div>
          <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('overView') }}">
          <span class="menu-title">Dashboard</span>
          <i class="mdi mdi-home menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('doctorList') }}">
          <span class="menu-title">Doctors</span>
          <i class="mdi mdi-doctor menu-icon"></i>

        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('patientList') }}">
          <span class="menu-title">Patients</span>
          <i class="mdi mdi-account-outline menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('appointmentList') }}">
          <span class="menu-title">Appointments</span>
          <i class="mdi mdi-calendar menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('newsList') }}">
          <span class="menu-title">News</span>
          <i class="mdi mdi-newspaper menu-icon"></i>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" href="{{ route('userChangePwd',Auth::user()->user_id) }}">
          <span class="menu-title">Change Password</span>
          <i class="mdi mdi-key-plus menu-icon"></i>
        </a>
      </li> --}}

      {{-- <li class="nav-item">
        <a class="nav-link" href="{{ route('userChangePwd',Auth::user()->user_id) }}">
          <span class="menu-title">Change Password</span>
          <i class="mdi mdi-key-plus menu-icon"></i>
        </a>
      </li> --}}
      {{-- <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
          <span class="menu-title">Sample Pages</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-medical-bag menu-icon"></i>
        </a>
        <div class="collapse" id="general-pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
          </ul>
        </div>
      </li> --}}
      {{-- <li class="nav-item sidebar-actions">
        <span class="nav-link">
          <div class="border-bottom">
            <h6 class="font-weight-normal mb-3">Projects</h6>
          </div>
          <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>
          <div class="mt-4">
            <div class="border-bottom">
              <p class="text-secondary">Categories</p>
            </div>
            <ul class="gradient-bullet-list mt-4">
              <li>Free</li>
              <li>Pro</li>
            </ul>
          </div>
        </span>
      </li> --}}
    </ul>
  </nav>
