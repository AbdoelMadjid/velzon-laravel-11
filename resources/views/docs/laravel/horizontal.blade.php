@extends('docs.laravel.layout')

@section('title', 'Horizontal | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Horizontal</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Horizontal</li>
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
                                    <h4 class="card-title mb-0">Horizontal menu configuration</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p class="text-muted">
                                                If you would like to have Horizontal Menu (or Topnav) based layout,
                                                <code>data-layout="horizontal"</code> in the
                                                <code>resources/views/layouts/master.blade.php</code> file.
                                            </p>
                                            <p class="text-muted">
                                                You can simply use copy paste the
                                                <code>resources/views/layouts/master-layouts.blade.php</code> code into
                                                the
                                                <code>master.blade.php</code> to make changes in all the pages.
                                            </p>
                                            <p class="text-muted mb-0">
                                                In order to add, change or remove any ui elements from the top bar,
                                                simply
                                                edit in file
                                                <code>resources/views/layouts/sidebar.blade.php</code>. The change would
                                                reflect in all the files automatically.
                                            </p>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->


                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0"> How to use pre-built layouts?</h4>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted"> Please do the below change in the html element at
                                        <code>Velzon/admin/resources/views/layout/master.blade.php</code> file. ex:
                                        <code>&lt;html data-layout-width="fluid"></code>
                                    </p>
                                    <h4 class="fs-15 fw-semibold mb-3">Layout Width</h4>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/assets/images/layouts/hori-fluid.jpg" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-layout-width="fluid"</code>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/assets/images/layouts/hori-boxed.jpg" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-layout-width="boxed"</code>
                                            </div>
                                        </div> <!-- end col -->

                                    </div>
                                    <h4 class="fs-15 fw-semibold mb-3">Layout Position</h4>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <code>data-layout-position="fixed"</code>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <code>data-layout-position="scrollable"</code>
                                            </div>
                                        </div> <!-- end col -->
                                    </div>
                                    <h4 class="fs-15 fw-semibold mb-3">Topbar Colors</h4>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/assets/images/layouts/hori-fluid.jpg" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-topbar="light"</code>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/assets/images/layouts/hori-topbar-dark.jpg" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-topbar="dark"</code>
                                            </div>
                                        </div> <!-- end col -->
                                    </div>
                                    <h4 class="fs-15 fw-semibold mb-3">Preloader Option</h4>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <code>data-preloader="disable"</code>
                                            </div>
                                        </div> <!-- end col -->
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <code>data-preloader="enable"</code>
                                            </div>
                                        </div>
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