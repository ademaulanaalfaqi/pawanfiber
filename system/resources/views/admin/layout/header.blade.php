<header class="header">
    <div class="page-brand">
        <a class="link" href="index.html">
            <span class="brand">Pawan Fiber</span>
            <span class="brand-mini">PF</span>
        </a>
    </div>
    <div class="flexbox flex-1">
        <!-- START TOP-LEFT TOOLBAR-->
        <ul class="nav navbar-toolbar">
            <li>
                <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
            </li>
        </ul>
        <!-- END TOP-LEFT TOOLBAR-->
        <!-- START TOP-RIGHT TOOLBAR-->
        <ul class="nav navbar-toolbar">
            <li class="dropdown dropdown-notification">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o rel"><span class="notify-signal"></span></i></a>
                <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                    <li class="dropdown-menu-header">
                        <div>
                            <span><strong>New</strong> Notifications</span>
                            <a class="pull-right" href="javascript:;">view all</a>
                        </div>
                    </li>
                    <li class="list-group list-group-divider scroller" data-height="240px" data-color="#71808f">
                        <div>
                            {{-- @foreach ($list_izin as $izin)
                                @if ($izin->status == 1)
                                    <a class="list-group-item" href="{{url('admin/izin')}}">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-default badge-big"><i class="fa fa-envelope"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">Pengajuan Izin</div><small class="text-muted">{{$izin->datapegawai->nama}}</small></div>
                                        </div>
                                    </a>                               
                                @endif                                
                            @endforeach --}}
                        </div>
                    </li>
                </ul>
            </li>
            <li class="dropdown dropdown-user">
                <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                    <span></span>{{request()->user()->nama}}<i class="fa fa-angle-down m-l-5"></i></a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html"><i class="fa fa-user"></i>Profile</a>
                    <a class="dropdown-item" href="{{url('logout')}}"><i class="fa fa-power-off"></i>Logout</a>
                </ul>
            </li>
        </ul>
        <!-- END TOP-RIGHT TOOLBAR-->
    </div>
</header>