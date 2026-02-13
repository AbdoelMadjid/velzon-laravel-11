@extends('docs.laravel.layout')

@section('title', 'Vertical Layout | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Vertical Layout</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Vertical Layout</li>
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
                                            <div id="menu-item" class="mb-4">
                                                <p class="text-muted">
                                                    You can change or customize the left side navigation very
                                                    easily.
                                                </p>

                                                <h5 class="card-title mb-3 fw-semibold">How to add new menu
                                                    items/change menu items?</h5>
                                                <dl>
                                                    <dt> <strong>Laravel</strong></dt>
                                                    <dd class="text-muted">
                                                        In order to add, change or remove menu items from the
                                                        left side navigation, simply edit in file
                                                        <code>resources/views/layouts/body.blade.php</code>.
                                                        The change would
                                                        reflect in the all pages automatically.
                                                    </dd>
                                                </dl>
                                            </div>
                                            <div id="change-width">
                                                <h5 class="card-title mb-3 fw-semibold">
                                                    How to change width?</h5>
                                                <dl class="mb-0">
                                                    <dt> <strong> Laravel </strong></dt>
                                                    <dd class="text-muted mb-0">
                                                        In order to change the width of left side navigation
                                                        bar,
                                                        open a file
                                                        <code>resources/scss/_variables.scss</code> and change
                                                        the
                                                        value of variable
                                                        <code>$sidebar-width</code>. The default value is set to
                                                        <code>250px</code>.
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-body-->

                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0"> How to use pre-built layouts?</h4>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted"> Please do the below change in the html element at
                                        <code>src/html/default/partials/main.html</code> file. ex:
                                        <code>&lt;html data-layout-width="fluid"></code>
                                    </p>
                                    <h4 class="fs-15 fw-semibold mb-3">Layout Width</h4>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/assets/images/layouts/vertical-fluid.jpg" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-layout-width="fluid"</code>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/assets/images/layouts/vertical-boxed.jpg" alt="image"
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
                                                <img src="/assets/images/layouts/topbar-light.jpg" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-topbar="light"</code>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/assets/images/layouts/topbar-dark.jpg" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-topbar="dark"</code>
                                            </div>
                                        </div> <!-- end col -->
                                    </div>
                                    <h4 class="fs-15 fw-semibold mb-3">Sidebar Sizes</h4>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/assets/images/layouts/sidebar-lg.jpg" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-sidebar-size="lg"</code>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/assets/images/layouts/sidebar-md.jpg" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-sidebar-size="md"</code>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/assets/images/layouts/sidebar-sm.jpg" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-sidebar-size="sm"</code>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/assets/images/layouts/sidebar-sm-hover.jpg" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-sidebar-size="sm-hover"</code>
                                            </div>
                                        </div>

                                    </div> <!-- end col -->

                                    <h4 class="fs-15 fw-semibold mb-3">Sidebar View</h4>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/assets/images/layouts/vertical-fluid.jpg" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-layout-style="default"</code>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/assets/images/layouts/vertical-detached.jpg" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-layout-style="detached"</code>
                                            </div>
                                        </div> <!-- end col -->
                                    </div>
                                    <h4 class="fs-15 fw-semibold mb-3">Sidebar Colors</h4>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/assets/images/layouts/sidebar-light.jpg" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-sidebar="light"</code>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/assets/images/layouts/sidebar-lg.jpg" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-sidebar="dark"</code>
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/assets/images/layouts/sidebar-gradient.jpg" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-sidebar="gradient"</code>
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/assets/images/layouts/sidebar-gradient-2.jpg" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-sidebar="gradient-2"</code>
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/assets/images/layouts/sidebar-gradient-3.jpg" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-sidebar="gradient-3"</code>
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/assets/images/layouts/sidebar-gradient-4.jpg" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-sidebar="gradient-4"</code>
                                            </div>
                                        </div> <!-- end col -->
                                    </div>


                                    <h4 class="fs-15 fw-semibold mb-3">Sidebar Images</h4>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/assets/images/layouts/vertical-fluid.jpg" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-sidebar-image="none"</code>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/assets/images/layouts/sidebar-img-1.jpg" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-sidebar-image="img-1"</code>
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/assets/images/layouts/sidebar-img-2.jpg" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-sidebar-image="img-2"</code>
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/assets/images/layouts/sidebar-img-3.jpg" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-sidebar-image="img-3"</code>
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/assets/images/layouts/sidebar-img-4.jpg" alt="image"
                                                    class="img-fluid shadow mb-3">
                                                <code>data-sidebar-image="img-4"</code>
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
                            <!--end card-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div><!-- container-fluid -->
            </div>
        </div>
        <!-- End Page-content -->
@endsection