<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('backend.dashboard')}}" class="brand-link">
        <img src="{{asset('assets/backend/images/logo.jpg')}}" alt="Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">{{$siteInfo['site_name']}} Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if(@empty(auth()->user()->image))
                    <img src="{{asset('assets/backend/images/default.jpg')}}" class="img-circle elevation-2"
                         alt="User Image">
                @else
                    <img src="{{ auth()->user()->imagePath }}" class="img-circle elevation-2"
                         alt="User Image">
                @endif
            </div>
            <div class="info">
                <a href="javascript:void(0)" class="d-block">
                    {{ auth()->user()->getFullNameAttribute() }}
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-legacy nav-child-indent" data-widget="treeview"
                role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('backend.dashboard')}}"
                       class="nav-link {{ Request::segment(2) == "dashboard"?"active":"" }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('frontend.welcome')}}" class="nav-link" target="_blank">
                        <i class="nav-icon fas fa-fw fa-home"></i>
                        <p>
                            View Website
                        </p>
                    </a>
                </li>
                @can('view-users')
                    <li class="nav-item">
                        <a href="{{route('backend.users.index')}}"
                           class="nav-link {{ Request::segment(2) == "users"?"active":"" }}">
                            <i class="nav-icon fas fa-user-circle"></i>
                            <p>
                                Users
                            </p>
                        </a>
                    </li>
                @endcan
                @if(auth()->user()->can('view-member-education-level') || auth()->user()->can('view-members') || auth()->user()->can('view-classes') || auth()->user()->can('view-students'))

                    <li class="nav-item {{ in_array(Request::segment(2), ['education', 'members', 'entries', 'students','loans','paid-loans','payments','red-cherries', 'kiboko', 'kase', 'geolocation'])?"menu-open":"" }}">
                        <a href="javascript:void(0)"
                           class="nav-link {{ in_array(Request::segment(2), ['education', 'members', 'entries', 'students','loans','paid-loans','payments','red-cherries', 'kiboko', 'kase', 'geolocation'])?"active":"" }}">

                            <i class="nav-icon fas fa-user-friends"></i>
                            <p>
                                NAFAU
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @if(auth()->user()->can('view-members') || auth()->user()->can('view-member-education-level'))
                                <li class="nav-item {{ in_array(Request::segment(2), ['education', 'members'])?"menu-open":"" }}">
                                    <a href="javascript:void(0)"
                                       class="nav-link {{ in_array(Request::segment(2), ['education', 'members'])?"active":"" }}">
                                        <i class="nav-icon far fa-circle"></i>
                                        <p>
                                            Members
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        @can('view-member-education-level')
                                            <li class="nav-item">

                                                <a href="{{route('backend.education.index')}}"
                                                   class="nav-link  {{ Request::segment(2) == "education"?"active":"" }}">
                                                    <i class="nav-icon far fa-circle"></i>
                                                    <p>View Education Levels</p>
                                                </a>

                                            </li>
                                        @endcan
                                        @can('view-members')
                                            <li class="nav-item">

                                                <a href="{{route('backend.members.index')}}"
                                                   class="nav-link  {{ Request::segment(2) == "members"?"active":"" }}">
                                                    <i class="nav-icon far fa-circle"></i>
                                                    <p>View Members</p>
                                                </a>

                                            </li>
                                        @endcan
                                    </ul>
                                </li>
                            @endif
                            @if(auth()->user()->can('view-classes') || auth()->user()->can('view-students'))
                                <li class="nav-item {{ in_array(Request::segment(2), ['students', 'entries'])?"menu-open":"" }}">
                                    <a href="javascript:void(0)"
                                       class="nav-link {{ in_array(Request::segment(2), ['students', 'entries'])?"active":"" }}">
                                        <i class="nav-icon far fa-circle"></i>
                                        <p>
                                            Students
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>

                                    <ul class="nav nav-treeview">
                                        @can('view-classes')
                                            <li class="nav-item">

                                                <a href="{{route('backend.entries.index')}}"
                                                   class="nav-link  {{ Request::segment(2) == "entries"?"active":"" }}">
                                                    <i class="nav-icon far fa-circle"></i>
                                                    <p>View Classes</p>
                                                </a>

                                            </li>
                                        @endcan
                                        @can('view-students')
                                            <li class="nav-item">

                                                <a href="{{route('backend.students.index')}}"
                                                   class="nav-link  {{ Request::segment(2) == "students"?"active":"" }}">
                                                    <i class="nav-icon far fa-circle"></i>
                                                    <p>View Students</p>
                                                </a>

                                            </li>
                                        @endcan
                                    </ul>
                                </li>
                            @endif
                            @if(auth()->user()->can('view-coffee') || auth()->user()->can('view-payments'))
                                <li class="nav-item {{ in_array(Request::segment(2), ['red-cherries', 'kiboko', 'kase'])?"menu-open":"" }}">
                                    <a href="javascript:void(0)"
                                       class="nav-link {{ in_array(Request::segment(2), ['red-cherries', 'kiboko', 'kase'])?"active":"" }}">
                                        <i class="nav-icon far fa-circle"></i>
                                        <p>
                                            coffee
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        @can('view-loans')
                                            <li class="nav-item">

                                                <a href="{{route('backend.red-cherries.index')}}"
                                                   class="nav-link  {{ Request::segment(2) == "red-cherries"?"active":"" }}">
                                                    <i class="nav-icon far fa-circle"></i>
                                                    <p>Red Cherries</p>
                                                </a>

                                            </li>
                                        @endcan
                                        @can('view-payments')
                                            <li class="nav-item">

                                                <a href="{{route('backend.kiboko.index')}}"
                                                   class="nav-link  {{ Request::segment(2) == "kiboko"?"active":"" }}">
                                                    <i class="nav-icon far fa-circle"></i>
                                                    <p>Kiboko</p>
                                                </a>

                                            </li>
                                        @endcan
                                        @can('view-coffee')
                                            <li class="nav-item">
                                                <a href="{{route('backend.kase.index')}}"
                                                   class="nav-link  {{ Request::segment(2) == "kase"?"active":"" }}">
                                                    <i class="nav-icon far fa-circle"></i>
                                                    <p>kase</p>
                                                </a>
                                            </li>
                                        @endcan
                                    </ul>
                                </li>
                            @endif
                            @if(auth()->user()->can('view-loans') || auth()->user()->can('view-payments'))
                                <li class="nav-item {{ in_array(Request::segment(2), ['loans','paid-loans', 'payments'])?"menu-open":"" }}">
                                    <a href="javascript:void(0)"
                                       class="nav-link {{ in_array(Request::segment(2), ['loans','paid-loans', 'payments'])?"active":"" }}">
                                        <i class="nav-icon far fa-circle"></i>
                                        <p>
                                            Advance Payments
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        @can('view-loans')
                                            <li class="nav-item">

                                                <a href="{{route('backend.loans.index')}}"
                                                   class="nav-link  {{ Request::segment(2) == "loans"?"active":"" }}">
                                                    <i class="nav-icon far fa-circle"></i>
                                                    <p>View Loans</p>
                                                </a>

                                            </li>
                                        @endcan
                                        @can('view-paid-loans')
                                            <li class="nav-item">

                                                <a href="{{route('backend.paid-loans')}}"
                                                   class="nav-link  {{ Request::segment(2) == "paid-loans"?"active":"" }}">
                                                    <i class="nav-icon far fa-circle"></i>
                                                    <p>View Paid Loans</p>
                                                </a>

                                            </li>
                                        @endcan
                                        @can('view-payments')
                                            <li class="nav-item">

                                                <a href="{{route('backend.payments.index')}}"
                                                   class="nav-link  {{ Request::segment(2) == "payments"?"active":"" }}">
                                                    <i class="nav-icon far fa-circle"></i>
                                                    <p>View Payments</p>
                                                </a>

                                            </li>
                                        @endcan
                                    </ul>
                                </li>
                            @endif
                            @can('view-members-geolocation')
                                <li class="nav-item">

                                    <a href="{{route('backend.member-geolocation')}}"
                                       class="nav-link  {{ Request::segment(2) == "geolocation"?"active":"" }}">
                                        <i class="nav-icon far fa-circle"></i>
                                        <p>Geolocation</p>
                                    </a>

                                </li>
                            @endcan
                        </ul>
                    </li>
                @endif

                @if(auth()->user()->can('view-sliders') || auth()->user()->can('view-testimonials'))
                    <li class="nav-item {{ in_array(Request::segment(2), ['sliders', 'testimonials', 'reports'])?"menu-open":"" }}">
                        <a href="javascript:void(0)"
                           class="nav-link {{ in_array(Request::segment(2), ['sliders', 'testimonials', 'reports'])?"active":"" }}">

                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Site
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @if(auth()->user()->can('view-sliders') || auth()->user()->can('view-testimonials'))
                                <li class="nav-item {{ in_array(Request::segment(2), [ 'sliders', 'testimonials'])?"menu-open":"" }}">
                                    <a href="javascript:void(0)"
                                       class="nav-link {{ in_array(Request::segment(2), [ 'sliders', 'testimonials'])?"active":"" }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Home
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        @can('view-sliders')
                                            <li class="nav-item">

                                                <a href="{{route('backend.sliders.index')}}"
                                                   class="nav-link {{ Request::segment(2) == "sliders"?"active":"" }}">
                                                    <i class="nav-icon far fa-circle"></i>
                                                    <p>Sliders</p>
                                                </a>

                                            </li>
                                        @endcan
                                        @can('view-testimonials')
                                            <li class="nav-item">
                                                <a href="{{route('backend.testimonials.index')}}"
                                                   class="nav-link {{ Request::segment(2) == "testimonials"?"active":"" }}">
                                                    <i class="nav-icon far fa-circle"></i>
                                                    <p>Testimonials</p>
                                                </a>
                                            </li>
                                        @endcan
                                    </ul>
                                </li>
                            @endif

                        </ul>
                    </li>
                @endif
                @can('view-settings')
                    <li class="nav-item">

                        <a href="{{route('backend.site.get_settings')}}"
                           class="nav-link">
                            <i class="nav-icon fas fa-fw fa-cog"></i>
                            <p>
                                Settings
                            </p>
                        </a>

                    </li>
                @endcan
                @if(auth()->user()->can('view-roles'))
                    <li class="nav-item {{ in_array(Request::segment(2), ['roles'])?"menu-open":"" }}">
                        <a href="javascript:void(0)"
                           class="nav-link {{ in_array(Request::segment(2), ['roles'])?"active":"" }}">
                            <i class="nav-icon fas fa-fw fa-universal-access"></i>
                            <p>
                                Roles & Permissions
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('view-roles')
                                <li class="nav-item">

                                    <a href="{{route('backend.roles.index')}}"
                                       class="nav-link {{ Request::segment(2) == "roles"?"active":"" }}">
                                        <i class="nav-icon far fa-circle"></i>
                                        <p>Roles</p>
                                    </a>

                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('view-application-log')
                    <li class="nav-item">
                        <a href="{{route('backend.app_log')}}" class="nav-link">
                            <i class="nav-icon fa fa-list"></i>
                            <p>Application Log</p>
                        </a>
                    </li>
                @endcan
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
