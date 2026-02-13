@extends('docs.laravel.layout')

@section('title', 'Chart Js | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Chart Js</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Chart Js</li>
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

                                    <h5 class="fw-semibold">Overview<a href="https://www.chartjs.org/docs/latest/"
                                            target="_blank" class="float-end badge badge-soft-success">Official Website
                                            <i class="ri-external-link-line"></i></a> </h5>
                                    <p class="text-muted mb-4">Chart js is a simple yet flexible javaScript charting for
                                        designers & developers.</p>

                                    <h6 class="mt-3">Javascript</h6>
                                    <pre><code class="language-markup">&lt;!-- Chart JS --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/libs/chart.js/chart.min.js') &#125;&#125;&quot;&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Initjs (Custom js)</h6>
                                    <pre><code class="language-markup">&lt;!-- chartjs init --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/js/pages/chartjs.init.js') &#125;&#125;&quot;&gt;&lt;/script&gt;  
</code></pre>

                                    <h6 class="mt-3">Add Package</h6>
                                    <pre><code class="language-markup">npm i chart.js --save</code></pre>

                                    <h6 class="mt-3">Remove Package</h6>
                                    <pre><code class="language-markup">npm unistall chart.js or you can remove package by removing specific package from package.json</code></pre>

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
                                                    <th scope="row">Mandotary code to get color array from string for
                                                        every
                                                        chart.</th>
                                                    <td>
                                                        <pre><code class="language-js">function getChartColorsArray(chartId) {
    if (document.getElementById(chartId) !== null) {
        var colors = document.getElementById(chartId).getAttribute("data-colors");
        colors = JSON.parse(colors);
        return colors.map(function (value) {
            var newValue = value.replace(" ", "");
            if (newValue.indexOf(",") === -1) {
                var color = getComputedStyle(document.documentElement).getPropertyValue(newValue);
                if (color) return color; else return newValue;;
            } else {
                var val = value.split(',');
                if(val.length == 2){
                    var rgbaColor = getComputedStyle(document.documentElement).getPropertyValue(val[0]);
                    rgbaColor = "rgba("+rgbaColor+","+val[1]+")";
                    return rgbaColor;
                } else {
                    return newValue;
                }
            }
        });
    }
}

Chart.defaults.borderColor= "rgba(133, 141, 152, 0.1)";
Chart.defaults.color= "#858d98";


</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Line Chart</th>
                                                    <td>
                                                        <pre><code class="language-js">var islinechart = document.getElementById('lineChart');
lineChartColor =  getChartColorsArray('lineChart');
islinechart.setAttribute("width", islinechart.parentElement.offsetWidth);

var lineChart = new Chart(islinechart, {
    type: 'line',
    data: {
        labels: ["January", "February", "March", "April", "May", "June",
                 "July", "August", "September", "October"],
        datasets: [
            {
                label: "Sales Analytics",
                fill: true,
                lineTension: 0.5,
                backgroundColor: lineChartColor[0],
                borderColor: lineChartColor[1],
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: lineChartColor[1],
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: lineChartColor[1],
                pointHoverBorderColor: "#fff",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                data: [65, 59, 80, 81, 56, 55, 40, 55, 30, 80]
            },
            {
                label: "Monthly Earnings",
                fill: true,
                lineTension: 0.5,
                backgroundColor: lineChartColor[2],
                borderColor: lineChartColor[3],
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: lineChartColor[3],
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: lineChartColor[3],
                pointHoverBorderColor: "#eef0f2",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                data: [80, 23, 56, 65, 23, 35, 85, 25, 92, 36]
            }
        ]
    },
    options: {
        x: {
            ticks: {
                font: {
                    family: 'Poppins',
                },
            },
        },
        y: {
            ticks: {
                font: {
                    family: 'Poppins',
                },
            },
        },
        plugins: {
            legend: {
                labels: {
                    // This more specific font property overrides the global property
                    font: {
                        family: 'Poppins',
                    }
                }
            },
        },
    },
    
});
</code></pre>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">Bar Chart</th>
                                                    <td>
                                                        <pre><code class="language-js">var isbarchart = document.getElementById('bar');
barChartColor =  getChartColorsArray('bar');
isbarchart.setAttribute("width", isbarchart.parentElement.offsetWidth);
var barChart = new Chart(isbarchart, {
    type: 'bar',
    data: {
        labels: ["January", "February", "March", 
                "April", "May", "June", "July"],
        datasets: [
            {
                label: "Sales Analytics",
                backgroundColor: barChartColor[0],
                borderColor: barChartColor[0],
                borderWidth: 1,
                hoverBackgroundColor: barChartColor[1],
                hoverBorderColor: barChartColor[1],
                data: [65, 59, 81, 45, 56, 80, 50,20]
            }
        ]
    },
    options: {
        x: {
            ticks: {
                font: {
                    family: 'Poppins',
                },
            },
        },
        y: {
            ticks: {
                font: {
                    family: 'Poppins',
                },
            },
        },
        plugins: {
            legend: {
                labels: {
                    font: {
                        family: 'Poppins',
                    }
                }
            },
        }
    }
});
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Pie Chart</th>
                                                    <td>
                                                        <pre><code class="language-js">var ispiechart = document.getElementById('pieChart');
pieChartColors =  getChartColorsArray('pieChart');

var pieChart = new Chart(ispiechart, {
    type: 'pie',
    data: {
        labels: [
            "Desktops",
            "Tablets"
        ],
        datasets: [
            {
                data: [300, 180],
                backgroundColor: pieChartColors,
                hoverBackgroundColor: pieChartColors,
                hoverBorderColor: "#fff"
            }]
    },
    options: {
        plugins: {
            legend: {
                labels: {
                    font: {
                        family: 'Poppins',
                    }
                }
            },
        }
    }
});
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Donut Chart</th>
                                                    <td>
                                                        <pre><code class="language-js">var isdoughnutchart = document.getElementById('doughnut');
doughnutChartColors =  getChartColorsArray('doughnut');
var lineChart = new Chart(isdoughnutchart, {
    type: 'doughnut',
    data: {
        labels: [
            "Desktops",
            "Tablets"
        ],
        datasets: [
            {
                data: [300, 210],
                backgroundColor: doughnutChartColors,
                hoverBackgroundColor: doughnutChartColors,
                hoverBorderColor: "#fff"
            }]
    },
    options: {
        plugins: {
            legend: {
                labels: {
                    font: {
                        family: 'Poppins',
                    }
                }
            },
        }
    }
});
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Polar Chart</th>
                                                    <td>
                                                        <pre><code class="language-js">var ispolarAreachart = document.getElementById('polarArea');
polarAreaChartColors =  getChartColorsArray('polarArea');

var lineChart = new Chart(ispolarAreachart, {
    type: 'polarArea',
    data: {
        labels: [
            "Series 1",
            "Series 2",
            "Series 3",
            "Series 4"
        ],
        datasets: [{
            data: [
                11,
                16,
                7,
                18
            ],
            backgroundColor: polarAreaChartColors,
            label: 'My dataset', // for legend
            hoverBorderColor: "#fff"
        }]
    },
    options: {
        plugins: {
            legend: {
                labels: {
                    font: {
                        family: 'Poppins',
                    }
                }
            },
        }
    }
});
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Radar Chart</th>
                                                    <td>
                                                        <pre><code class="language-js">var isradarchart = document.getElementById('radar');
radarChartColors =  getChartColorsArray('radar');
var lineChart = new Chart(isradarchart, {
    type: 'radar',
    data: {
        labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
        datasets: [
            {
                label: "Desktops",
                backgroundColor: radarChartColors[0], //"rgba(42, 181, 125, 0.2)",
                borderColor: radarChartColors[1], //"#2ab57d",
                pointBackgroundColor: radarChartColors[1], //"#2ab57d",
                pointBorderColor: "#fff",
                pointHoverBackgroundColor: "#fff",
                pointHoverBorderColor: radarChartColors[1], //"#2ab57d",
                data: [65, 59, 90, 81, 56, 55, 40]
            },
            {
                label: "Tablets",
                backgroundColor: radarChartColors[2], //"rgba(81, 86, 190, 0.2)",
                borderColor: radarChartColors[3], //"#5156be",
                pointBackgroundColor: radarChartColors[3], //"#5156be",
                pointBorderColor: "#fff",
                pointHoverBackgroundColor: "#fff",
                pointHoverBorderColor: radarChartColors[3], //"#5156be",
                data: [28, 48, 40, 19, 96, 27, 100]
            }
        ]
    },
    options: {
        plugins: {
            legend: {
                labels: {
                    font: {
                        family: 'Poppins',
                    }
                }
            },
        }
    }
});
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