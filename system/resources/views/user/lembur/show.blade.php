@extends('user.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
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