@extends('docs.laravel.layout')

@section('title', 'Bootstrap UI | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Bootstrap UI</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Bootstrap UI</li>
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

                                    <h5 class="fw-semibold">Overview <a href="https://getbootstrap.com/" target="_blank"
                                            class="float-end badge badge-soft-success">Official Website <i
                                                class="ri-external-link-line"></i></a></h5>
                                    <p class="text-muted mb-4">Quickly design and customize responsive mobile-first
                                        sites
                                        with Bootstrap,
                                        the world’s most popular front-end open source toolkit, featuring Sass variables
                                        and
                                        mixins, responsive grid system,
                                        extensive prebuilt components, and powerful JavaScript plugins.</p>

                                    <div class="alert alert-warning">
                                        This is required plugin. You can't remove this.
                                    </div>

                                    <h6>Usage</h6>
                                    <pre><code class="language-markup">We've used bootstrap based components.</code></pre>

                                    <h6 class="mt-3">Add Package</h6>
                                    <pre><code class="language-markup">npm i bootstrap </code></pre>

                                    <h6 class="mt-3">Remove Package</h6>
                                    <pre><code class="language-markup">npm unistallbootstrap or you can remove package by removing specific package from package.json</code></pre>

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