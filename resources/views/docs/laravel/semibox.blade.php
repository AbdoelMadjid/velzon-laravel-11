@extends('docs.laravel.layout')

@section('title', 'Semibox | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Semibox</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Semibox</li>
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
                                    <h4 class="card-title mb-0">Semibox menu configuration</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p class="text-muted">You can change the Semibox layout very easily by
                                                adding the below attribute to the body tag in the
                                                <code>resource/views/layouts/master.blade.php</code> file.
                                            </p>
                                            <p><code>data-layout="semibox"</code></p>
                                            <h4 class="card-title my-3 fw-semibold">How to add new menu items/change
                                                menu
                                                items?</h4>
                                            <p class="text-muted mb-0">To add, change or remove menu items from the
                                                left side
                                                navigation, simply edit in file
                                                <code>resource/views/layouts/sidebar.blade.php</code>. The
                                                change would reflect in all the Blade files automatically.
                                            </p>

                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end card-body-->
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0"> How to use pre-built layouts?</h4>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted"> Please do the below change in the html element at
                                        <code>resource/views/layouts/master.blade.php</code> file. ex:
                                        <code>&lt;html data-layout="semibox"&gt;</code>
                                    </p>

                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/assets/images/layouts/semibox.png" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-layout="semibox"</code>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="fs-15 fw-semibold mb-3">Sidebar Visibility</h4>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/assets/images/layouts/semibox.png" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-sidebar-visibility="show" </code>
                                            </div>
                                        </div> <!-- end col -->
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/assets/images/layouts/semibox-visible.png" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-sidebar-visibility="hidden" </code>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!--end col-->

                    </div>
                    <!--end row-->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
@endsection