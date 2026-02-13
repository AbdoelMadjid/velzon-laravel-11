@extends('docs.laravel.layout')

@section('title', 'Folder Structure | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Folder Structure</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Folder Structure</li>
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
                                    <p class="alert alert-info text-info mb-3">Use below velzon structure for modify and
                                        better understand the <b>Velzon</b>.</p>

                                    <h6>1. Velzon Laravel Folders</h6>
                                    <div class="table-responsive mb-4">
                                        <table class="table table-bordered table-striped mb-0">
                                            <thead class="table-primary">
                                                <tr>
                                                    <th scope="col">Folder</th>
                                                    <th scope="col">Path</th>
                                                    <th scope="col">Uses</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0"><img src="/assets/images/extra/folder.png"
                                                                class="folder-icon me-1" alt="">Controller</p>
                                                    </td>
                                                    <td><code>app/Http/</code></td>
                                                    <td>All controller files here.</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0"><img src="/assets/images/extra/folder.png"
                                                                class="folder-icon me-1" alt="">Middleware</p>
                                                    </td>
                                                    <td><code>app/</code></td>
                                                    <td>All Laravel Middlewares. you can add your custom also</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0"><img src="/assets/images/extra/folder.png"
                                                                class="folder-icon me-1" alt="">Models</p>
                                                    </td>
                                                    <td><code>app/</code></td>
                                                    <td>All Laravel models. you can add your custom also</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0"><img src="/assets/images/extra/folder.png"
                                                                class="folder-icon me-1" alt="">Migration</p>
                                                    </td>
                                                    <td><code>database/</code></td>
                                                    <td>All Database related migrations.</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0"><img src="/assets/images/extra/folder.png"
                                                                class="folder-icon me-1" alt="">Seeders</p>
                                                    </td>
                                                    <td><code>database/</code></td>
                                                    <td>All Database related seeders. you can make dummy data from
                                                        seeders.</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0"><img src="/assets/images/extra/folder.png"
                                                                class="folder-icon me-1" alt="">Routes</p>
                                                    </td>
                                                    <td><code>routes/</code></td>
                                                    <td>You can add new route in <code>routes/web.php</code> or create
                                                        api in <code>routes/api.php</code>.</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0"><img src="/assets/images/extra/folder.png"
                                                                class="folder-icon me-1" alt="">Resources</p>
                                                    </td>
                                                    <td><code>resources/</code></td>
                                                    <td>All assets or blade files here.</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0"><img src="/assets/images/extra/file.png"
                                                                class="folder-icon me-1" alt="">vite.config.js</p>
                                                    </td>
                                                    <td><code>/</code></td>
                                                    <td>Vite or build related code. if you don't have knowledge about
                                                        this then don't modify it.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <h6>2. Velzon Laravel Layout Files</h6>
                                    <div class="table-responsive mb-4">
                                        <table class="table table-bordered table-striped mb-0">
                                            <thead class="table-primary">
                                                <tr>
                                                    <th scope="col">File</th>
                                                    <th scope="col">Path</th>
                                                    <th scope="col">Uses</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0"><img src="/assets/images/extra/file.png"
                                                                class="folder-icon me-1" alt="">customizer.blade.php</p>
                                                    </td>
                                                    <td><code>resources/views/layouts/</code></td>
                                                    <td>customizer related code.</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0"><img src="/assets/images/extra/file.png"
                                                                class="folder-icon me-1" alt="">footer.blade.php</p>
                                                    </td>
                                                    <td><code>resources/views/layouts/</code></td>
                                                    <td>footer related code. you can modify as per your requirements.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0"><img src="/assets/images/extra/file.png"
                                                                class="folder-icon me-1" alt="">head-css.blade.php</p>
                                                    </td>
                                                    <td><code>resources/views/layouts/</code></td>
                                                    <td>common css files placed here.</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0"><img src="/assets/images/extra/file.png"
                                                                class="folder-icon me-1"
                                                                alt="">layouts-detached.blade.php</p>
                                                    </td>
                                                    <td><code>resources/views/layouts/</code></td>
                                                    <td>detached layout master here.</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0"><img src="/assets/images/extra/file.png"
                                                                class="folder-icon me-1"
                                                                alt="">layouts-horizontal.blade.php</p>
                                                    </td>
                                                    <td><code>resources/views/layouts/</code></td>
                                                    <td>horizontal layout master.</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0"><img src="/assets/images/extra/file.png"
                                                                class="folder-icon me-1"
                                                                alt="">layouts-two-column.blade.php</p>
                                                    </td>
                                                    <td><code>resources/views/layouts/</code></td>
                                                    <td>two column layout master.</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0"><img src="/assets/images/extra/file.png"
                                                                class="folder-icon me-1"
                                                                alt="">layouts-vertical-hovered.blade.php</p>
                                                    </td>
                                                    <td><code>resources/views/layouts/</code></td>
                                                    <td>vertical hovered layout master.</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0"><img src="/assets/images/extra/file.png"
                                                                class="folder-icon me-1" alt="">master.blade.php</p>
                                                    </td>
                                                    <td><code>resources/views/layouts/</code></td>
                                                    <td>default layout master file, you can set html attributes, and
                                                        change common layouts changing this file.</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0"><img src="/assets/images/extra/file.png"
                                                                class="folder-icon me-1"
                                                                alt="">master-without-nav.blade.php</p>
                                                    </td>
                                                    <td><code>resources/views/layouts/</code></td>
                                                    <td>auth pages layout.</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0"><img src="/assets/images/extra/file.png"
                                                                class="folder-icon me-1" alt="">sidebar.blade.php</p>
                                                    </td>
                                                    <td><code>resources/views/layouts/</code></td>
                                                    <td>sidebar menus related code, you can add new menu here.</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0"><img src="/assets/images/extra/file.png"
                                                                class="folder-icon me-1" alt="">topbar.blade.php</p>
                                                    </td>
                                                    <td><code>resources/views/layouts/</code></td>
                                                    <td>topbar related code here, you can easily customize topbar from
                                                        here.</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0"><img src="/assets/images/extra/file.png"
                                                                class="folder-icon me-1" alt="">vendor-scripts.blade.php
                                                        </p>
                                                    </td>
                                                    <td><code>resources/views/layouts/</code></td>
                                                    <td>common javascript files includes here.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <h6>3. Velzon Laravel Component Files</h6>
                                    <div class="table-responsive mb-4">
                                        <table class="table table-bordered table-striped mb-0">
                                            <thead class="table-primary">
                                                <tr>
                                                    <th scope="col">File</th>
                                                    <th scope="col">Path</th>
                                                    <th scope="col">Uses</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0"><img src="/assets/images/extra/file.png"
                                                                class="folder-icon me-1" alt="">breadcrumb.blade.php</p>
                                                    </td>
                                                    <td><code>resources/views/components</code></td>
                                                    <td>page title component, you can easily customize it.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <h6>4. Velzon Laravel Auth Files</h6>
                                    <div class="table-responsive mb-4">
                                        <table class="table table-bordered table-striped mb-0">
                                            <thead class="table-primary">
                                                <tr>
                                                    <th scope="col">File</th>
                                                    <th scope="col">Path</th>
                                                    <th scope="col">Uses</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0"><img src="/assets/images/extra/file.png"
                                                                class="folder-icon me-1" alt="">login.blade.php</p>
                                                    </td>
                                                    <td><code>resources/views/auth</code></td>
                                                    <td>login view page code, if you need to customize login you can do
                                                        from this.</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0"><img src="/assets/images/extra/file.png"
                                                                class="folder-icon me-1" alt="">register.blade.php</p>
                                                    </td>
                                                    <td><code>resources/views/auth</code></td>
                                                    <td>registration page view code.</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0"><img src="/assets/images/extra/file.png"
                                                                class="folder-icon me-1" alt="">verify.blade.php</p>
                                                    </td>
                                                    <td><code>resources/views/auth</code></td>
                                                    <td>email verification page.</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0"><img src="/assets/images/extra/file.png"
                                                                class="folder-icon me-1" alt="">confirm.blade.php</p>
                                                    </td>
                                                    <td><code>resources/views/auth/password</code></td>
                                                    <td>password confirmation page.</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0"><img src="/assets/images/extra/file.png"
                                                                class="folder-icon me-1" alt="">email.blade.php</p>
                                                    </td>
                                                    <td><code>resources/views/auth/password</code></td>
                                                    <td>forget password page.</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0"><img src="/assets/images/extra/file.png"
                                                                class="folder-icon me-1" alt="">reset.blade.php</p>
                                                    </td>
                                                    <td><code>resources/views/auth/password</code></td>
                                                    <td>reset password using email.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="nav nav-pills nav-success mb-3" role="tablist">
                                        <li class="nav-item waves-effect waves-light" role="presentation">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#v351" role="tab"
                                                aria-selected="true"> &lt;= v3.*</a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#v400" role="tab"
                                                aria-selected="false" tabindex="-1"> &gt;= v4.0.0</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content text-muted">
                                        <div class="tab-pane active" id="v351" role="tabpanel">
                                            <div class="verti-sitemap">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="p-0 parent-title"><a href="javascript: void(0);"
                                                            class="fw-medium fs-14">Admin</a>
                                                    </li>
                                                    <li>
                                                        <div class="first-list">
                                                            <div class="list-wrap">
                                                                <a href="javascript: void(0);"
                                                                    class="fw-medium text-primary"><img
                                                                        src="/assets/images/extra/folder.png"
                                                                        class="folder-icon me-1" alt=""> corporate</a>
                                                            </div>
                                                        </div>
                                                        <div class="first-list">
                                                            <div class="list-wrap">
                                                                <a href="javascript: void(0);"
                                                                    class="fw-medium text-primary"><img
                                                                        src="/assets/images/extra/folder.png"
                                                                        class="folder-icon me-1" alt="">creative</a>
                                                            </div>
                                                        </div>
                                                        <div class="first-list">
                                                            <div class="list-wrap">
                                                                <a href="javascript: void(0);"
                                                                    class="fw-medium text-primary"><img
                                                                        src="/assets/images/extra/folder.png"
                                                                        class="folder-icon me-1" alt="">default</a>
                                                            </div>
                                                            <ul class="second-list list-unstyled">
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/folder.png"
                                                                            class="folder-icon me-1" alt="">app</a>
                                                                    <ul class="second-list list-unstyled">
                                                                        <li> <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">Console</a></li>
                                                                        <li><a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">Exceptions</a></li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">Http</a>
                                                                            <ul class="second-list list-unstyled">
                                                                                <li>
                                                                                    <a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/folder.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">Controller</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/folder.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">Middleware</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="me-1"
                                                                                            alt="">Kernel.php</a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">Models</a></li>
                                                                        <li><a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">Providers</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/folder.png"
                                                                            class="folder-icon me-1"
                                                                            alt="">bootstrap</a>
                                                                    <ul class="second-list list-unstyled">
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">cache</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/file.png"
                                                                                    class="me-1" alt="">app.php</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/folder.png"
                                                                            class="folder-icon me-1" alt="">config</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/folder.png"
                                                                            class="folder-icon me-1" alt="">database</a>
                                                                    <ul class="second-list list-unstyled">
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">factories</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">migrations</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">seeders</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/file.png"
                                                                                    class="me-1" alt="">.gitignore</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/folder.png"
                                                                            class="folder-icon me-1" alt="">lang</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/folder.png"
                                                                            class="folder-icon me-1" alt="">public</a>
                                                                    <ul class="second-list list-unstyled">
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">build</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">images</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/file.png"
                                                                                    class="me-1" alt="">.htaccess</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/file.png"
                                                                                    class="me-1" alt="">favicon.ico</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/file.png"
                                                                                    class="me-1" alt="">index.php</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/file.png"
                                                                                    class="me-1"
                                                                                    alt="">mix-manifest.json</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/folder.png"
                                                                            class="folder-icon me-1"
                                                                            alt="">resources</a>
                                                                    <ul class="second-list list-unstyled">
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">fonts</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">images</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">js</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">json</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">lang</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">scss</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">views</a>
                                                                            <ul class="second-list list-unstyled">
                                                                                <li>
                                                                                    <a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/folder.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">auth</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/folder.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">components</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/folder.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">error</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/folder.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">layouts</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/folder.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">all
                                                                                        blade pages</a>
                                                                                </li>

                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/folder.png"
                                                                            class="folder-icon me-1" alt="">routes</a>
                                                                    <ul class="second-list list-unstyled">
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">api.php</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/file.png"
                                                                                    class="me-1" alt="">channel.php</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/file.png"
                                                                                    class="me-1" alt="">console.php</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/file.png"
                                                                                    class="me-1" alt="">web.php</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/folder.png"
                                                                            class="folder-icon me-1" alt="">storage</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/folder.png"
                                                                            class="folder-icon me-1" alt="">tests</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/file.png"
                                                                            class="me-1" alt="">.editorconfig</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/file.png"
                                                                            class="me-1" alt="">.env</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/file.png"
                                                                            class="me-1" alt="">.gitattributes</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/file.png"
                                                                            class="me-1" alt="">.gitignore</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/file.png"
                                                                            class="me-1" alt="">.rtlcsssrc</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/file.png"
                                                                            class="me-1" alt="">artisan</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/file.png"
                                                                            class="me-1" alt="">composer.json</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/file.png"
                                                                            class="me-1" alt="">composer.lock</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/file.png"
                                                                            class="me-1" alt="">package.json</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/file.png"
                                                                            class="me-1"
                                                                            alt="">package-copy-config.json</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/file.png"
                                                                            class="me-1" alt="">package-lock.json</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/file.png"
                                                                            class="me-1" alt="">phpunit.xml</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/file.png"
                                                                            class="me-1" alt="">README.md</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/file.png"
                                                                            class="me-1" alt="">server.php</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/file.png"
                                                                            class="me-1" alt="">vite.config.js</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="first-list">
                                                            <div class="list-wrap">
                                                                <a href="javascript: void(0);"
                                                                    class="fw-medium text-primary"><img
                                                                        src="/assets/images/extra/folder.png"
                                                                        class="folder-icon me-1" alt="">galaxy</a>
                                                            </div>
                                                        </div>
                                                        <div class="first-list">
                                                            <div class="list-wrap">
                                                                <a href="javascript: void(0);"
                                                                    class="fw-medium text-primary"><img
                                                                        src="/assets/images/extra/folder.png"
                                                                        class="folder-icon me-1" alt="">interactive</a>
                                                            </div>
                                                        </div>
                                                        <div class="first-list">
                                                            <div class="list-wrap">
                                                                <a href="javascript: void(0);"
                                                                    class="fw-medium text-primary"><img
                                                                        src="/assets/images/extra/folder.png"
                                                                        class="folder-icon me-1" alt="">material</a>
                                                            </div>
                                                        </div>
                                                        <div class="first-list">
                                                            <div class="list-wrap">
                                                                <a href="javascript: void(0);"
                                                                    class="fw-medium text-primary"><img
                                                                        src="/assets/images/extra/folder.png"
                                                                        class="folder-icon me-1" alt="">minimal</a>
                                                            </div>
                                                        </div>
                                                        <div class="first-list">
                                                            <div class="list-wrap">
                                                                <a href="javascript: void(0);"
                                                                    class="fw-medium text-primary"><img
                                                                        src="/assets/images/extra/folder.png"
                                                                        class="folder-icon me-1" alt="">modern</a>
                                                            </div>
                                                        </div>
                                                        <div class="first-list">
                                                            <div class="list-wrap">
                                                                <a href="javascript: void(0);"
                                                                    class="fw-medium text-primary"><img
                                                                        src="/assets/images/extra/folder.png"
                                                                        class="folder-icon me-1" alt="">sass</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="v400" role="tabpanel">
                                            <div class="verti-sitemap">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="p-0 parent-title"><a href="javascript: void(0);"
                                                            class="fw-medium fs-14">Admin</a>
                                                    </li>
                                                    <li>

                                                        <div class="first-list">
                                                            <div class="list-wrap">
                                                                <a href="javascript: void(0);"
                                                                    class="fw-medium text-primary"><img
                                                                        src="/assets/images/extra/folder.png"
                                                                        class="folder-icon me-1" alt="">Master</a>
                                                            </div>
                                                            <ul class="second-list list-unstyled">
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/folder.png"
                                                                            class="folder-icon me-1" alt="">app</a>
                                                                    <ul class="second-list list-unstyled">
                                                                        <li> <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">Console</a></li>
                                                                        <li><a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">Exceptions</a></li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">Http</a>
                                                                            <ul class="second-list list-unstyled">
                                                                                <li>
                                                                                    <a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/folder.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">Controller</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/folder.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">Middleware</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="me-1"
                                                                                            alt="">Kernel.php</a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">Models</a></li>
                                                                        <li><a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">Providers</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/folder.png"
                                                                            class="folder-icon me-1"
                                                                            alt="">bootstrap</a>
                                                                    <ul class="second-list list-unstyled">
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">cache</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/file.png"
                                                                                    class="me-1" alt="">app.php</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/folder.png"
                                                                            class="folder-icon me-1" alt="">config</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/folder.png"
                                                                            class="folder-icon me-1" alt="">database</a>
                                                                    <ul class="second-list list-unstyled">
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">factories</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">migrations</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">seeders</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/file.png"
                                                                                    class="me-1" alt="">.gitignore</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/folder.png"
                                                                            class="folder-icon me-1" alt="">lang</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/folder.png"
                                                                            class="folder-icon me-1" alt="">public</a>
                                                                    <ul class="second-list list-unstyled">
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">build</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">images</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/file.png"
                                                                                    class="me-1" alt="">.htaccess</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/file.png"
                                                                                    class="me-1" alt="">favicon.ico</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/file.png"
                                                                                    class="me-1" alt="">index.php</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/file.png"
                                                                                    class="me-1"
                                                                                    alt="">mix-manifest.json</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/folder.png"
                                                                            class="folder-icon me-1"
                                                                            alt="">resources</a>
                                                                    <ul class="second-list list-unstyled">
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">fonts</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">images</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">js</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">json</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">lang</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">scss</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">views</a>
                                                                            <ul class="second-list list-unstyled">
                                                                                <li>
                                                                                    <a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/folder.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">auth</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/folder.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">components</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/folder.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">error</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/folder.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">layouts</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/folder.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">all
                                                                                        blade pages</a>
                                                                                </li>

                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/folder.png"
                                                                            class="folder-icon me-1" alt="">routes</a>
                                                                    <ul class="second-list list-unstyled">
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">api.php</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/file.png"
                                                                                    class="me-1" alt="">channel.php</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/file.png"
                                                                                    class="me-1" alt="">console.php</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript: void(0);"><img
                                                                                    src="/assets/images/extra/file.png"
                                                                                    class="me-1" alt="">web.php</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/folder.png"
                                                                            class="folder-icon me-1" alt="">storage</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/folder.png"
                                                                            class="folder-icon me-1" alt="">tests</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/file.png"
                                                                            class="me-1" alt="">.editorconfig</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/file.png"
                                                                            class="me-1" alt="">.env</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/file.png"
                                                                            class="me-1" alt="">.gitattributes</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/file.png"
                                                                            class="me-1" alt="">.gitignore</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/file.png"
                                                                            class="me-1" alt="">.rtlcsssrc</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/file.png"
                                                                            class="me-1" alt="">artisan</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/file.png"
                                                                            class="me-1" alt="">composer.json</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/file.png"
                                                                            class="me-1" alt="">composer.lock</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/file.png"
                                                                            class="me-1" alt="">package.json</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/file.png"
                                                                            class="me-1"
                                                                            alt="">package-copy-config.json</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/file.png"
                                                                            class="me-1" alt="">package-lock.json</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/file.png"
                                                                            class="me-1" alt="">phpunit.xml</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/file.png"
                                                                            class="me-1" alt="">README.md</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/file.png"
                                                                            class="me-1" alt="">server.php</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);"><img
                                                                            src="/assets/images/extra/file.png"
                                                                            class="me-1" alt="">vite.config.js</a>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                    </li>
                                                </ul>
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