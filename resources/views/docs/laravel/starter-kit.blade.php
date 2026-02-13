@extends('docs.laravel.layout')

@section('title', 'Starter kit | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Starter-kit</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Starter-kit</li>
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
                                            <h5 class="fw-semibold text-dark">Starter-kit</h5>

                                            <p class="alert alert-info"><b>Starter kit</b> is a simplified and minimal
                                                version of an admin template. It provides the basic structure, essential
                                                components, and foundational code for building an application, but it's
                                                intentionally minimalistic. A starter kit is ideal for developers who
                                                want
                                                to build a custom admin panel from scratch and prefer to handpick and
                                                integrate additional components as needed. Starter kits are often
                                                lightweight and offer more flexibility, as developers can choose which
                                                features to include and which to implement separately.</p>


                                            <p class="text-muted">You can use the Starter-kit if you are creating a new
                                                project. It will be
                                                time-consuming to use the full admin version for a new project as Velzon
                                                have more than 150 pages.</p>
                                            <p class="text-muted">We have provided all the below
                                                pages in the Starter-kit with all the packages.
                                            </p>
                                            <div>
                                                <p> 👉 Layouts</p>
                                                <p> 👉 Authentication pages</p>
                                                <p> 👉 Error</p>
                                                <p> 👉 Blank pages</p>
                                            </div>
                                            <div class="alert alert-warning">
                                                <b>In order to get the Starterkit files please contact us via support
                                                    from
                                                    the link below.</b><br> <a href="https://velzon.themesbrand.com/"
                                                    target="_blank">https://velzon.themesbrand.com</a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h5 class="fw-semibold">Full Admin</h5>
                                            <p class="alert alert-info"><b>Full admin</b> template, on the other hand,
                                                is a comprehensive package that
                                                includes a wide range of pre-designed UI components, layouts, styles,
                                                and functionality. It's a more complete solution that offers a cohesive
                                                and feature-rich starting point for building admin panels. Full admin
                                                templates are designed to speed up development by providing a
                                                ready-to-use interface with various modules, data tables, charts,
                                                authentication flows, and more. They are particularly useful when you
                                                want to rapidly create a functional admin dashboard without spending
                                                time on designing each component from scratch.</p>
                                        </div>
                                        <!--end col-->

                                        <div class="col-sm-6">

                                        </div>
                                        <!--end col-->

                                    </div>
                                    <!--end row-->
                                    <ul class="nav nav-pills nav-success mb-3" role="tablist">
                                        <li class="nav-item waves-effect waves-light" role="presentation">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#v351" role="tab"
                                                aria-selected="true">
                                                &lt;= v3.5.1</a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#v400" role="tab"
                                                aria-selected="false" tabindex="-1"> &gt;= v4.0.0</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content text-muted">
                                        <div class="tab-pane active" id="v351" role="tabpanel">
                                            <div>
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
                                                                            class="folder-icon me-1" alt="">
                                                                        corporate</a>
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
                                                                                class="folder-icon me-1"
                                                                                alt="">config</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript: void(0);"><img
                                                                                src="/assets/images/extra/folder.png"
                                                                                class="folder-icon me-1"
                                                                                alt="">database</a>
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
                                                                                        class="me-1"
                                                                                        alt="">.gitignore</a>
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
                                                                                class="folder-icon me-1"
                                                                                alt="">public</a>
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
                                                                                        class="me-1"
                                                                                        alt="">.htaccess</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript: void(0);"><img
                                                                                        src="/assets/images/extra/file.png"
                                                                                        class="me-1"
                                                                                        alt="">favicon.ico</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript: void(0);"><img
                                                                                        src="/assets/images/extra/file.png"
                                                                                        class="me-1"
                                                                                        alt="">index.php</a>
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
                                                                                class="folder-icon me-1"
                                                                                alt="">routes</a>
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
                                                                                        class="me-1"
                                                                                        alt="">channel.php</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript: void(0);"><img
                                                                                        src="/assets/images/extra/file.png"
                                                                                        class="me-1"
                                                                                        alt="">console.php</a>
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
                                                                                class="folder-icon me-1"
                                                                                alt="">storage</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript: void(0);"><img
                                                                                src="/assets/images/extra/folder.png"
                                                                                class="folder-icon me-1"
                                                                                alt="">tests</a>
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
                                                                                class="me-1"
                                                                                alt="">package-lock.json</a>
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
                                                                            class="folder-icon me-1"
                                                                            alt="">interactive</a>
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
                                        </div>

                                        <div class="tab-pane" id="v400" role="tabpanel">
                                            <div>
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
                                                                                class="folder-icon me-1"
                                                                                alt="">config</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript: void(0);"><img
                                                                                src="/assets/images/extra/folder.png"
                                                                                class="folder-icon me-1"
                                                                                alt="">database</a>
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
                                                                                        class="me-1"
                                                                                        alt="">.gitignore</a>
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
                                                                                class="folder-icon me-1"
                                                                                alt="">public</a>
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
                                                                                        class="me-1"
                                                                                        alt="">.htaccess</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript: void(0);"><img
                                                                                        src="/assets/images/extra/file.png"
                                                                                        class="me-1"
                                                                                        alt="">favicon.ico</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript: void(0);"><img
                                                                                        src="/assets/images/extra/file.png"
                                                                                        class="me-1"
                                                                                        alt="">index.php</a>
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
                                                                                class="folder-icon me-1"
                                                                                alt="">routes</a>
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
                                                                                        class="me-1"
                                                                                        alt="">channel.php</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript: void(0);"><img
                                                                                        src="/assets/images/extra/file.png"
                                                                                        class="me-1"
                                                                                        alt="">console.php</a>
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
                                                                                class="folder-icon me-1"
                                                                                alt="">storage</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript: void(0);"><img
                                                                                src="/assets/images/extra/folder.png"
                                                                                class="folder-icon me-1"
                                                                                alt="">tests</a>
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
                                                                                class="me-1"
                                                                                alt="">package-lock.json</a>
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
                                            <!--end col-->
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