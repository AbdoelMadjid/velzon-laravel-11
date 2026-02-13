@extends('docs.laravel.layout')

@section('title', 'Hovered | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Hovered</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Hovered</li>
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
                                    <h4 class="card-title mb-0">Hovered menu configuration</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p class="text-muted">Use below given attribute to set Hovered sidebar
                                                style(Not
                                                applicable in
                                                horizontal layout).</p>
                                            <h4 class="card-title mb-3 fw-semibold">How to add new menu items/change
                                                menu
                                                items?</h4>
                                            <p class="text-muted">
                                                You can simply use copy paste the
                                                <code>resources/views/layouts/layouts-vertical-hovered.blade.php</code>
                                                code
                                                into the <code>master.blade.php</code> to make changes in all the pages.
                                            </p>
                                            <p class="text-muted mb-0">In order to add, change or remove menu items from
                                                the
                                                left side
                                                navigation,
                                                simply edit in file <code>resources/layouts/sidebar.blade.php.</code>
                                                The
                                                change would reflect in all the files automatically.</p>

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
                                        <code>Velzon/admin/resources/views/layouts/master.blade.php.</code> file. ex:
                                        <code>&lt;html data-layout-width="fluid"></code>
                                    </p>
                                    <h4 class="fs-15 fw-semibold mb-3">Sidebar Style</h4>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="border p-3 text-center">
                                                <code>data-sidebar-size="sm-hover"</code>
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