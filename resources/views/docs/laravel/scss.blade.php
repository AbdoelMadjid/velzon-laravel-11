@extends('docs.laravel.layout')

@section('title', 'Customization SCSS | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Customization SCSS</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Customization SCSS</li>
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
                                            <h5 class="fw-semibold">Structure</h5>
                                            <p class="text-muted mb-4">Velzon has managed the scss file in the
                                                <code>resources/scss</code> folder.
                                                We have used
                                                mix-sass for scss compilation. You can add your custom scss in the
                                                <code>custom.scss</code> file instead of doing changes in the
                                                <code>app.scss</code> or
                                                other scss
                                                files as it will create conflicts in future updates.
                                            </p>
                                            <ul class="nav nav-pills nav-success mb-3" role="tablist">
                                                <li class="nav-item waves-effect waves-light" role="presentation">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#v351"
                                                        role="tab" aria-selected="true"> &lt;= v3.*</a>
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
                                                                <li class="p-0 parent-title"><a
                                                                        href="javascript: void(0);"
                                                                        class="fw-medium fs-14"><img
                                                                            src="/assets/images/extra/folder.png"
                                                                            class="folder-icon me-1" alt="">scss</a>
                                                                </li>
                                                                <li>
                                                                    <div class="first-list">
                                                                        <div class="list-wrap">
                                                                            <a href="javascript: void(0);"
                                                                                class="fw-medium text-primary"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">components</a>
                                                                            <ul class="second-list list-unstyled">
                                                                                <li>
                                                                                    <a href="javascript: void(0);"
                                                                                        class="fw-medium text-primary"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">All
                                                                                        the components scss files are
                                                                                        here.</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="first-list">
                                                                        <div class="list-wrap">
                                                                            <a href="javascript: void(0);"
                                                                                class="fw-medium text-primary"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">fonts</a>
                                                                            <ul class="second-list list-unstyled">
                                                                                <li>
                                                                                    <a href="javascript: void(0);"
                                                                                        class="fw-medium text-primary"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">_fonts.scss</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="first-list">
                                                                        <div class="list-wrap">
                                                                            <a href="javascript: void(0);"
                                                                                class="fw-medium text-primary"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">pages</a>
                                                                            <ul class="second-list list-unstyled">
                                                                                <li>
                                                                                    <a href="javascript: void(0);"
                                                                                        class="fw-medium text-primary"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">All
                                                                                        the pages scss files are
                                                                                        here.</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="first-list">
                                                                        <div class="list-wrap">
                                                                            <a href="javascript: void(0);"
                                                                                class="fw-medium text-primary"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">plugins</a>
                                                                            <ul class="second-list list-unstyled">
                                                                                <li>
                                                                                    <a href="javascript: void(0);"
                                                                                        class="fw-medium text-primary"><img
                                                                                            src="/assets/images/extra/folder.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">icons</a>
                                                                                    <ul
                                                                                        class="second-list list-unstyled">
                                                                                        <li>
                                                                                            <a href="javascript: void(0);"
                                                                                                class="fw-medium text-primary"><img
                                                                                                    src="/assets/images/extra/file.png"
                                                                                                    class="folder-icon me-1"
                                                                                                    alt="">All
                                                                                                the icons scss files are
                                                                                                here.</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript: void(0);"
                                                                                        class="fw-medium text-primary"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">All
                                                                                        the plugins scss files are
                                                                                        here.</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="first-list">
                                                                        <div class="list-wrap">
                                                                            <a href="javascript: void(0);"
                                                                                class="fw-medium text-primary"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">structure</a>
                                                                            <ul class="second-list list-unstyled">
                                                                                <li>
                                                                                    <a href="javascript: void(0);"
                                                                                        class="fw-medium text-primary"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">_footer.scss</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript: void(0);"
                                                                                        class="fw-medium text-primary"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">_general.scss</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript: void(0);"
                                                                                        class="fw-medium text-primary"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">_horizontal.scss</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript: void(0);"
                                                                                        class="fw-medium text-primary"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">_layouts.scss</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript: void(0);"
                                                                                        class="fw-medium text-primary"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">_page-head.scss</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript: void(0);"
                                                                                        class="fw-medium text-primary"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">_topbar.scss</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript: void(0);"
                                                                                        class="fw-medium text-primary"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">_two-column.scss</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript: void(0);"
                                                                                        class="fw-medium text-primary"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">_vertical.scss</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="first-list">
                                                                        <div class="list-wrap">
                                                                            <a href="javascript: void(0);"
                                                                                class="fw-medium text-primary"><img
                                                                                    src="/assets/images/extra/file.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">_variables.scss</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="first-list">
                                                                        <div class="list-wrap">
                                                                            <a href="javascript: void(0);"
                                                                                class="fw-medium text-primary"><img
                                                                                    src="/assets/images/extra/file.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">_variables-custom.scss</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="first-list">
                                                                        <div class="list-wrap">
                                                                            <a href="javascript: void(0);"
                                                                                class="fw-medium text-primary"><img
                                                                                    src="/assets/images/extra/file.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">__variables-dark.scss</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="first-list">
                                                                        <div class="list-wrap">
                                                                            <a href="javascript: void(0);"
                                                                                class="fw-medium text-primary"><img
                                                                                    src="/assets/images/extra/file.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">app.scss</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="first-list">
                                                                        <div class="list-wrap">
                                                                            <a href="javascript: void(0);"
                                                                                class="fw-medium text-primary"><img
                                                                                    src="/assets/images/extra/file.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">bootstrap.scss</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="first-list">
                                                                        <div class="list-wrap">
                                                                            <a href="javascript: void(0);"
                                                                                class="fw-medium text-primary"><img
                                                                                    src="/assets/images/extra/file.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">custom.scss</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="first-list">
                                                                        <div class="list-wrap">
                                                                            <a href="javascript: void(0);"
                                                                                class="fw-medium text-primary"><img
                                                                                    src="/assets/images/extra/file.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">icons.scss</a>
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
                                                                <li class="p-0 parent-title"><a
                                                                        href="javascript: void(0);"
                                                                        class="fw-medium fs-14"><img
                                                                            src="/assets/images/extra/folder.png"
                                                                            class="folder-icon me-1" alt="">sass</a>
                                                                </li>
                                                                <li>
                                                                    <div class="first-list">
                                                                        <div class="list-wrap">
                                                                            <a href="javascript: void(0);"
                                                                                class="fw-medium text-primary"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">components</a>
                                                                        </div>
                                                                        <ul class="second-list list-unstyled">
                                                                            <li>
                                                                                <a href="javascript: void(0);"><img
                                                                                        src="/assets/images/extra/file.png"
                                                                                        class="folder-icon me-1"
                                                                                        alt="">All
                                                                                    the components scss files are
                                                                                    here.</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="first-list">
                                                                        <div class="list-wrap">
                                                                            <a href="javascript: void(0);"
                                                                                class="fw-medium text-primary"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">fonts</a>
                                                                            <ul class="second-list list-unstyled">
                                                                                <li>
                                                                                    <a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">_fonts.scss</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="first-list">
                                                                        <div class="list-wrap">
                                                                            <a href="javascript: void(0);"
                                                                                class="fw-medium text-primary"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">pages</a>
                                                                            <ul class="second-list list-unstyled">
                                                                                <li>
                                                                                    <a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">All
                                                                                        the pages scss files are
                                                                                        here.</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="first-list">
                                                                        <div class="list-wrap">
                                                                            <a href="javascript: void(0);"
                                                                                class="fw-medium text-primary"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">plugins</a>
                                                                            <ul class="second-list list-unstyled">
                                                                                <li>
                                                                                    <a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/folder.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">icons</a>
                                                                                    <ul
                                                                                        class="second-list list-unstyled">
                                                                                        <li>
                                                                                            <a
                                                                                                href="javascript: void(0);"><img
                                                                                                    src="/assets/images/extra/file.png"
                                                                                                    class="file-icon me-1"
                                                                                                    alt="">All
                                                                                                the icons scss files are
                                                                                                here</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="file-icon me-1"
                                                                                            alt="">All
                                                                                        the plugins scss files are
                                                                                        here.</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="first-list">
                                                                        <div class="list-wrap">
                                                                            <a href="javascript: void(0);"
                                                                                class="fw-medium text-primary"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">structure</a>
                                                                            <ul class="second-list list-unstyled">
                                                                                <li>
                                                                                    <a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">_footer.scss</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">_horizontal.scss</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">_layouts.scss</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">_page-head.scss</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">_topbar.scss</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">_two-column.scss</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">_vertical.scss</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="first-list">
                                                                        <div class="list-wrap">
                                                                            <a href="javascript: void(0);"
                                                                                class="fw-medium text-primary"><img
                                                                                    src="/assets/images/extra/folder.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">theme</a>
                                                                            <ul class="second-list list-unstyled">
                                                                                <li><a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">_default.scss
                                                                                    </a>
                                                                                </li>
                                                                                <li><a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">_creative.scss</a>
                                                                                </li>
                                                                                <li><a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">_interactive.scss</a>
                                                                                </li>
                                                                                <li><a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">_material.scss</a>
                                                                                </li>
                                                                                <li><a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">_minimal.scss</a>
                                                                                </li>
                                                                                <li><a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">_modern.scss</a>
                                                                                </li>
                                                                                <li><a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">_saas.scss</a>
                                                                                </li>
                                                                                <li><a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">_galaxy.scss</a>
                                                                                </li>
                                                                                <li><a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">_corporate.scss</a>
                                                                                </li>
                                                                                <li><a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">_classic.scss</a>
                                                                                </li>
                                                                                <li><a href="javascript: void(0);"><img
                                                                                            src="/assets/images/extra/file.png"
                                                                                            class="folder-icon me-1"
                                                                                            alt="">_vintage.scss</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="first-list">
                                                                        <div class="list-wrap">
                                                                            <a href="javascript: void(0);"
                                                                                class="fw-medium text-primary"><img
                                                                                    src="/assets/images/extra/file.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">_variables-custom.scss</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="first-list">
                                                                        <div class="list-wrap">
                                                                            <a href="javascript: void(0);"
                                                                                class="fw-medium text-primary"><img
                                                                                    src="/assets/images/extra/file.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">_variables-dark.scss</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="first-list">
                                                                        <div class="list-wrap">
                                                                            <a href="javascript: void(0);"
                                                                                class="fw-medium text-primary"><img
                                                                                    src="/assets/images/extra/file.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">_variables-galaxy-dark.scss</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="first-list">
                                                                        <div class="list-wrap">
                                                                            <a href="javascript: void(0);"
                                                                                class="fw-medium text-primary"><img
                                                                                    src="/assets/images/extra/file.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">_variables.scss</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="first-list">
                                                                        <div class="list-wrap">
                                                                            <a href="javascript: void(0);"
                                                                                class="fw-medium text-primary"><img
                                                                                    src="/assets/images/extra/file.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">app.scss</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="first-list">
                                                                        <div class="list-wrap">
                                                                            <a href="javascript: void(0);"
                                                                                class="fw-medium text-primary"><img
                                                                                    src="/assets/images/extra/file.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">bootstrap.scss</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="first-list">
                                                                        <div class="list-wrap">
                                                                            <a href="javascript: void(0);"
                                                                                class="fw-medium text-primary"><img
                                                                                    src="/assets/images/extra/file.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">custom.scss</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="first-list">
                                                                        <div class="list-wrap">
                                                                            <a href="javascript: void(0);"
                                                                                class="fw-medium text-primary"><img
                                                                                    src="/assets/images/extra/file.png"
                                                                                    class="folder-icon me-1"
                                                                                    alt="">icons.scss</a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                            </div>

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

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Layout Structure</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <p>We have added all layouts files in the <code>resources/scss/structure</code>
                                            folder.</p>
                                        <div class="col-sm-12">
                                            <dl class="mb-0">
                                                <dt><code>_footer.scss:</code></dt>
                                                <dd class="mb-3 fs-13 text-muted">Footer-related scss define in this
                                                    file.
                                                </dd>
                                                <dt><code>_horizontal.scss:</code></dt>
                                                <dd class="mb-3 fs-13 text-muted">Horizontal layout scss managed in this
                                                    file.</dd>
                                                <dt><code>_layouts.scss:</code></dt>
                                                <dd class="mb-3 fs-13 text-muted">Manage Boxed layout scss in this file.
                                                </dd>
                                                <dt><code>_page-head.scss:</code></dt>
                                                <dd class="mb-3 fs-13 text-muted">Manage page heading scss in this file.
                                                </dd>
                                                <dt><code>_topbar.scss:</code></dt>
                                                <dd class="mb-3 fs-13 text-muted">Topbar scss in this file.</dd>
                                                <dt><code>_two-column.scss:</code></dt>
                                                <dd class="mb-3 fs-13 text-muted">Two Column scss in this file.</dd>
                                                <dt><code>_vertical.scss:</code></dt>
                                                <dd class="mb-0 fs-13 text-muted">Vertical layout scss in this file.
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Variables Structure</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <p>We have define all the variables in the <code>resources/scss/default</code>
                                            folder.</p>
                                        <div class="col-sm-12">
                                            <dl class="mb-0">
                                                <dt><code>_variables.scss:</code></dt>
                                                <dd class="fs-13 text-muted mb-0">All bootstrap variables are defined in
                                                    this
                                                    file.</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Other scss file Structure</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <p>We have created all the scss files in the <code>resources/scss</code> folder.
                                        </p>
                                        <div class="col-sm-12">
                                            <dl class="mb-0">
                                                <dt>components:</dt>
                                                <dd class="mb-3 fs-13 text-muted">All components related scss files are
                                                    created in this folder.</dd>
                                                <dt>fonts:</dt>
                                                <dd class="mb-3 fs-13 text-muted">All fonts are imported in this scss
                                                    file.
                                                </dd>
                                                <dt>pages:</dt>
                                                <dd class="mb-3 fs-13 text-muted">All the pages related scss are written
                                                    in
                                                    this folder and page wise scss
                                                    are created i.e. _authentication.scss, _chat.scss, _dashboard.scss
                                                    etc
                                                </dd>
                                                <dt>plugins:</dt>
                                                <dd class="mb-3 fs-13 text-muted">All the plugins ( Apex chart,
                                                    ckeditor,
                                                    full calendar etc ) are created
                                                    in plugins folder.</dd>
                                                <dt>icons.scss:</dt>
                                                <dd class="fs-13 text-muted">All icons scss are imported in this file.
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->


                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Quick customization of layout using scss.</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <p>You can make changes in the
                                            <code>resources/scss/config/default/_variables.scss</code> file.
                                        </p>
                                        <div class="col-sm-12">
                                            <table class="table table-bordered mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Variables</th>
                                                        <th>Description</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <pre class="mb-0">$primary:       $indigo;
$secondary:     $blue;
$success:       $green;
$info:          $cyan;
$warning:       $yellow;
$danger:        $red;
$light:         $gray-100;
$dark:          $gray-900;</pre>
                                                        </td>
                                                        <td>You can manage those colors to update color theme.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <pre class="mb-0">$font-family-primary:                             'Poppins', sans-serif;
$font-family-secondary:                           'hkgrotesk', sans-serif;</pre>
                                                        </td>
                                                        <td>
                                                            You can set the default font in these variables.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <pre class="mb-0">$vertical-menu-width:                             250px;
$vertical-menu-width-md:                          180px;
$vertical-menu-width-sm:                          70px;</pre>
                                                        </td>
                                                        <td>
                                                            Set the sidebar menu with in these variables.
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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