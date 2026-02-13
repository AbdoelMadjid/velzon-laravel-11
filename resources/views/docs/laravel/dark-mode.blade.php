@extends('docs.laravel.layout')

@section('title', 'Dark Version | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Dark Version</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Dark Version</li>
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
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p class="text-muted">
                                                To have dark mode enabled, Keep your body element with data attribute
                                            </p>
                                            <p class="text-muted">
                                                <code>data-bs-theme="dark" data-topbar="dark" data-sidebar="dark" </code>
                                                in the <code> resources/views/layouts/master.blade.php </code>
                                            </p>
                                            <p class="text-muted mb-0">E.g.
                                                <code> &lt;body data-bs-theme="dark" data-topbar="dark" data-sidebar="dark"&gt;</code>
                                                to have Dark layout.
                                            </p>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
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