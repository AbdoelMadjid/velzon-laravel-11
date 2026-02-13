@extends('docs.laravel.layout')

@section('title', 'Apexcharts | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Apexcharts</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
                                        <li class="breadcrumb-item active">Apexcharts</li>
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

                                    <h5 class="fw-semibold">Overview<a
                                            href="https://apexcharts.com/javascript-chart-demos/" target="_blank"
                                            class="float-end badge badge-soft-success">Official Website <i
                                                class="ri-external-link-line"></i></a> </h5>
                                    <p class="text-muted mb-4">Explore the sample JavaScript charts created to show some
                                        of
                                        the enticing features packed in ApexCharts.</p>

                                    <h6 class="mt-3">Add Package</h6>
                                    <pre><code class="language-markup">yarn add apexcharts --save</code></pre>

                                    <h6 class="mt-3">Remove Package</h6>
                                    <pre><code class="language-markup">yarn add apexcharts or you can remove package by removing specific package from package.json</code></pre>

                                </div><!-- end card-body -->

                                <div class="card-body border-top border-2 border-top-dashed">
                                    <h5 class="fw-semibold">Examples</h5>

                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width:40%">Title</th>
                                                    <th scope="col">Source</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                    <th scope="row">Line Charts</th>
                                                    <td>
                                                        <h6 class="mt-3">Javascript</h6>
                                                        <pre><code class="language-markup">&lt;!-- apexcharts --&gt;
&lt;script src=&quot;build/libs/apexcharts/apexcharts.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;https://apexcharts.com/samples/assets/stock-prices.js&quot;&gt;&lt;/script&gt;</code></pre>

                                                        <h6 class="mt-3">Initjs (Custom js)</h6>
                                                        <pre><code class="language-markup">&lt;!-- linecharts init --&gt;
&lt;script src=&quot;build/js/pages/apexcharts-line.init.js&quot;&gt;&lt;/script&gt;</code></pre>


                                                        <h6 class="mt-3">Note</h6>
                                                        <pre><code class="language-markup">You can refer &lt;script src=&quot;build/js/pages/apexcharts-line.init.js&quot;&gt;&lt;/script&gt;
for various Line chart examples.</code></pre>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <th scope="row">Area Charts</th>
                                                    <td>
                                                        <h6 class="mt-3">Javascript</h6>
                                                        <pre><code class="language-markup">&lt;!-- apexcharts --&gt;
&lt;script src=&quot;build/libs/apexcharts/apexcharts.min.js&quot;&gt;&lt;/script&gt;
&lt;!-- for basic area chart --&gt;
&lt;script src=&quot;https://apexcharts.com/samples/assets/stock-prices.js&quot;&gt;&lt;/script&gt;
&lt;!-- for github style chart --&gt;
&lt;script src=&quot;https://apexcharts.com/samples/assets/github-data.js&quot;&gt;&lt;/script&gt;
&lt;!-- for irregular timeseries chart --&gt;
&lt;script src=&quot;https://apexcharts.com/samples/assets/irregular-data-series.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;build/libs/moment/moment.js&quot;&gt;&lt;/script&gt;</code></pre>

                                                        <h6 class="mt-3">Initjs (Custom js)</h6>
                                                        <pre><code class="language-markup">&lt;!-- areacharts init --&gt;
&lt;script src=&quot;build/js/pages/apexcharts-area.init.js&quot;&gt;&lt;/script&gt;</code></pre>


                                                        <h6 class="mt-3">Note</h6>
                                                        <pre><code class="language-markup">You can refer &lt;script src=&quot;build/js/pages/apexcharts-area.init.js&quot;&gt;&lt;/script&gt;
for various Line chart examples.</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <th scope="row">Column Charts</th>
                                                    <td>
                                                        <h6 class="mt-3">Javascript</h6>
                                                        <pre><code class="language-markup">&lt;!-- apexcharts --&gt;
&lt;script src=&quot;build/libs/apexcharts/apexcharts.min.js&quot;&gt;&lt;/script&gt;</code></pre>

                                                        <h6 class="mt-3">Initjs (Custom js)</h6>
                                                        <pre><code class="language-markup">&lt;!-- apexcharts init --&gt;
&lt;script src=&quot;build/js/pages/apexcharts-column.init.js&quot;&gt;&lt;/script&gt;</code></pre>


                                                        <h6 class="mt-3">Note</h6>
                                                        <pre><code class="language-markup">You can refer &lt;script src=&quot;build/js/pages/apexcharts-column.init.js&quot;&gt;&lt;/script&gt;
for various Line chart examples.</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <th scope="row">Bar Charts</th>
                                                    <td>
                                                        <h6 class="mt-3">Javascript</h6>
                                                        <pre><code class="language-markup">&lt;!-- apexcharts --&gt;
&lt;script src=&quot;build/libs/apexcharts/apexcharts.min.js&quot;&gt;&lt;/script&gt;</code></pre>

                                                        <h6 class="mt-3">Initjs (Custom js)</h6>
                                                        <pre><code class="language-markup">&lt;!-- barcharts init --&gt;
&lt;script src=&quot;build/js/pages/apexcharts-bar.init.js&quot;&gt;&lt;/script&gt;</code></pre>


                                                        <h6 class="mt-3">Note</h6>
                                                        <pre><code class="language-markup">You can refer &lt;script src=&quot;build/js/pages/apexcharts-bar.init.js&quot;&gt;&lt;/script&gt;
for various Line chart examples.</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <th scope="row">Mixed Charts</th>
                                                    <td>
                                                        <h6 class="mt-3">Javascript</h6>
                                                        <pre><code class="language-markup">&lt;!-- apexcharts --&gt;
&lt;script src=&quot;build/libs/apexcharts/apexcharts.min.js&quot;&gt;&lt;/script&gt;</code></pre>

                                                        <h6 class="mt-3">Initjs (Custom js)</h6>
                                                        <pre><code class="language-markup">&lt;!-- mixed charts init --&gt;
&lt;script src=&quot;build/js/pages/apexcharts-mixed.init.js&quot;&gt;&lt;/script&gt;</code></pre>


                                                        <h6 class="mt-3">Note</h6>
                                                        <pre><code class="language-markup">You can refer &lt;script src=&quot;build/js/pages/apexcharts-bar.init.js&quot;&gt;&lt;/script&gt;
for various Line chart examples.</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <th scope="row">Timeline Charts</th>
                                                    <td>
                                                        <h6 class="mt-3">Javascript</h6>
                                                        <pre><code class="language-markup">&lt;!-- apexcharts --&gt;
&lt;script src=&quot;build/libs/apexcharts/apexcharts.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;build/libs/moment/min/moment.min.js&quot;&gt;&lt;/script&gt;</code></pre>

                                                        <h6 class="mt-3">Initjs (Custom js)</h6>
                                                        <pre><code class="language-markup">&lt;!-- timeline charts init --&gt;
&lt;script src=&quot;build/js/pages/apexcharts-timeline.init.js&quot;&gt;&lt;/script&gt;</code></pre>


                                                        <h6 class="mt-3">Note</h6>
                                                        <pre><code class="language-markup">You can refer &lt;script src=&quot;build/js/pages/apexcharts-timeline.init.js&quot;&gt;&lt;/script&gt;
for various Line chart examples.</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <th scope="row">Candlestick Charts</th>
                                                    <td>
                                                        <h6 class="mt-3">Javascript</h6>
                                                        <pre><code class="language-markup">&lt;!-- apexcharts --&gt;
&lt;script src=&quot;build/libs/apexcharts/apexcharts.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;https://apexcharts.com/samples/assets/ohlc.js&quot;&gt;&lt;/script&gt;
&lt;!-- for Category x-axis chart --&gt;
&lt;script src=&quot;https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.8.17/dayjs.min.js&quot;&gt;&lt;/script&gt;
</code></pre>

                                                        <h6 class="mt-3">Initjs (Custom js)</h6>
                                                        <pre><code class="language-markup">&lt;!-- candlestick charts init --&gt;
&lt;script src=&quot;build/js/pages/apexcharts-candlestick.init.js&quot;&gt;&lt;/script&gt;</code></pre>


                                                        <h6 class="mt-3">Note</h6>
                                                        <pre><code class="language-markup">You can refer &lt;script src=&quot;build/js/pages/apexcharts-candlestick.init.js&quot;&gt;&lt;/script&gt;
for various Line chart examples.</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <th scope="row">Boxplot Charts</th>
                                                    <td>
                                                        <h6 class="mt-3">Javascript</h6>
                                                        <pre><code class="language-markup">&lt;!-- apexcharts --&gt;
&lt;script src=&quot;build/libs/apexcharts/apexcharts.min.js&quot;&gt;&lt;/script&gt;
</code></pre>

                                                        <h6 class="mt-3">Initjs (Custom js)</h6>
                                                        <pre><code class="language-markup">&lt;!-- boxplot charts init --&gt;
&lt;script src=&quot;build/js/pages/apexcharts-boxplot.init.js&quot;&gt;&lt;/script&gt;</code></pre>


                                                        <h6 class="mt-3">Note</h6>
                                                        <pre><code class="language-markup">You can refer &lt;script src=&quot;build/js/pages/apexcharts-boxplot.init.js&quot;&gt;&lt;/script&gt;
for various Line chart examples.</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <th scope="row">Bubble Charts</th>
                                                    <td>
                                                        <h6 class="mt-3">Javascript</h6>
                                                        <pre><code class="language-markup">&lt;!-- apexcharts --&gt;
&lt;script src=&quot;build/libs/apexcharts/apexcharts.min.js&quot;&gt;&lt;/script&gt;
</code></pre>

                                                        <h6 class="mt-3">Initjs (Custom js)</h6>
                                                        <pre><code class="language-markup">&lt;!-- bubble charts init --&gt;
&lt;script src=&quot;build/js/pages/apexcharts-bubble.init.js&quot;&gt;&lt;/script&gt;</code></pre>


                                                        <h6 class="mt-3">Note</h6>
                                                        <pre><code class="language-markup">You can refer &lt;script src=&quot;build/js/pages/apexcharts-bubble.init.js&quot;&gt;&lt;/script&gt;
for various Line chart examples.</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <th scope="row">Scatter Charts</th>
                                                    <td>
                                                        <h6 class="mt-3">Javascript</h6>
                                                        <pre><code class="language-markup">&lt;!-- apexcharts --&gt;
&lt;script src=&quot;build/libs/apexcharts/apexcharts.min.js&quot;&gt;&lt;/script&gt;
</code></pre>

                                                        <h6 class="mt-3">Initjs (Custom js)</h6>
                                                        <pre><code class="language-markup">&lt;!-- scatter charts init --&gt;
&lt;script src=&quot;build/js/pages/apexcharts-scatter.init.js&quot;&gt;&lt;/script&gt;</code></pre>


                                                        <h6 class="mt-3">Note</h6>
                                                        <pre><code class="language-markup">You can refer &lt;script src=&quot;build/js/pages/apexcharts-scatter.init.js&quot;&gt;&lt;/script&gt;
for various Line chart examples.</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <th scope="row">Heatmap Charts</th>
                                                    <td>
                                                        <h6 class="mt-3">Javascript</h6>
                                                        <pre><code class="language-markup">&lt;!-- apexcharts --&gt;
&lt;script src=&quot;build/libs/apexcharts/apexcharts.min.js&quot;&gt;&lt;/script&gt;
</code></pre>

                                                        <h6 class="mt-3">Initjs (Custom js)</h6>
                                                        <pre><code class="language-markup">&lt;!-- heatmapscharts init --&gt;
&lt;script src=&quot;build/js/pages/apexcharts-heatmap.init.js&quot;&gt;&lt;/script&gt;</code></pre>


                                                        <h6 class="mt-3">Note</h6>
                                                        <pre><code class="language-markup">You can refer &lt;script src=&quot;build/js/pages/apexcharts-heatmap.init.js&quot;&gt;&lt;/script&gt;
for various Line chart examples.</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <th scope="row">Treemap Charts</th>
                                                    <td>
                                                        <h6 class="mt-3">Javascript</h6>
                                                        <pre><code class="language-markup">&lt;!-- apexcharts --&gt;
&lt;script src=&quot;build/libs/apexcharts/apexcharts.min.js&quot;&gt;&lt;/script&gt;
</code></pre>

                                                        <h6 class="mt-3">Initjs (Custom js)</h6>
                                                        <pre><code class="language-markup">&lt;!-- treecharts init --&gt;
&lt;script src=&quot;build/js/pages/apexcharts-treemap.init.js&quot;&gt;&lt;/script&gt;</code></pre>


                                                        <h6 class="mt-3">Note</h6>
                                                        <pre><code class="language-markup">You can refer &lt;script src=&quot;build/js/pages/apexcharts-treemap.init.js&quot;&gt;&lt;/script&gt;
for various Line chart examples.</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <th scope="row">Pie Charts</th>
                                                    <td>
                                                        <h6 class="mt-3">Javascript</h6>
                                                        <pre><code class="language-markup">&lt;!-- apexcharts --&gt;
&lt;script src=&quot;build/libs/apexcharts/apexcharts.min.js&quot;&gt;&lt;/script&gt;
</code></pre>

                                                        <h6 class="mt-3">Initjs (Custom js)</h6>
                                                        <pre><code class="language-markup">&lt;!-- piecharts init --&gt;
&lt;script src=&quot;build/js/pages/apexcharts-pie.init.js&quot;&gt;&lt;/script&gt;</code></pre>


                                                        <h6 class="mt-3">Note</h6>
                                                        <pre><code class="language-markup">You can refer &lt;script src=&quot;build/js/pages/apexcharts-pie.init.js&quot;&gt;&lt;/script&gt;
for various Line chart examples.</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <th scope="row">Radialbar Charts</th>
                                                    <td>
                                                        <h6 class="mt-3">Javascript</h6>
                                                        <pre><code class="language-markup">&lt;!-- apexcharts --&gt;
&lt;script src=&quot;build/libs/apexcharts/apexcharts.min.js&quot;&gt;&lt;/script&gt;
</code></pre>

                                                        <h6 class="mt-3">Initjs (Custom js)</h6>
                                                        <pre><code class="language-markup">&lt;!-- radialbar charts init --&gt;
&lt;script src=&quot;build/js/pages/apexcharts-radialbar.init.js&quot;&gt;&lt;/script&gt;</code></pre>


                                                        <h6 class="mt-3">Note</h6>
                                                        <pre><code class="language-markup">You can refer &lt;script src=&quot;build/js/pages/apexcharts-radialbar.init.js&quot;&gt;&lt;/script&gt;
for various Line chart examples.</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <th scope="row">Radar Charts</th>
                                                    <td>
                                                        <h6 class="mt-3">Javascript</h6>
                                                        <pre><code class="language-markup">&lt;!-- apexcharts --&gt;
&lt;script src=&quot;build/libs/apexcharts/apexcharts.min.js&quot;&gt;&lt;/script&gt;
</code></pre>

                                                        <h6 class="mt-3">Initjs (Custom js)</h6>
                                                        <pre><code class="language-markup">&lt;!-- radarcharts init --&gt;
&lt;script src=&quot;build/js/pages/apexcharts-radar.init.js&quot;&gt;&lt;/script&gt;</code></pre>


                                                        <h6 class="mt-3">Note</h6>
                                                        <pre><code class="language-markup">You can refer &lt;script src=&quot;build/js/pages/apexcharts-radar.init.js&quot;&gt;&lt;/script&gt;
for various Line chart examples.</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <th scope="row">Polararea Charts</th>
                                                    <td>
                                                        <h6 class="mt-3">Javascript</h6>
                                                        <pre><code class="language-markup">&lt;!-- apexcharts --&gt;
&lt;script src=&quot;build/libs/apexcharts/apexcharts.min.js&quot;&gt;&lt;/script&gt;
</code></pre>

                                                        <h6 class="mt-3">Initjs (Custom js)</h6>
                                                        <pre><code class="language-markup">&lt;!-- polarareacharts init --&gt;
&lt;script src=&quot;build/js/pages/apexcharts-polararea.init.js&quot;&gt;&lt;/script&gt;</code></pre>


                                                        <h6 class="mt-3">Note</h6>
                                                        <pre><code class="language-markup">You can refer &lt;script src=&quot;build/js/pages/apexcharts-polararea.init.js&quot;&gt;&lt;/script&gt;
for various Line chart examples.</code></pre>
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