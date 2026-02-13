@extends('docs.laravel.layout')

@section('title', 'Theme Setup | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Theme Setup</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Theme Setup</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0"> How to use pre-built Theme using Master folder?</h4>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted"> Please do the below change in the html element at
                                        <code>resources/views/layouts/master.blade.php</code> file. ex:
                                        <code>&lt;html data-theme="default"></code>
                                    </p>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/build/images/demos/default.png" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-theme="default"</code>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/build/images/demos/saas.png" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-theme="saas"</code>
                                            </div>
                                        </div> <!-- end col -->
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/build/images/demos/material.png" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-theme="material"</code>
                                            </div>
                                        </div> <!-- end col -->
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/build/images/demos/default.png" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-theme="galaxy"</code>
                                            </div>
                                        </div> <!-- end col -->
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/build/images/demos/default.png" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-theme="corporate"</code>
                                            </div>
                                        </div> <!-- end col -->
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/build/images/demos/minimal.png" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-theme="minimal"</code>
                                            </div>
                                        </div> <!-- end col -->
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/build/images/demos/creative.png" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-theme="creative"</code>
                                            </div>
                                        </div> <!-- end col -->
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/build/images/demos/modern.png" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-theme="modern"</code>
                                            </div>
                                        </div> <!-- end col -->
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/build/images/demos/interactive.png" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-theme="interactive"</code>
                                            </div>
                                        </div> <!-- end col -->
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/build/images/demos/default.png" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-theme="classic"</code>
                                            </div>
                                        </div> <!-- end col -->
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/build/images/demos/default.png" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-theme="vintage"</code>
                                            </div>
                                        </div> <!-- end col -->
                                    </div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->

                </div>
                <!--end row-->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
@endsection