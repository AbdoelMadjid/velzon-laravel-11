@extends('docs.laravel.layout')

@section('title', 'Layout Setup | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Layout Setup</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Layout Setup</li>
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
                                    <p class="text-muted mb-4">You can set the default layout in the
                                        <code>resources/view/layouts/master.blade.php</code> file in the html tag.
                                    </p>

                                    <code class="language-markup">&lt;html data-layout="vertical" data-topbar="light"
                                    data-sidebar="dark" data-sidebar-size="lg"></code>
                                    <table class="table table-bordered mb-0 mt-3">
                                        <thead class="table-primary">
                                            <tr>
                                                <th>Attributes</th>
                                                <th>Note</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th><code>data-layout="vertical"</code></th>
                                                <td>To set default layout as Vertical</td>
                                            </tr>
                                            <tr>
                                                <th><code>data-layout="horizontal"</code></th>
                                                <td>To set default layout as Horizontal</td>
                                            </tr>
                                            <tr>
                                                <th><code>data-layout="twocolumn"</code></th>
                                                <td>To set default layout as Two column</td>
                                            </tr>
                                            <tr>
                                                <th><code>data-bs-theme="light"</code></th>
                                                <td>To set Light layout mode.</td>
                                            </tr>
                                            <tr>
                                                <th><code>data-bs-theme="dark"</code></th>
                                                <td>To set Dark layout mode.</td>
                                            </tr>
                                            <tr>
                                                <th><code>data-sidebar-size="lg" data-layout-width="fluid"</code></th>
                                                <td>To set layout width Fluid and left sidebar large.</td>
                                            </tr>
                                            <tr>
                                                <th><code>data-sidebar-size="sm-hover" data-layout-width="boxed"</code>
                                                </th>
                                                <td>To set layout width Boxed and left sidebar on hover show menu.</td>
                                            </tr>
                                            <tr>
                                                <th><code>data-layout-position="fixed"</code></th>
                                                <td>To set layout position Fixed.</td>
                                            </tr>
                                            <tr>
                                                <th><code>data-layout-position="scrollable"</code></th>
                                                <td>To set layout position Scrollable.</td>
                                            </tr>
                                            <tr>
                                                <th><code>data-topbar="light"</code></th>
                                                <td>To set the Light color of Topbar.</td>
                                            </tr>
                                            <tr>
                                                <th><code>data-topbar="dark"</code></th>
                                                <td>To set the dark color of Topbar.</td>
                                            </tr>
                                            <tr>
                                                <th><code>data-sidebar-size="lg"</code></th>
                                                <td>To set the Large left sidebar.</td>
                                            </tr>
                                            <tr>
                                                <th><code>data-sidebar-size="md"</code></th>
                                                <td>To set the Compact left sidebar.</td>
                                            </tr>
                                            <tr>
                                                <th><code>data-sidebar-size="sm"</code></th>
                                                <td>To set the Icon view left sidebar.</td>
                                            </tr>
                                            <tr>
                                                <th><code>data-sidebar-size="sm-hover"</code></th>
                                                <td>To set the Icon hover left sidebar.</td>
                                            </tr>
                                            <tr>
                                                <th><code>data-layout-style="default"</code></th>
                                                <td>To set the Default layout.</td>
                                            </tr>
                                            <tr>
                                                <th><code>data-layout-style="detached"</code></th>
                                                <td>To set the Detached layout.</td>
                                            </tr>
                                            <tr>
                                                <th><code>data-sidebar="light"</code></th>
                                                <td>To set the Light color of left Sidebar.</td>
                                            </tr>
                                            <tr>
                                                <th><code>data-sidebar="dark"</code></th>
                                                <td>To set the Dark color of left Sidebar.</td>
                                            </tr>
                                            <tr>
                                                <th><code>data-sidebar="gradient"</code></th>
                                                <td>To set the Gradient color left Sidebar.</td>
                                            </tr>
                                            <tr>
                                                <th><code>data-sidebar="gradient-2"</code></th>
                                                <td>To set the Gradient-2 color left Sidebar.</td>
                                            </tr>
                                            <tr>
                                                <th><code>data-sidebar="gradient-3"</code></th>
                                                <td>To set the Gradient-3 color left Sidebar.</td>
                                            </tr>
                                            <tr>
                                                <th><code>data-sidebar="gradient-4"</code></th>
                                                <td>To set the Gradient-4 color left Sidebar.</td>
                                            </tr>
                                            <tr>
                                                <th><code>data-sidebar-image="none"</code></th>
                                                <td>To Disable image on left Sidebar.</td>
                                            </tr>

                                            <tr>
                                                <th><code>data-sidebar-image="img-1"</code></th>
                                                <td>To set the img-1 Image on left Sidebar.</td>
                                            </tr>
                                            <tr>
                                                <th><code>data-sidebar-image="img-2"</code></th>
                                                <td>To set the img-2 Image on left Sidebar.</td>
                                            </tr>
                                            <tr>
                                                <th><code>data-sidebar-image="img-3"</code></th>
                                                <td>To set the img-3 Image on left Sidebar.</td>
                                            </tr>
                                            <tr>
                                                <th><code>data-sidebar-image="img-4"</code></th>
                                                <td>To set the img-4 Image on left Sidebar.</td>
                                            </tr>

                                            <tr>
                                                <th><code>data-preloader="enable"</code></th>
                                                <td>To enable the preloader on the Page.</td>
                                            </tr>

                                            <tr>
                                                <th><code>data-preloader="disable"</code></th>
                                                <td>To disable the preloader on the Page.</td>
                                            </tr>
                                        </tbody>
                                    </table>

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