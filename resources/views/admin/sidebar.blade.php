@php
$usr = Auth::guard('web')->user();
@endphp
<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar menu-light ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div " >
            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Menu</label>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/dashboard') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>
                @if ($usr->can('role.create') || $usr->can('role.view') ||  $usr->can('role.edit') ||  $usr->can('role.delete'))
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-credit-card"></i></span><span class="pcoded-mtext">Manage Item</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{route('invoview')}} "> All </a></li>
                        <li><a href="{{route('invoadd')}} ">Add </a></li>
                        <li><a href="#">Pending List</a></li>
                        <li><a href="# ">Print Invoice List</a></li>
                        <li><a href="# ">Daily Report</a></li>
                    </ul>
                </li>
                @endif
                @if ($usr->can('role.create') || $usr->can('role.view') ||  $usr->can('role.edit') ||  $usr->can('role.delete'))
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Reports</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{route('system.report')}}">Reports</a></li>
                    </ul>
                </li>
                @endif
                @if ($usr->can('role.create') || $usr->can('role.view') ||  $usr->can('role.edit') ||  $usr->can('role.delete'))
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-settings"></i></span><span class="pcoded-mtext">System Setting</span></a>
                    <ul class="pcoded-submenu" {{ Route::is('roles.create') || Route::is('roles.index') || Route::is('roles.edit') || Route::is('roles.show') ? 'in' : '' }}>
                       
                        <li class="nav-item pcoded-hasmenu">
                            <a href="#!" class="nav-link "><span class="pcoded-mtext">Category</span></a>
                            <ul class="pcoded-submenu" {{ Route::is('roles.create') || Route::is('roles.index') || Route::is('roles.edit') || Route::is('roles.show') ? 'in' : '' }}>
                                @if ($usr->can('role.view'))
                                <li  class="{{ Route::is('roles.index')  ? 'active' : '' }}"><a href="{{route('viewindex')}}">View Categoies</a></li>
                                @endif
                                @if ($usr->can('role.view'))
                                <li class="{{ Route::is('roles.create')  ? 'active' : '' }}"><a href="{{route('viewcreate')}}">Add Category</a></li>
                                @endif
                            </ul>
                        </li>
                        <li class="nav-item pcoded-hasmenu">
                            <a href="#!" class="nav-link "><span class="pcoded-mtext">Item</span></a>
                            <ul class="pcoded-submenu" {{ Route::is('roles.create') || Route::is('roles.index') || Route::is('roles.edit') || Route::is('roles.show') ? 'in' : '' }}>
                                @if ($usr->can('role.view'))
                                <li class="{{ Route::is('roles.index')  ? 'active' : '' }}"><a href="{{route('viewpro')}}">View All</a></li>
                                @endif
                                @if ($usr->can('role.create'))
                                <li class="{{ Route::is('roles.create')  ? 'active' : '' }}"><a href="{{route('addpro')}}">Add Items</a></li>
                                @endif
                            </ul>
                        </li>
                        <li class="nav-item pcoded-hasmenu">
                            <a href="#!" class="nav-link "><span class="pcoded-mtext">Item Replenish</span></a>
                            <ul class="pcoded-submenu" {{ Route::is('roles.create') || Route::is('roles.index') || Route::is('roles.edit') || Route::is('roles.show') ? 'in' : '' }}>
                                @if ($usr->can('role.view'))
                                <li class="{{ Route::is('roles.index')  ? 'active' : '' }}"><a href=" {{route('replenish.view')}}">View All</a></li>
                                @endif
                                @if ($usr->can('role.create'))
                                <li class="{{ Route::is('roles.create')  ? 'active' : '' }}"><a href=" {{route('replenish.add')}}">Add </a></li>
                                @endif
                            </ul>
                        </li>
                        <li class="nav-item pcoded-hasmenu">
                            <a href="#!" class="nav-link "><span class="pcoded-mtext">Unit</span></a>
                            <ul class="pcoded-submenu" {{ Route::is('roles.create') || Route::is('roles.index') || Route::is('roles.edit') || Route::is('roles.show') ? 'in' : '' }}>
                                @if ($usr->can('role.view'))
                                <li class="{{ Route::is('roles.index')  ? 'active' : '' }}"><a href="{{route('viewunit')}}">View All</a></li>
                                @endif
                                @if ($usr->can('role.create'))
                                <li class="{{ Route::is('roles.create')  ? 'active' : '' }}"><a href="{{route('addunit')}}">Add Unit</a></li>
                                @endif
                            </ul>
                        </li>
                        <li class="nav-item pcoded-hasmenu">
                            <a href="#!" class="nav-link "><span class="pcoded-mtext">Ranks</span></a>
                            <ul class="pcoded-submenu" {{ Route::is('roles.create') || Route::is('roles.index') || Route::is('roles.edit') || Route::is('roles.show') ? 'in' : '' }}>
                                @if ($usr->can('role.view'))
                                <li class="{{ Route::is('roles.index')  ? 'active' : '' }}"><a href="{{route('viewrank')}}">view ranks</a></li>
                                @endif
                                @if ($usr->can('role.create'))
                                <li class="{{ Route::is('roles.create')  ? 'active' : '' }}"><a href="{{route('rankadd')}}">Add</a></li>
                                @endif
                            </ul>
                        </li>
                        <li class="nav-item pcoded-hasmenu">
                            <a href="#!" class="nav-link "><span class="pcoded-mtext">Service</span></a>
                            <ul class="pcoded-submenu" {{ Route::is('roles.create') || Route::is('roles.index') || Route::is('roles.edit') || Route::is('roles.show') ? 'in' : '' }}>
                                @if ($usr->can('role.view'))
                                <li  class="{{ Route::is('roles.index')  ? 'active' : '' }}"><a href="{{route('viewsupp')}}">AllService</a></li>
                                @endif
                                @if ($usr->can('role.create'))
                                <li class="{{ Route::is('roles.create')  ? 'active' : '' }}"><a href="{{route('supadd')}}">AddService</a></li>
                                @endif
                            </ul>
                        </li>
                        <li class="nav-item pcoded-hasmenu">
                            <a href="#!" class="nav-link "><span class="pcoded-mtext">Manage Personnel</span></a>
                            <ul class="pcoded-submenu" {{ Route::is('roles.create') || Route::is('roles.index') || Route::is('roles.edit') || Route::is('roles.show') ? 'in' : '' }}>
                                @if ($usr->can('role.view'))
                                <li  class="{{ Route::is('roles.index')  ? 'active' : '' }}"><a href="{{route('perview')}}">View</a></li>
                                @endif
                                @if ($usr->can('role.create'))
                                <li class="{{ Route::is('roles.create')  ? 'active' : '' }}"><a href="{{route('percreate')}}">Add</a></li>
                                @endif
                               
                            </ul>
                        </li>
                    </ul>
                </li>
                @endif
                @if ($usr->can('role.create') || $usr->can('role.view') ||  $usr->can('role.edit') ||  $usr->can('role.delete'))
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-settings"></i></span><span class="pcoded-mtext">Security Setting</span></a>
                    <ul class="pcoded-submenu" {{ Route::is('roles.create') || Route::is('roles.index') || Route::is('roles.edit') || Route::is('roles.show') ? 'in' : '' }}>
                       
                        <li class="nav-item pcoded-hasmenu">
                            <a href="#!" class="nav-link "><span class="pcoded-mtext">Roles and Permission</span></a>
                            <ul class="pcoded-submenu" {{ Route::is('roles.create') || Route::is('roles.index') || Route::is('roles.edit') || Route::is('roles.show') ? 'in' : '' }}>
                                @if ($usr->can('role.view'))
                                <li class="{{ Route::is('roles.index')  || Route::is('roles.edit') || Route::is('roles.create') || Route::is('roles.show') ? 'active' : '' }}"><a href="{{route('roles.index')}}">All Roles</a></li>
                                @endif
                                @if ($usr->can('role.view'))
                                <li  class="{{ Route::is('roles.create')  ? 'active' : '' }}" ><a href="{{route('roles.create')}}">Add Role</a></li>
                                @endif
                            </ul>
                        </li>
                        <li class="nav-item pcoded-hasmenu">
                            <a href="#!" class="nav-link "><span class="pcoded-mtext">Manage Profile</span></a>
                            <ul class="pcoded-submenu" {{ Route::is('roles.create') || Route::is('roles.index') || Route::is('roles.edit') || Route::is('roles.show') ? 'in' : '' }}>
                                <li ><a href="{{route('profileview')}}">Profile</a></li>
                                @if ($usr->can('role.view'))
                                <li><a href="{{route('password.view')}}">Password Setting</a></li>
                                @endif
                            </ul>
                        </li>
                        <li class="nav-item pcoded-hasmenu">
                            <a href="#!" class="nav-link "><span class="pcoded-mtext">Manage  Users</span></a>
                            <ul class="pcoded-submenu" {{ Route::is('roles.create') || Route::is('roles.index') || Route::is('roles.edit') || Route::is('roles.show') ? 'in' : '' }}>
                                @if ($usr->can('role.view'))
                                <li class="{{ Route::is('users.index')  || Route::is('users.edit') || Route::is('users.create')  || Route::is('users.show')  ? 'active' : '' }}"><a href="{{route('users.index')}}">User List</a></li>
                                @endif
                                @if ($usr->can('role.create'))
                                <li  class="{{ Route::is('users.create')  ? 'active' : '' }}"><a href="{{route('users.create')}}">Add User</a></li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                </li>
                @endif
                <li class="nav-item pcoded">
                    <a href="{{route('logout')}}" class="nav-link"><span class="pcoded-micon"><i class="fas fa-sign-out-alt"></i></span><span class="pcoded-mtext">Logout</span></a>
                </li>
                
            </ul>
            
        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->
