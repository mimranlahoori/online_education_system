<!-- Sidebar -->
<!--
  Helper classes

  Adding .smini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
  Adding .smini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
    If you would like to disable the transition, just add the .no-transition along with one of the previous 2 classes

  Adding .smini-hidden to an element will hide it when the sidebar is in mini mode
  Adding .smini-visible to an element will show it only when the sidebar is in mini mode
  Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
-->
<nav id="sidebar">
    <!-- Sidebar Content -->
    <div class="sidebar-content">
        <!-- Side Header -->
        <div class="content-header justify-content-lg-center">
            <!-- Logo -->
            <div>
            <span class="smini-visible fw-bold tracking-wide fs-lg">
              c<span class="text-primary">b</span>
            </span>
                <a class="link-fx fw-bold tracking-wide mx-auto" href="/">
              <span class="smini-hidden">
                <i class="fa fa-fire text-primary"></i>
                <span class="fs-4 text-dual">Lahoori</span><span class="fs-4 text-primary">Code</span>
              </span>
                </a>
            </div>
            <!-- END Logo -->

            <!-- Options -->
            <div>
                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-sm btn-alt-danger d-lg-none" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-fw fa-times"></i>
                </button>
                <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
        </div>
        <!-- END Side Header -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
            <!-- Side User -->
            <div class="content-side content-side-user px-0 py-0">
                <!-- Visible only in mini mode -->
                <div class="smini-visible-block animated fadeIn px-3">
                    <img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar15.jpg') }}" alt="">
                </div>
                <!-- END Visible only in mini mode -->

                <!-- Visible only in normal mode -->
                <div class="smini-hidden text-center mx-auto">
                    <a class="img-link" href="javascript:void(0)">
                        <img class="img-avatar" src="{{ asset('media/avatars/avatar15.jpg') }}" alt="">
                    </a>
                    <ul class="list-inline mt-3 mb-0">
                        <li class="list-inline-item">
                            <a class="link-fx text-dual fs-sm fw-semibold text-uppercase"
                               href="{{route('profile.edit')}}">{{ Auth::user()->name }}</a>
                        </li>
                        <li class="list-inline-item">
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <a class="link-fx text-dual" data-toggle="layout" data-action="dark_mode_toggle" href="javascript:void(0)">
                                <i class="far fa-fw fa-moon" data-dark-mode-icon></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="link-fx text-dual" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    <i class="fa fa-sign-out-alt"></i>
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- END Visible only in normal mode -->
            </div>
            <!-- END Side User -->

            <!-- Side Navigation -->
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                            <i class="nav-main-link-icon fa fa-house-user"></i>
                            <span class="nav-main-link-name">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-main-heading">Class Managements</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                            <i class="nav-main-link-icon fa fa-house-user"></i>
                            <span class="nav-main-link-name">Students</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                            <i class="nav-main-link-icon fa fa-house-user"></i>
                            <span class="nav-main-link-name">Teachers</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                            <i class="nav-main-link-icon fa fa-house-user"></i>
                            <span class="nav-main-link-name">Staff</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                            <i class="nav-main-link-icon fa fa-house-user"></i>
                            <span class="nav-main-link-name">Attendance</span>
                        </a>
                    </li>
                    <li class="nav-main-heading">Course Managements</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                            <i class="nav-main-link-icon fa fa-house-user"></i>
                            <span class="nav-main-link-name">Courses</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                            <i class="nav-main-link-icon fa fa-house-user"></i>
                            <span class="nav-main-link-name">Categories</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                            <i class="nav-main-link-icon fa fa-house-user"></i>
                            <span class="nav-main-link-name">Exams</span>
                        </a>
                    </li>
                    <li class="nav-main-heading">Exams Managements</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                            <i class="nav-main-link-icon fa fa-house-user"></i>
                            <span class="nav-main-link-name">Roll No Slip</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                            <i class="nav-main-link-icon fa fa-house-user"></i>
                            <span class="nav-main-link-name">Make Quiz</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                            <i class="nav-main-link-icon fa fa-house-user"></i>
                            <span class="nav-main-link-name">Results</span>
                        </a>
                    </li>
                    <li class="nav-main-heading">Finance Managements</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                            <i class="nav-main-link-icon fa fa-house-user"></i>
                            <span class="nav-main-link-name">Fees</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                            <i class="nav-main-link-icon fa fa-house-user"></i>
                            <span class="nav-main-link-name">Teachers</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                            <i class="nav-main-link-icon fa fa-house-user"></i>
                            <span class="nav-main-link-name">Staff</span>
                        </a>
                    </li>

                    <li class="nav-main-heading">Settings</li>
                    <li class="nav-main-item{{ request()->is('pages/*') ? ' open' : '' }}">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                            <i class="nav-main-link-icon fa fa-lightbulb"></i>
                            <span class="nav-main-link-name">Users Managements</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->is('users') ? ' active' : '' }}" href="{{ route('users.index') }}">
                                    <span class="nav-main-link-name">Users</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->is('roles') ? ' active' : '' }}" href="{{ route('roles.index') }}">
                                    <span class="nav-main-link-name">Roles</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->is('permissions') ? ' active' : '' }}" href="{{ route('permissions.index') }}">
                                    <span class="nav-main-link-name">Permissions</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-item{{ request()->is('pages/*') ? ' open' : '' }}">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                            <i class="nav-main-link-icon fa fa-lightbulb"></i>
                            <span class="nav-main-link-name">Profile</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->is('profile') ? ' active' : '' }}" href="{{ route('profile.edit') }}">
                                    <span class="nav-main-link-name">Personal Info</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->is('profile/settings') ? ' active' : '' }}" href="{{ route('settings.index') }}">
                                    <span class="nav-main-link-name">Account Settings</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->is('profile/blank') ? ' active' : '' }}" href="{{ route('inbox.index') }}">
                                    <span class="nav-main-link-name">Inbox</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->is('profile/blank') ? ' active' : '' }}" href="{{ route('security.index') }}">
                                    <span class="nav-main-link-name">Security</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->is('profile/invoices') ? ' active' : '' }}" href="{{ route('invoices.index') }}">
                                    <span class="nav-main-link-name">Invoices</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="/">
                            <i class="nav-main-link-icon fa fa-globe"></i>
                            <span class="nav-main-link-name">Landing</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
    </div>
    <!-- Sidebar Content -->
</nav>
<!-- END Sidebar -->
