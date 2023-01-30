<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars"></i>
            </a>
        </li>

    </ul>
    <ul class="navbar-nav ml-auto">
{{--        @can('view-messages')--}}
{{--            <li class="nav-item">--}}
{{--                <a id="js-notifications" href="#" class="nav-link" data-toggle="modal"--}}
{{--                   data-target="#modal-notifications">--}}
{{--                    <i class="far fa-envelope"></i>--}}
{{--                    <span data-user="{{auth()->user()->id}}" id="js-notifications-badge" class="badge badge-success navbar-badge"--}}
{{--                          style="display: none;"></span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--        @endcan--}}
{{--        @can('view-notifications')--}}
{{--            <li class="nav-item dropdown">--}}
{{--                <a data-type="activities" class="nav-link" data-toggle="dropdown" href="#">--}}
{{--                    <i class="far fa-bell"></i>--}}
{{--                    <span id="js-activities-badge" class="badge badge-info navbar-badge" style="display: none;"></span>--}}
{{--                </a>--}}
{{--                <div id="js-activities-list" class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
{{--                    <div class="text-xs">--}}
{{--                        <a href="#" class="dropdown-item">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-8">--}}
{{--                                    Name of Activity--}}
{{--                                </div>--}}
{{--                                <div class="col-md-4">--}}
{{--                                    <span class="float-right text-muted ">3 minutes ago</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <span class="text-muted">Description of Activity</span>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--        @endcan--}}
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                @if(@empty(auth()->user()->image))
                    <img class="user-image img-circle elevation-2" src="{{asset('assets/backend/images/default.jpg')}}"
                         alt="User Image">
                @else
                    <img class="user-image img-circle elevation-2" src="{{ auth()->user()->imagePath}}">
                @endif
                <span class="d-none d-md-inline">
                    {{ auth()->user()->getFullNameAttribute() }}
                </span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right border-0">
                <!-- User image -->
                <li class="user-header bg-primary">
                    @if(@empty(auth()->user()->image))
                        <img class="img-circle elevation-2" src="{{asset('assets/backend/images/default.jpg')}}"
                             alt="User Image">
                    @else
                        <img class="img-circle elevation-2" src="{{ auth()->user()->imagePath}}" alt="User Image">
                    @endif
                    <p>
                        {{ auth()->user()->getFullNameAttribute() }}
                        <small>Member since {{ date_format(auth()->user()->created_at, 'j F Y')}}</small>
                    </p>
                </li>
                <li class="user-footer">

                    <a href="{{route('backend.get.profile', auth()->id())}}" class="btn btn-light btn-flat float-left">Profile</a>
                    <a class="btn btn-light btn-flat float-right" href="javascript:void(0)" onclick="logout();">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
