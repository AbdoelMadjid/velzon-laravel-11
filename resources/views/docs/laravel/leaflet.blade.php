@extends('docs.laravel.layout')

@section('title', 'Leaflet | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Leaflet</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Leaflet</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">

                                <div class="card-body">

                                    <h5 class="fw-semibold">Overview<a href="https://leafletjs.com/examples.html"
                                            target="_blank" class="float-end badge badge-soft-success">Official Website
                                            <i class="ri-external-link-line"></i></a> </h5>
                                    <p class="text-muted mb-4">Leaflet js is an open-source JavaScript library
                                        for mobile-friendly interactive maps.</p>

                                    <h6>CSS</h6>
                                    <pre><code class="language-markup">&lt;!-- leaflet Css --&gt;
&lt;link href=&quot;&#123;&#123; URL::asset('build/libs/leaflet/leaflet.css') &#125;&#125;&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot; /&gt;
</code></pre>

                                    <h6 class="mt-3">Javascript</h6>
                                    <pre><code class="language-markup">&lt;!-- leaflet plugin --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/libs/leaflet/leaflet.js') &#125;&#125;&quot;&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Initjs (Custom js)</h6>
                                    <pre><code class="language-markup">&lt;!-- leaflet map.init --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/js/pages/leaflet-us-states.js') &#125;&#125;&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/js/pages/leaflet-map.init.js') &#125;&#125;&quot;&gt;&lt;/script&gt;
</code></pre>

                                    <h6 class="mt-3">Add Package</h6>
                                    <pre><code class="language-markup">npm i leaflet --save</code></pre>

                                    <h6 class="mt-3">Remove Package</h6>
                                    <pre class="mb-3"><code class="language-markup">npm unistall leaflet </code></pre>
                                    <p class="text-muted mt-2 mb-0">Or you can remove package by removing specific
                                        package
                                        from package.json
                                    </p>

                                </div><!-- end card-body -->

                                <div class="card-body border-top border-2 border-top-dashed">
                                    <h5 class="fw-semibold">Examples</h5>

                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width:40%">Title</th>
                                                    <th scope="col">Javascript</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Basic Example</th>
                                                    <td>
                                                        <pre><code class="language-js">var mymap = L.map('leaflet-map').setView([51.505, -0.09], 13);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/
    tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.
    rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1
}).addTo(mymap);
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Markers, Circles and Polygons</th>
                                                    <td>
                                                        <pre><code class="language-js">var markermap = L.map('leaflet-map-marker').setView([51.505, -0.09], 13);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.
    eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.
    rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1
}).addTo(markermap);

L.marker([51.5, -0.09]).addTo(markermap);

L.circle([51.508, -0.11], {
    color: '#0ab39c',
    fillColor: '#0ab39c',
    fillOpacity: 0.5,
    radius: 500
}).addTo(markermap);

L.polygon([
    [51.509, -0.08],
    [51.503, -0.06],
    [51.51, -0.047]
],{
    color: '#405189',
    fillColor: '#405189',
}).addTo(markermap);
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Working with Popups</th>
                                                    <td>
                                                        <pre><code class="language-js">var popupmap = L.map('leaflet-map-popup').setView([51.505, -0.09], 13);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.
    eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1
}).addTo(popupmap);

L.marker([51.5, -0.09]).addTo(popupmap)
    .bindPopup("<b>Hello world!</b><br />I am a popup.").openPopup();

L.circle([51.508, -0.11], 500, {
    color: '#f06548',
    fillColor: '#f06548',
    fillOpacity: 0.5
}).addTo(popupmap).bindPopup("I am a circle.");

L.polygon([
    [51.509, -0.08],
    [51.503, -0.06],
    [51.51, -0.047]
],{
    color: '#405189',
    fillColor: '#405189',
}).addTo(popupmap).bindPopup("I am a polygon.");

var popup = L.popup();
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Markers with Custom Icons</th>
                                                    <td>
                                                        <pre><code class="language-js">var customiconsmap = L.map('leaflet-map-custom-icons').setView([51.5, -0.09], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">
        OpenStreetMap</a> contributors'
}).addTo(customiconsmap);

var LeafIcon = L.Icon.extend({
    options: {
        iconSize:     [45, 45],
        iconAnchor:   [22, 94],
        popupAnchor:  [-3, -76]
    }
});

var greenIcon = new LeafIcon({iconUrl: 'build/images/logo-sm.png'});

L.marker([51.5, -0.09], {icon: greenIcon}).addTo(customiconsmap);
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Interactive Choropleth Map</th>
                                                    <td>
                                                        <pre><code class="language-js">var interactivemap = L.map('leaflet-map-interactive-map').setView([37.8, -96], 4);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.
    eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/light-v9',
    tileSize: 512,
    zoomOffset: -1
}).addTo(interactivemap);

// get color depending on population density value
function getColor(d) {
    return d > 1000 ? '#405189' :
            d > 500  ? '#516194' :
            d > 200  ? '#63719E' :
            d > 100  ? '#7480A9' :
            d > 50   ? '#8590B4' :
            d > 20   ? '#97A0BF' :
            d > 10   ? '#A8B0C9' :
                        '#A8B0C9';
}

function style(feature) {
    return {
        weight: 2,
        opacity: 1,
        color: 'white',
        dashArray: '3',
        fillOpacity: 0.7,
        fillColor: getColor(feature.properties.density)
    };
}

var geojson = L.geoJson(statesData, {
    style: style,
}).addTo(interactivemap);
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Layer Groups and Layers Control</th>
                                                    <td>
                                                        <pre><code class="language-js">var cities = L.layerGroup();

L.marker([39.61, -105.02]).bindPopup('This is Littleton, CO.').addTo(cities),
L.marker([39.74, -104.99]).bindPopup('This is Denver, CO.').addTo(cities),
L.marker([39.73, -104.8]).bindPopup('This is Aurora, CO.').addTo(cities),
L.marker([39.77, -105.23]).bindPopup('This is Golden, CO.').addTo(cities);


var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> 
        contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    mbUrl = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.
    eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

var grayscale   = L.tileLayer(mbUrl, {id: 'mapbox/light-v9', tileSize: 512, 
    zoomOffset: -1, attribution: mbAttr}),
    streets  = L.tileLayer(mbUrl, {id: 'mapbox/streets-v11', tileSize: 512,
     zoomOffset: -1, attribution: mbAttr});

var layergroupcontrolmap = L.map('leaflet-map-group-control', {
    center: [39.73, -104.99],
    zoom: 10,
    layers: [streets, cities]
});

var baseLayers = {
    "Grayscale": grayscale,
    "Streets": streets
};

var overlays = {
    "Cities": cities
};

L.control.layers(baseLayers, overlays).addTo(layergroupcontrolmap);
</code></pre>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                        <!-- end table -->
                                    </div>
                                    <!-- end table responsive -->
                                </div><!-- end card-body -->

                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
@endsection