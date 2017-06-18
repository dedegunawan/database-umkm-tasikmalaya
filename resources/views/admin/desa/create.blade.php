@extends('admin.layout')

@section('content')
<!--banner-->
<div class="banner">

        <h2>
        <a href="<?=route('admin.dashboard');?>">Home</a>
        <i class="fa fa-angle-right"></i>
        <a href="<?=route('admin.desa.index');?>">Desa</a>
        <i class="fa fa-angle-right"></i>
        <span>Tambah Desa Baru</span>

        </h2>
</div>
<!--//banner-->
<!--content-->
<div class="" style="min-height:500px">
    <div class="col-md-5 graph-box1 clearfix">
        <div class="grid-1">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul style="list-style-type:none">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{csrf_field()}}
                            <label for="kode_login">Kode Login <span class="text-danger">*</span></label>
                            <input
                                type="text"
                                class="form-control alphanumeric"
                                id="kode_login"
                                name="kode_login"
                                placeholder="Kode Login"
                                required="true"
                                value="{{old('kode_login')}}"
                                >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password">Password Login <span class="text-danger">*</span></label>
                            <input
                            type="password"
                            class="form-control"
                            id="password"
                            name="password"
                            placeholder="Password Login"
                            required="true"
                            value="{{old('password')}}"
                            >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="konfirmasi_password">Konfirmasi Password <span class="text-danger">*</span></label>
                            <input
                            type="password"
                            class="form-control"
                            id="konfirmasi_password"
                            name="konfirmasi_password"
                            placeholder="Konfirmasi Password"
                            required="true"
                            value="{{old('konfirmasi_password')}}"
                            >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nama_desa">Nama Desa  <span class="text-danger">*</span></label>
                            <input
                            type="text"
                            class="form-control"
                            id="nama_desa"
                            name="nama_desa"
                            placeholder="Nama Desa"
                            required="true"
                            value="{{old('nama_desa')}}"
                            >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nama_kepala_desa">Nama Kepala Desa  <span class="text-danger">*</span></label>
                            <input
                            type="text"
                            class="form-control"
                            id="nama_kepala_desa"
                            name="nama_kepala_desa"
                            placeholder="Nama Kepala Desa"
                            required="true"
                            value="{{old('nama_kepala_desa')}}"
                            >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="latitude">Latitude Google Maps</label>
                            <input
                            type="text"
                            class="form-control"
                            id="latitude"
                            name="latitude"
                            placeholder="Latitude Google Maps"
                            readonly="readonly"
                            value="{{old('latitude')}}"
                            >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="longitude">Longitude Google Maps</label>
                            <input
                            type="text"
                            class="form-control"
                            id="longitude"
                            name="longitude"
                            placeholder="Longitude Google Maps"
                            readonly="readonly"
                            value="{{old('longitude')}}"
                            >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="latitude">Logo Desa</label>
                            <input
                            type="file"
                            class="form-control"
                            id="logo_desa"
                            name="logo_desa"
                            placeholder="Logo Desa"
                            readonly="readonly"
                            value="{{old('logo_desa')}}"
                            >
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            Preview Logo
                            <img src="" id="previewImage" style="max-width:100%;max-height:200px;"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-save"></i> Simpan
                        </button>
                        <a href="{{route('admin.desa.index')}}" class="btn btn-default">
                            <i class="fa fa-close"></i> Batal
                        </a>
                    </div>
                    <div class="col-md-12">
                        <br />
                        Keterangan : <br />
                         (<span class="text-danger">*</span>) : haru diisi.
                    </div>

                </div>
            </form>
        </div>
    </div>
    <div class="col-md-7 graph-box1 clearfix">
        <div class="grid-1">
             <input id="pac-input" class="controls form-control" type="text" placeholder="Cari Nama Desa" style="max-width:300px">
             <div id="map"></div>
        </div>
    </div>
@stop

@section('body_after')

<script src="{{url('/assets/js/alphanumeric.js')}}">
</script>

<script src="{{url('/assets/js/preview-image.js')}}">
</script>
<script>
$(document).on('ready', function() {
    previewImage("#logo_desa", "#previewImage");
});
</script>

<script>
function setterLatitudeLongitude(latLong) {
    //console.log(latLong);
    document.getElementById("latitude").value = latLong.position.lat();
    document.getElementById("longitude").value = latLong.position.lng();
}
function handleEventLatitudeLongitude(evt) {
    //console.log(evt);
    document.getElementById("latitude").value = evt.latLng.lat();
    document.getElementById("longitude").value = evt.latLng.lng();
}
  function initMap() {
    var defined_lat = {{old('latitude')?old('latitude'):-7.3626831}};
    var defined_lng = {{old('longitude')?old('longitude'):108.1137813}};
    var jatiwaras = {lat: defined_lat, lng: defined_lng};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 13,
      center: jatiwaras
    });

    // Create the search box and link it to the UI element.
    var input = document.getElementById('pac-input');
    var searchBox = new google.maps.places.SearchBox(input);
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

    // Bias the SearchBox results towards current map's viewport.
    map.addListener('bounds_changed', function() {
      searchBox.setBounds(map.getBounds());
    });


    var marker = new google.maps.Marker({
      position: jatiwaras,
      map: map,
      draggable: true,
      animation: google.maps.Animation.DROP,
      title:"Default Posisi Desa, geser ke posisi yang sesuai, atau ketikkan nama desa di form pencarian google maps"
    });
    marker.addListener('click', function() {
        var infowindow = new google.maps.InfoWindow({
            content: marker.title,
         });
        infowindow.open(map, marker);
    });
    var markers = [];

    setterLatitudeLongitude(marker);
    marker.addListener('drag', handleEventLatitudeLongitude);
    marker.addListener('dragend', handleEventLatitudeLongitude);
    markers.push(marker);
    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.
    searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              //console.log("Returned place contains no geometry");
              return;
            }


            var marker = new google.maps.Marker({
              map: map,
              title: place.name,
              position: place.geometry.location,
              draggable: true,
              animation: google.maps.Animation.DROP,
            });

            setterLatitudeLongitude(marker);
            marker.addListener('drag', handleEventLatitudeLongitude);
            marker.addListener('dragend', handleEventLatitudeLongitude);

            marker.addListener('click', function() {
                var infowindow = new google.maps.InfoWindow({
                    content: marker.title,
                 });
                infowindow.open(map, marker);
            });
            markers.push();

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
      });


  }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGGJ1iUxsw3EA8efOWlSGul4Pr9XL1gvM&callback=initMap&libraries=places">
</script>


@stop

@section('head_after')
<style>
  #map {
    width: 100%;
    height: 500px;
    background-color: grey;
  }
</style>
@stop
