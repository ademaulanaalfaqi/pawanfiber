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
                <img src="{{ url('public/admin') }}/html/dist/assets/img/admin-avatar.png" width="45px" />
            </div>
            <div class="admin-info">
                <div class="font-strong">
                    {{request()->user()->nama}}
                </div>
                <small>Administrator</small>
            </div>
        </div>
        <ul class="side-menu metismenu">
            <li class="{{ checkRouteActive('admin/dashboard') }}">
                <a class="active" href="{{ url('admin/dashboard') }}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li class="{{ checkRouteActive('admin/datapegawai') }} {{ checkRouteActive('admin/datapegawai/create') }} {{ checkRouteActive('admin/datapegawai/{datapegawai}') }} {{ checkRouteActive('admin/datapegawai/{datapegawai}/edit') }}">
                <a class="active" href="{{ url('admin/datapegawai') }}"><i class="sidebar-item-icon fa fa-user"></i>
                    <span class="nav-label">Data Pegawai</span>
                </a>
            </li>
            <li class="{{ checkRouteActive('admin/absensi') }} {{ checkRouteActive('admin/absensi/{absensi}') }}">
                <a class="active" href="{{ url('admin/absensi') }}"><i class="sidebar-item-icon fa fa-table-list"></i>
                    <span class="nav-label">Absensi</span>
                </a>
            </li>
            <li class="{{ checkRouteActive('admin/lembur') }} {{ checkRouteActive('admin/lembur/{lembur}') }}">
                <a class="active" href="{{ url('admin/lembur') }}"><i class="sidebar-item-icon fa fa-file"></i>
                    <span class="nav-label">Lembur</span>
                </a>
            </li>
            <li class="{{ checkRouteActive('admin/izin') }} {{ checkRouteActive('admin/izin/create') }} {{ checkRouteActive('admin/izin/{izin}') }}">
                <a class="active" href="{{ url('admin/izin') }}"><i class="sidebar-item-icon fa fa-envelope"></i>
                    <span class="nav-label">Izin dan Cuti</span>
                </a>
            </li>
            <li class="{{ checkRouteActive('admin/dinas') }} {{ checkRouteActive('admin/dinas/{dinas}') }}">
                <a class="active" href="{{ url('admin/dinas') }}"><i class="sidebar-item-icon fa fa-plane"></i>
                    <span class="nav-label">Dinas</span>
                </a>
            </li>
            <li class="{{ checkRouteActive('admin/admin') }} {{ checkRouteActive('admin/admin/create') }}{{ checkRouteActive('admin/admin/{admin}/edit') }}">
                <a class="active" href="{{ url('admin/admin') }}"><i class="sidebar-item-icon fa fa-user-plus"></i>
                    <span class="nav-label">Admin Web</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
