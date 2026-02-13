@extends('docs.laravel.layout')

@section('title', 'Simplebar | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Simplebar</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Simplebar</li>
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

                                    <h5 class="fw-semibold">Overview <a href="https://github.com/Grsmto/simplebar/"
                                            target="_blank" class="float-end badge badge-soft-success">Official Website
                                            <i class="ri-external-link-line"></i></a></h5>
                                    <p class="text-muted mb-4">SimpleBar does only one thing: replace the browser's
                                        default
                                        scrollbar with a custom CSS-styled one without losing performances.</p>


                                    <h6 class="mt-3">Javascript</h6>
                                    <pre><code class="language-markup">&lt;!-- simplebarjs --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/libs/simplebar/simplebar.min.js') &#125;&#125;&quot;&gt;&lt;/script&gt;</code></pre>


                                    <h6 class="mt-3">Add Package</h6>
                                    <pre><code class="language-markup">npm i simplebar --save</code></pre>

                                    <h6 class="mt-3">Remove Package</h6>
                                    <pre><code class="language-markup">npm unistall simplebar or you can remove package by removing specific package from package.json</code></pre>

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