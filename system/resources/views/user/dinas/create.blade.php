@extends('user.base')


@section('content')
    <div class="container">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
            integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@3.0.0/dist/geosearch.css" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
        <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
        <!-- Make sure you put this AFTER Leaflet's CSS -->
        <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
            integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
        <!-- Make sure you put this AFtER leaflet.js, when using with leaflet -->
        <script src="https://unpkg.com/leaflet-geosearch@3.0.0/dist/geosearch.umd.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
        <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('admin/dinas') }}" class="btn btn-dark "><i class="fas fa-arrow-left">
                    </i> Kembali</a>
                <div class="card mt-2">
                    <div class="card-header">
                        <strong> Tambah Data Izin / Cuti</strong>
                    </div>
                    <div class="card-body">
                        <form class="myForm" action="{{ url('user/dinas') }}" method="post">
                            @csrf
                            <div class="form-grup">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-3">
                                    <div class="form-grup">
                                        <label for="">Tanggal Mulai </label>
                                        <input type="date" class="form-control" name="tanggal_mulai">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-grup">
                                        <label for="">Tanggal Selesai</label>
                                        <input type="date" class="form-control" name="tanggal_selesai">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="">Deskripsi Dinas</label>
                                        <input type="text" class="form-control" name="deskripsi_dinas">
                                    </div>
                                </div>

                            </div>
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <div class="form-grup">

                                        <input type="text" class="form-control" id="longitude" name="longitude" hidden>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grup">

                                        <input type="text" class="form-control" id="latitude" name="latitude" hidden>
                                    </div>
                                </div>
                            </div>
                            <div id="map" class="mt-4">
                                <style>
                                    #map {

                                        height: 350px;

                                    }
                                </style>
                            </div>
                            <button class="btn btn-dark float-right mt-4"> <i class="mdi mdi-content-save"></i>
                                Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
        var mymap = L.map('map').setView([-1.8500164359192794, 109.97417449951173], 10);

        L.Control.geocoder({
            position: 'topleft'
        }).addTo(mymap);

        const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(mymap);

        var latInput = document.querySelector("[name=latitude]");
        var lngInput = document.querySelector("[name=longitude]");

        var curLocation = [-1.8500164359192794, 109.97417449951173];

        mymap.attributionControl.setPrefix(false);

        var marker = new L.marker(curLocation, {
            draggable: 'true',
        });

        marker.on('dragend', function(event) {
            var position = marker.getLatLng();
            marker.setLatLng(position, {
                draggable: 'true',
            }).bindPopup(position).update();
            $("#latitude").val(position.lat);
            $("#longitude").val(position.lng).keyup();
        });
        mymap.addLayer(marker);

        mymap.on("click", function(e) {
            var lat = e.latlng.lat;
            var lng = e.latlng.lng;
            if (!marker) {
                marker = L.marker(e.latlng).addTo(mymap);
            } else {
                marker.setLatLng(e.latlng);
            }
            latInput.value = lat;
            lngInput.value = lng;
        });
    </script>
@endsection
