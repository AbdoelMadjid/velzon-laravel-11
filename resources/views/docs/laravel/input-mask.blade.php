@extends('docs.laravel.layout')

@section('title', 'Cleave.js-Input Mask | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Cleave.js-Input Mask</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Cleave.js-Input Mask</li>
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

                                    <h5 class="fw-semibold">Overview<a href="https://nosir.github.io/cleave.js/"
                                            target="_blank" class="float-end badge badge-soft-success">Official Website
                                            <i class="ri-external-link-line"></i></a> </h5>
                                    <p class="text-muted mb-4">Cleave.js javaScript library for formatting input text
                                        content when you are typing.</p>

                                    <h6 class="mt-3">Javascript</h6>
                                    <pre><code class="language-markup">&lt;!-- cleave.js --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/libs/cleave.js/cleave.min.js') &#125;&#125;&quot;&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Initjs (Custom js)</h6>
                                    <pre><code class="language-markup">&lt;!-- form masks init --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/js/pages/form-masks.init.js') &#125;&#125;&quot;&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Add Package</h6>
                                    <pre><code class="language-markup">npm i cleave.js --save</code></pre>

                                    <h6 class="mt-3">Remove Package</h6>
                                    <pre><code class="language-markup">npm unistall cleave.js or you can remove package by removing specific package from package.json</code></pre>

                                </div><!-- end card-body -->

                                <div class="card-body border-top border-2 border-top-dashed">
                                    <h5 class="fw-semibold">Date Formatting</h5>

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
                                                    <th scope="row">Date</th>
                                                    <td>
                                                        <pre><code class="language-js">var cleaveDate = new Cleave('#cleave-date', {
    date: true,
    delimiter: '-',
    datePattern: ['d', 'm', 'Y']
});
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Date Formatting</th>
                                                    <td>
                                                        <pre><code class="language-js">var cleaveDateFormat = new Cleave('#cleave-date-format', {
    date: true,
    datePattern: ['m', 'y']
});
</code></pre>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                        <!-- end table -->
                                    </div>
                                    <!-- end table responsive -->


                                    <h5 class="fw-semibold">Time Formatting</h5>
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
                                                    <th scope="row">Time</th>
                                                    <td>
                                                        <pre><code class="language-js">var cleaveTime = new Cleave('#cleave-time', {
    time: true,
    timePattern: ['h', 'm', 's']
});
    </code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Time Formatting</th>
                                                    <td>
                                                        <pre><code class="language-js">var cleaveTimeFormat = new Cleave('#cleave-time-format', {
    time: true,
    timePattern: ['h', 'm']
});
    </code></pre>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                        <!-- end table -->
                                    </div>
                                    <!-- end table responsive -->
                                    <h5 class="fw-semibold">Custom Option</h5>
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
                                                    <th scope="row">Credit Card</th>
                                                    <td>
                                                        <pre><code class="language-js">var cleaveBlocks = new Cleave('#cleave-ccard', {
    blocks: [4, 4, 4, 4],
    uppercase: true
});
    </code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Delimiter</th>
                                                    <td>
                                                        <pre><code class="language-js">var cleaveDelimiter = new Cleave('#cleave-delimiter', {
    delimiter: '·',
    blocks: [3, 3, 3],
    uppercase: true
});
    </code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Delimiters</th>
                                                    <td>
                                                        <pre><code class="language-js">var cleaveDelimiters = new Cleave('#cleave-delimiters', {
    delimiters: ['.', '.', '-'],
    blocks: [3, 3, 3, 2],
    uppercase: true
});
    </code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Prefix</th>
                                                    <td>
                                                        <pre><code class="language-js">var cleavePrefix = new Cleave('#cleave-prefix', {
    prefix: 'PREFIX',
    delimiter: '-',
    blocks: [6, 4, 4, 4],
    uppercase: true
});
    </code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Phone</th>
                                                    <td>
                                                        <pre><code class="language-js">var cleaveBlocks = new Cleave('#cleave-phone', {
    delimiters: ['(', ')', '-'],
    blocks: [0, 3, 3, 4]
});
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Numeral Formatting</th>
                                                    <td>
                                                        <pre><code class="language-js">var cleaveNumeral = new Cleave('#cleave-numeral', {
    numeral: true,
    numeralThousandsGroupStyle: 'thousand'
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