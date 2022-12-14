@php
function checkRouteActive($route)
{
    if (Route::current()->uri == $route) {
        return 'active';
    }
}
@endphp

<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img src="{{url('public', request()->user()->foto)}}" width="45px" />
            </div>
            <div class="admin-info">
                <div class="font-strong">
                    {{request()->user()->nama}}
                </div>
                <small>User</small>
            </div>
        </div>
        <ul class="side-menu metismenu">
            <li class="{{ checkRouteActive('user/dashboard') }}">
                <a class="active" href="{{ url('user/dashboard') }}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li class="{{ checkRouteActive('user/absensi') }}">
                <a class="active" href="{{ url('user/absensi') }}"><i class="sidebar-item-icon fa fa-table"></i>
                    <span class="nav-label">Absensi</span>
                </a>
            </li>
            <li class="{{ checkRouteActive('user/lembur') }}">
                <a class="active" href="{{ url('user/lembur') }}"><i class="sidebar-item-icon fa fa-file"></i>
                    <span class="nav-label">Lembur</span>
                </a>
            </li>
            <li class="{{ checkRouteActive('user/izin') }}">
                <a class="active" href="{{ url('user/izin') }}"><i class="sidebar-item-icon fa fa-file"></i>
                    <span class="nav-label">Izin dan Cuti</span>
                </a>
            </li>
            <li class="{{ checkRouteActive('user/dinas') }}">
                <a class="active" href="{{ url('user/dinas') }}"><i class="sidebar-item-icon fa fa-plane"></i>
                    <span class="nav-label">Dinas</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
