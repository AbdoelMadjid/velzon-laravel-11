@extends('docs.laravel.layout')

@section('title', 'Flatpickr | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Flatpickr</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Flatpickr</li>
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

                                    <h5 class="fw-semibold">Overview<a href="https://flatpickr.js.org/examples/"
                                            target="_blank" class="float-end badge badge-soft-success">Official Website
                                            <i class="ri-external-link-line"></i></a> </h5>
                                    <p class="text-muted mb-4">flatpickr is a lightweight and powerful datetime picker.
                                    </p>


                                    <h6 class="mt-3">Javascript</h6>
                                    <pre><code class="language-markup">&lt;!-- flatpickr.js --&gt;
&lt;script type='text/javascript' src='&#123;&#123; URL::asset('build/libs/flatpickr/flatpickr.min.js') &#125;&#125;'&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Note</h6>
                                    <pre><code class="language-markup">Flatpickr js file is loaded in &lt;script src=&quot;&#123;&#123; URL::asset('build/js/pluggins.js') &#125;&#125;&quot;&gt;&lt;/script&gt;.</code></pre>

                                    <h6 class="mt-3">Initjs (Custom js)</h6>
                                    <pre><code class="language-markup">&lt;!-- app js --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/js/app.js') &#125;&#125;&quot;&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Add Package</h6>
                                    <pre><code class="language-markup">npm i flatpickr --save</code></pre>

                                    <h6 class="mt-3">Remove Package</h6>
                                    <pre><code class="language-markup">npm unistall flatpickr or you can remove package by removing specific package from package.json</code></pre>
                                </div>
                                <!-- end card-body -->

                                <div class="card-body border-top border-2 border-top-dashed">
                                    <h5 class="fw-semibold">Flatpickr Examples</h5>

                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width:40%">Title</th>
                                                    <th scope="col">HTML</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Basic</th>
                                                    <td>
                                                        <pre><code class="language-markup">&lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-provider=&quot;flatpickr&quot; data-date-format=&quot;d M, Y&quot;&gt;</code></pre>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">DateTime</th>
                                                    <td>
                                                        <pre><code class="language-markup">&lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-provider=&quot;flatpickr&quot; data-date-format=&quot;d.m.y&quot; data-enable-time  &gt;</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Human-Friendly Dates</th>
                                                    <td>
                                                        <pre><code class="language-markup">&lt;input type=&quot;text&quot; class=&quot;form-control flatpickr-input&quot; data-provider=&quot;flatpickr&quot;  data-altFormat=&quot;F j, Y&quot;&gt;</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">MinDate and MaxDate</th>
                                                    <td>
                                                        <pre><code class="language-markup">&lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-provider=&quot;flatpickr&quot; data-date-format=&quot;d M, Y&quot; data-minDate=&quot;25 12, 2021&quot; data-maxDate=&quot;29 12,2021&quot;&gt;</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Default Date</th>
                                                    <td>
                                                        <pre><code class="language-markup">&lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-provider=&quot;flatpickr&quot; data-date-format=&quot;d M, Y&quot; data-deafult-date=&quot;25 12,2021&quot;&gt;</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Disabling Dates</th>
                                                    <td>
                                                        <pre><code class="language-markup">&lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-provider=&quot;flatpickr&quot; data-date-format=&quot;d M, Y&quot; data-disable-date=&quot;15 12,2021&quot; &gt;</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Selecting Multiple Dates</th>
                                                    <td>
                                                        <pre><code class="language-markup">&lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-provider=&quot;flatpickr&quot; data-date-format=&quot;d M, Y&quot; data-multiple-date=&quot;true&quot; &gt;</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Range</th>
                                                    <td>
                                                        <pre><code class="language-markup">&lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-provider=&quot;flatpickr&quot; data-date-format=&quot;d M, Y&quot; data-range-date=&quot;true&quot;&gt;</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Inline</th>
                                                    <td>
                                                        <pre><code class="language-markup">&lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-provider=&quot;flatpickr&quot; data-date-format=&quot;d M, Y&quot; data-deafult-date=&quot;25 01,2021&quot; data-inline-date=&quot;true&quot;&gt;</code></pre>
                                                    </td>
                                                </tr>


                                            </tbody>
                                        </table>
                                        <!-- end table -->
                                    </div>
                                    <!-- end table responsive -->

                                </div>
                                <!-- end card-body -->
                                <div class="card-body border-top border-2 border-top-dashed">
                                    <h5 class="fw-semibold">Timepickr Examples</h5>

                                    <div class="table-responsive">
                                        <table class="table align-middle mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">HTML</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Basic Timepicker</th>
                                                    <td>
                                                        <pre><code class="language-markup">&lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-provider=&quot;timepickr&quot; data-time-basic=&quot;true&quot;&gt;</code></pre>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">24-hour Time Picker</th>
                                                    <td>
                                                        <pre><code class="language-markup">&lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-provider=&quot;flatpickr&quot; data-date-format=&quot;d.m.y&quot; data-enable-time  &gt;</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Time Picker w/ Limits</th>
                                                    <td>
                                                        <pre><code class="language-markup">&lt;input type=&quot;text&quot; class=&quot;form-control flatpickr-input&quot; data-provider=&quot;flatpickr&quot;  data-altFormat=&quot;F j, Y&quot;&gt;</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Preloading Time</th>
                                                    <td>
                                                        <pre><code class="language-markup">&lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-provider=&quot;timepickr&quot; data-default-time=&quot;16:45&quot;&gt;</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Inline</th>
                                                    <td>
                                                        <pre><code class="language-markup">&lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-provider=&quot;timepickr&quot; data-time-inline=&quot;11:42&quot;&gt;</code></pre>
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