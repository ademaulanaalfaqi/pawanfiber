@extends('user.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Tambah Absen
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="myForm" action="{{ url('user/storeAbsensi') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" class="control-label">Foto</label>
                                        <input type="file" class="form-control" name="foto" accept="image/*;capture=camera" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="latitude" hidden>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="longitude" hidden>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-warning float-right"><i  class="fa fa-save"></i> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
        var x = document.getElementById("demo");

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition,showError);
            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        function showPosition(position) {
            document.querySelector('.myForm input[name = "latitude"]').value = position.coords.latitude;
            document.querySelector('.myForm input[name = "longitude"]').value = position.coords.longitude;
        }

        function showError(error) {
            switch(error.code){
                case error.PERMISSION_DENIED:
                    alert("Hidupkan GPS terlebih dahulu");
                    location.reload();
                    break;
            }
        }

        // function showPosition(position) {
        //     x.innerHTML = "Latitude: " + position.coords.latitude +
        //         "<br>Longitude: " + position.coords.longitude;
        // }
    </script>
@endsection
