@extends('docs.laravel.layout')

@section('title', 'Google Maps | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Google Maps</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Google Maps</li>
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

                                    <h5 class="fw-semibold">Overview<a href="https://hpneo.dev/gmaps/examples.html"
                                            target="_blank" class="float-end badge badge-soft-success">Official Website
                                            <i class="ri-external-link-line"></i></a> </h5>
                                    <p class="text-muted mb-4">Google maps library allows you to use the potential of
                                        Google Maps in a simple way. No more extensive documentation or large amount of
                                        code. </p>

                                    <h6>Javascript</h6>
                                    <pre><code class="language-markup">&lt;!-- google maps api --&gt;
&lt;script src=&quot;https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI&quot;&gt;&lt;/script&gt;
&lt;!-- gmaps plugins --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/libs/gmaps/gmaps.min.js') &#125;&#125;&quot;&gt;&lt;/script&gt;
</code></pre>

                                    <h6 class="mt-3">Initjs (Custom js)</h6>
                                    <pre><code class="language-markup">&lt;!-- gmaps init --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/js/pages/gmaps.init.js') &#125;&#125;&quot;&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Add Package</h6>
                                    <pre><code class="language-markup">npm i gmaps --save</code></pre>

                                    <h6 class="mt-3">Remove Package</h6>
                                    <pre class="mb-2"><code class="language-markup">npm unistall gmaps</code></pre>
                                    <p class="text-muted mt-2 mb-0">Or you can remove package by removing specific
                                        package from package.json
                                    </p>

                                </div>
                                <!-- end card-body -->

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
                                                    <th scope="row">Markers</th>
                                                    <td>
                                                        <pre><code class="language-js">var map;
document.addEventListener("DOMContentLoaded", function(event) {
  // Markers
  map = new GMaps({
    div: '#gmaps-markers',
    lat: -12.043333,
    lng: -77.028333
  });
  map.addMarker({
    lat: -12.043333,
    lng: -77.03,
    title: 'Lima',
    details: {
      database_id: 42,
      author: 'HPNeo'
    },
    click: function(e){
      if(console.log)
        console.log(e);
      alert('You clicked in this marker');
    }
  });
});

</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Overlays</th>
                                                    <td>
                                                        <pre><code class="language-js">var map;
document.addEventListener("DOMContentLoaded", function(event) {
map = new GMaps({
    div: '#gmaps-overlay',
    lat: -12.043333,
    lng: -77.028333
  });
  map.drawOverlay({
    lat: map.getCenter().lat(),
    lng: map.getCenter().lng(),
    content: '<div class="gmaps-overlay">Lima<div class="gmaps-overlay_arrow above"></div></div>',
    verticalAlign: 'top',
    horizontalAlign: 'center'
  });
});
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Street View Panoramas</th>
                                                    <td>
                                                        <pre><code class="language-js">var map;
document.addEventListener("DOMContentLoaded", function(event) {
    map = GMaps.createPanorama({
        el: '#panorama',
        lat : 42.3455,
        lng : -71.0983
      });
});
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Map Types</th>
                                                    <td>
                                                        <pre><code class="language-js">var map;
document.addEventListener("DOMContentLoaded", function(event) {
map = new GMaps({
    div: '#gmaps-types',
    lat: -12.043333,
    lng: -77.028333,
    mapTypeControlOptions: {
      mapTypeIds : ["hybrid", "roadmap", "satellite", "terrain", "osm"]
    }
  });
  map.addMapType("osm", {
    getTileUrl: function(coord, zoom) {
      return "https://a.tile.openstreetmap.org/" + zoom + "/" + coord.x + "/" + coord.y + ".png";
    },
    tileSize: new google.maps.Size(256, 256),
    name: "OpenStreetMap",
    maxZoom: 18
  });
  map.setMapTypeId("osm");
});
</code></pre>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- end table -->
                                    </div>
                                    <!-- end table responsive -->
                                </div>
                                <!-- end card-body -->

                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
@endsection