<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown user user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        {{ session('active_name') }}
                    </a>

                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <!-- Dropdown Avatar -->
                        <li class="user-header" style="background: rgb(52,58,64)">
                            <img src="{{ asset('dist/img/avatar5.png')}}" class="img-circle elevation-2" alt="User Image">
                            <p class="text-white">
                                {{ session('active_name') }} <br>
                                <small>{{ session('active_id') }}</small>
                            </p>
                        </li>
                        <!-- Dropdown Footer -->
                        <li class="user-footer">
                            <div class="float-right">
                                <a href="/Auth/logout" class="btn btn-default btn-flat"><i class="fas fa-sign-out-alt"></i> Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
