<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
    <!-- BEGIN: load jquery -->
    <script src="{{ asset('js/jquery.js') }}" type="text/javascript"></script>
    <!-- END: load jquery -->
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            setupLeftMenu();
            setSidebarHeight();
        });
    </script>

</head>

<body>
    <div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">
                <div class="floatleft logo">
                    <img src="{{ asset('img/livelogo.png') }}" alt="Logo" />
                </div>
                <div class="floatleft middle">

                </div>
                <div class="floatright">
                    <div class="floatleft">
                        <img src="{{ asset('img/img-profile.jpg') }}" alt="Profile Pic" />
                    </div>
                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft">
                            <li><a href="{{ route('logout') }}">{{ __('Logout') }}</a></li>
                        </ul>
                    </div>
                    <a href="{{ route('change-language', ['en']) }}">English</a>
                    <a href="{{ route('change-language', ['vi']) }}">Tiếng Việt</a>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <div class="grid_12">
            <ul class="nav main">
                <li class="ic-dashboard"><a href="{{ route('home') }}"><span>{{ __('Dashboard') }}</span></a>
                </li>
                <li class="ic-form-style"><a href=""><span>{{ __('User Profile') }}</span></a></li>
                <li class="ic-typography"><a href="changepassword.php"><span>{{ __('Change Password') }}</span></a>
                </li>

            </ul>
        </div>
        <div class="clear">
        </div>
        <div class="grid_2">
            <div class="box sidemenu">
                <div class="block" id="section-menu">
                    <ul class="section menu">
                        <li><a class="menuitem">{{ __('Class Option') }}</a>
                            <ul class="submenu">
                                <li><a href="{{ route('classes.create') }}">{{ __('Add Class') }}</a> </li>
                                <li><a href="{{ route('classes.index') }}">{{ __('Class List') }}</a> </li>
                            </ul>
                        </li>
                        <li><a class="menuitem">{{ __('Student Option') }}</a>
                            <ul class="submenu">
                                <li><a href="{{ route('students.create') }}">{{ __('Add Student') }}</a> </li>
                                <li><a href="{{ route('students.index') }}">{{ __('Student List') }}</a> </li>
                            </ul>
                        </li>
                        <li><a class="menuitem">{{ __('Other Option') }}</a>
                            <ul class="submenu">
                                <li><a href="{{ route('student_class.create') }}">{{ __('Register Class') }}</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        @yield('content')
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
    <div id="site_info">
        <p>
            &copy; Copyright <a href="http://trainingwithliveproject.com">Training with live project</a>. All Rights
            Reserved.
        </p>
    </div>
</body>

</html>
