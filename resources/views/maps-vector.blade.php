@extends('layouts.vertical', ['title' => 'Dashboard'])

@section('css')
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<style>
  #map {
    height: 500px;
    width: 100%;
  }
</style>
@endsection

@section('content')

@include("layouts.shared/page-title", ["subtitle" => "Maps", "title" => "GIS Perumahan"])

<div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
  <div class="lg:col-span-2">
    <div class="card">
      <div class="p-6">
        <h4 class="card-title mb-4">Peta Perumahan Permata Jingga, Kota Malang</h4>
        <div id="map"></div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('script')
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
  // Koordinat pusat Perumahan Permata Jingga Malang
  var permataJingga = [-7.932334, 112.615936]; // kira-kira pusat perumahan

  // Inisialisasi peta
  var map = L.map('map').setView(permataJingga, 16);

  // Tile layer OpenStreetMap
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
  }).addTo(map);

  // Marker perumahan
  var markers = [
    { coords: [-7.932641, 112.616343], title: "Rumah 1", info: "3 Kamar Tidur - Sensor RFID, Suhu, Kelembaban, Deteksi Api" }
  ];

  markers.forEach(function(marker) {
    L.marker(marker.coords)
      .addTo(map)
      .bindPopup("<b>" + marker.title + "</b><br>" + marker.info);
  });

  // Polygon area perumahan (koordinat kira-kira)
  var polygonCoords = [
    [-7.933091, 112.616169],
    [-7.932160, 112.616773],
    [-7.931428, 112.616944],
    [-7.930615, 112.616166],
    [-7.930259, 112.615480],
    [-7.932359, 112.614300],
    [-7.933400, 112.615947],
  ];

  var perumahanPolygon = L.polygon(polygonCoords, {
    color: 'blue',
    fillColor: '#3399FF',
    fillOpacity: 0.5,
    weight: 2
  }).addTo(map).bindPopup("Area Perumahan Permata Jingga");

</script>
@endsection
