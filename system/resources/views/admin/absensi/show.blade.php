@extends('admin.base')
@section('content')
    <div class="container">
        <a href="{{url('admin/absensi')}}" class="btn btn-dark mb-1"><i class="fa fa-arrow-left"></i> Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="float-right" id="map" style="width: 100%; height: 450px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly"
        defer></script> --}}
@endsection
@push('script')
    <script type="module">
        var map = L.map('map').setView([-1.8169204, 109.987781], 13);
        
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
        
        <?php foreach ($list_absensi as $absensi) { ?>
            L.marker([<?= $absensi->latitude ?>, <?= $absensi->longitude ?>]).addTo(map).bindPopup('<?= $absensi->nama ?>');
        <?php } ?>

        // L.marker([<?= $absensi->latitude ?>, <?= $absensi->longitude ?>]).addTo(map).bindPopup('<?= $absensi->nama ?>');
                
    </script>
@endpush
