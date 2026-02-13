@extends('docs.laravel.layout')

@section('title', 'Rtl Version | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Rtl Version</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Rtl Version</li>
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
                                            <p class="text-muted">To have RTL mode enabled, replace the reference of</p>
                                            <p class="text-muted mb-0">
                                                <code>app.min.css</code> to
                                                <code>app.min.rtl.css</code> and
                                                <code>bootstrap.min.css</code> to
                                                <code>bootstrap.min.rtl.css</code> in the
                                                <code> resources/views/layouts/head-css.blade.php </code> and <br />
                                                update add attribute <code>dir="rtl"</code> to the html tag in the
                                                <code>resources/views/layouts/master.blade.php</code> file as below
                                                example.
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