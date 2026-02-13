@extends('docs.laravel.layout')

@section('title', 'Js Vector Maps | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Js Vector Maps</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Js Vector Maps</li>
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
                                    <p class="text-muted mb-4">Vector js is a lightweight Javascript library for
                                        creating
                                        interactive maps and pretty data visualization.</p>

                                    <h6>CSS</h6>
                                    <pre><code class="language-markup">&lt;!-- vector map css --&gt;
&lt;link href=&quot;&#123;&#123; URL::asset('build/libs/jsvectormap/css/jsvectormap.min.css') &#125;&#125; &quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot; /&gt;
</code></pre>

                                    <h6 class="mt-3">Javascript</h6>
                                    <pre><code class="language-markup">&lt;!-- Vector map--&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/libs/jsvectormap/js/jsvectormap.min.js') &#125;&#125; &quot;&gt;&lt;/script&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/libs/jsvectormap/maps/world-merc.js') &#125;&#125; &quot;&gt;&lt;/script&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/libs/jsvectormap/maps/us-merc-en.js') &#125;&#125; &quot;&gt;&lt;/script&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/libs/jsvectormap/maps/canada.js') &#125;&#125; &quot;&gt;&lt;/script&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/libs/jsvectormap/maps/russia.js') &#125;&#125; &quot;&gt;&lt;/script&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/libs/jsvectormap/maps/spain.js') &#125;&#125; &quot;&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Initjs (Custom js)</h6>
                                    <pre><code class="language-markup">&lt;!-- vector-maps init --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/js/pages/vector-maps.init.js') &#125;&#125;&quot;&gt;&lt;/script&gt;
</code></pre>

                                    <h6 class="mt-3">Add Package</h6>
                                    <pre><code class="language-markup">npm i jsvectormap --save</code></pre>

                                    <h6 class="mt-3">Remove Package</h6>
                                    <pre
                                        class="mb-3"><code class="language-markup">npm unistall jsvectormap</code></pre>
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
                                                    <th scope="row">Markers</th>
                                                    <td>
                                                        <pre><code class="language-js">function getChartColorsArray(chartId) {
    console.log(chartId);
    if (document.getElementById(chartId) !== null) {
        var colors = document.getElementById(chartId).
        getAttribute("data-colors");
        colors = JSON.parse(colors);
        return colors.map(function (value) {
            var newValue = value.replace(" ", "");
            if (newValue.indexOf(",") === -1) {
                var color = getComputedStyle(document.documentElement).
                getPropertyValue(newValue);
                if (color) return color; else return newValue;;
            } else {
                var val = value.split(',');
                if(val.length == 2){
                    var rgbaColor = getComputedStyle(document.documentElement).
                    getPropertyValue(val[0]);
                    rgbaColor = "rgba("+rgbaColor+","+val[1]+")";
                    return rgbaColor;
                } else {
                    return newValue;
                }
            }
        });
    }
  }

// world map with line & markers

var vectorMapWorldLineColors = getChartColorsArray
                        ("world-map-line-markers");
var worldlinemap = new jsVectorMap({
    map: "world_merc",
    selector: "#world-map-line-markers",
    zoomOnScroll: false,
    zoomButtons: false,
    markers: [{
            name: "Greenland",
            coords: [72, -42]
        },
        {
            name: "Canada",
            coords: [56.1304, -106.3468]
        },
        {
            name: "Brazil",
            coords: [-14.2350, -51.9253]
        },
        {
            name: "Egypt",
            coords: [26.8206, 30.8025]
        },
        {
            name: "Russia",
            coords: [61, 105]
        },
        {
            name: "China",
            coords: [35.8617, 104.1954]
        },
        {
            name: "United States",
            coords: [37.0902, -95.7129]
        },
        {
            name: "Norway",
            coords: [60.472024, 8.468946]
        },
        {
            name: "Ukraine",
            coords: [48.379433, 31.16558]
        },
    ],
    lines: [{
            from: "Canada",
            to: "Egypt"
        },
        {
            from: "Russia",
            to: "Egypt"
        },
        {
            from: "Greenland",
            to: "Egypt"
        },
        {
            from: "Brazil",
            to: "Egypt"
        },
        {
            from: "United States",
            to: "Egypt"
        },
        {
            from: "China",
            to: "Egypt"
        },
        {
            from: "Norway",
            to: "Egypt"
        },
        {
            from: "Ukraine",
            to: "Egypt"
        },
    ],
    regionStyle: {
        initial: {
            stroke: "#9599ad",
            strokeWidth: 0.25,
            fill: vectorMapWorldLineColors,
            fillOpacity: 1,
        },
    },
    lineStyle: {
        animation: true,
        strokeDasharray: "6 3 6",
    },
})
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">World Vector Map with Markers</th>
                                                    <td>
                                                        <pre><code class="language-js">var vectorMapWorldMarkersColors = getChartColorsArray("world-map-line-markers");
var worldemapmarkers = new jsVectorMap({
	map: 'world_merc',
	selector: '#world-map-markers',
	zoomOnScroll: false,
	zoomButtons: false,
	selectedMarkers: [0, 2],
    regionStyle: {
        initial: {
            stroke: "#9599ad",
            strokeWidth: 0.25,
            fill: vectorMapWorldMarkersColors,
            fillOpacity: 1,
        },
    },
	markersSelectable: true,
	markers:[
	  { name: "Palestine", coords: [31.9474,35.2272] },
	  { name: "Russia", coords: [61.524,105.3188] },
	  { name: "Canada", coords: [56.1304,-106.3468] },
	  { name: "Greenland", coords: [71.7069,-42.6043] },
	],
	markerStyle:{
	  initial: { fill: "#038edc" },
	  selected: { fill: "red" }
	},
	labels: {
	  	markers: {
			render: function(marker){
				return marker.name
			}
	  	}
	}
})
</code></pre>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">World Vector Map with Image Markers</th>
                                                    <td>
                                                        <pre><code class="language-js">var vectorMapWorldMarkersImageColors = getChartColorsArray("world-map-markers-image");
var worldemapmarkersimage = new jsVectorMap({
	map: 'world_merc',
	selector: '#world-map-markers-image',
	zoomOnScroll: false,
	zoomButtons: false,
    regionStyle: {
        initial: {
            stroke: "#9599ad",
            strokeWidth: 0.25,
            fill: vectorMapWorldMarkersImageColors,
            fillOpacity: 1,
        },
    },
	selectedMarkers: [0, 2],
	markersSelectable: true,
	markers:[
	  { name: "Palestine", coords: [31.9474,35.2272] },
	  { name: "Russia", coords: [61.524,105.3188] },
	  { name: "Canada", coords: [56.1304,-106.3468] },
	  { name: "Greenland", coords: [71.7069,-42.6043] },
	],
	markerStyle: {
		initial: {
		  image: "build/images/logo-sm.png"
		}
	},
	labels: {
	  	markers: {
			render: function(marker){
				return marker.name
			}
	  	}
	}
})
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">USA Vector Map</th>
                                                    <td>
                                                        <pre><code class="language-js">var vectorMapUsaColors = getChartColorsArray("usa-vectormap");
var usmap = new jsVectorMap({
	map: 'us_merc_en',
	selector: "#usa-vectormap",
    regionStyle: {
        initial: {
            stroke: "#9599ad",
            strokeWidth: 0.25,
            fill: vectorMapUsaColors,
            fillOpacity: 1,
        },
    },
    zoomOnScroll: false,
    zoomButtons: false,
})
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Canada Vector Map</th>
                                                    <td>
                                                        <pre><code class="language-js">var vectorMapCanadaColors = getChartColorsArray("canada-vectormap");
var canadamap = new jsVectorMap({
	map: 'canada',
	selector: "#canada-vectormap",
    regionStyle: {
        initial: {
            stroke: "#9599ad",
            strokeWidth: 0.25,
            fill: vectorMapCanadaColors,
            fillOpacity: 1,
        },
    },
    zoomOnScroll: false,
    zoomButtons: false,
})
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Russia Vector Map</th>
                                                    <td>
                                                        <pre><code class="language-js">var vectorMapRussiaColors = getChartColorsArray("russia-vectormap");
var russiamap = new jsVectorMap({
	map: 'russia',
	selector: "#russia-vectormap",
    regionStyle: {
        initial: {
            stroke: "#9599ad",
            strokeWidth: 0.25,
            fill: vectorMapRussiaColors,
            fillOpacity: 1,
        },
    },
    zoomOnScroll: false,
    zoomButtons: false,
})
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Spain Vector Map</th>
                                                    <td>
                                                        <pre><code class="language-js">var vectorMapSpainColors = getChartColorsArray("spain-vectormap");
var spainmap = new jsVectorMap({
	map: 'spain',
	selector: "#spain-vectormap",
    regionStyle: {
        initial: {
            stroke: "#9599ad",
            strokeWidth: 0.25,
            fill: vectorMapSpainColors,
            fillOpacity: 1,
        },
    },
    zoomOnScroll: false,
    zoomButtons: false,
})
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