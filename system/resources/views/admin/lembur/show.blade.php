@extends('admin.base')
@section('content')
@include('admin.section.notif')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{url('admin/lembur')}}" class="btn btn-dark"><i class="fa fa-arrow-left"></i> Kembali</a>
                <div class="card mt-2">
                    <div class="card-body">
                        <h4>{{$lembur->nama}}</h4> <hr>
                        <p>
                            Tanggal : <strong>{{date('d F Y', strtotime($lembur->tanggal))}}</strong> <br>
                            Jam Mulai : <strong>{{date('H.i', strtotime($lembur->jam_mulai))}}</strong> <br>
                            Jam Selesai : <strong>{{date('H.i', strtotime($lembur->jam_selesai))}}</strong>
                        </p> <hr>
                        <p>
                            {{$lembur->aktifitas}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection