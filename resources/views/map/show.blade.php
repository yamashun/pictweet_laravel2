@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div id="map"></div>
        </div>
    </div>
</div>

<script>
function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 35.7100627, lng: 139.8107004}, // 地図の中央位置を指定
                zoom: 15 // 地図のズームを指定
            });
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVIudmCEROiPiCqW3LJ7Ezp5rKGT2Iqyg&callback=initMap"></script>

@endsection
