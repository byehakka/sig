<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuliner Pekanbaru</title>
    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
     integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
     crossorigin=""/>

    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
     integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
     crossorigin=""></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />

    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-
     awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.js"
     charset="utf-8"></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machince.css" />

    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
    
     <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        .leaflet-container {
            height: 1321px;
            width: 2600px;
            max-height: 100%;
            max-width: 100%;
        }
     </style>
</head>
<body>
     <div id="map"></div>
     <script>

        var map = L.map('map',{
            center: [0.5077831956741802, 101.44958701440282], 
            zoom: 16});

        var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'}).addTo(map);

        var marker = L.marker([0.5077831956741802, 101.44958701440282])
        .addTo(map)
        .bindPopup("<b>Halo Dunia!</b><br>Saya adalah Pop Up.")
        .openPopup();

        var popup = L.popup()
		.setLatLng([0.5077831956741802, 101.44958701440282])
		.setContent('Saya Adalah Pop Up.')
		.openOn(map);

        function onMapClick(e) {popup
			.setLatLng(e.latlng)
			.setContent('Anda mengklik map pada ' + e.latlng.toString())
			.openOn(map);}

	    map.on('click', onMapClick);

        L.Control.geocoder(
            {position: 'topleft'})
        .addTo(map);

        L.control.locate()
        .addTo(map);

     </script>
</body>
</html>