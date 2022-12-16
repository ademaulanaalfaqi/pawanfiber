@section('notif')
    <li class="dropdown dropdown-notification">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown"><i
                class="fa fa-bell-o rel"><sup>{{$total_pengajuan}}</sup></i></a>
        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media">
            <li class="dropdown-menu-header">
                <div>
                    <span><strong>New</strong> Notifications</span>
                    <a class="pull-right" href="javascript:;">view all</a>
                </div>
            </li>
            <li class="list-group list-group-divider scroller" data-height="240px" data-color="#71808f">
                <div>
                    @foreach ($list_izin as $izin)
                        @if ($izin->status == 1)
                            <a class="list-group-item" href="{{ url('admin/izin') }}">
                                <div class="media">
                                    <div class="media-img">
                                        <span class="badge badge-default badge-big"><i
                                                class="fa fa-envelope"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <div class="font-13">Pengajuan Izin</div><small
                                            class="text-muted">{{ $izin->datapegawai->nama }}</small>
                                    </div>
                                </div>
                            </a>
                        @endif
                    @endforeach
                </div>
            </li>
        </ul>
    </li>
@endsection