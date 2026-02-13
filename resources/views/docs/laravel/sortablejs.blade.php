@extends('docs.laravel.layout')

@section('title', 'SortableJS | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">SortableJS</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">SortableJS</li>
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

                                    <h5 class="fw-semibold">Overview <a href="https://sortablejs.github.io/Sortable/"
                                            target="_blank" class="float-end badge badge-soft-success">Official Website
                                            <i class="ri-external-link-line"></i></a></h5>
                                    <p class="text-muted mb-4">SortableJS JavaScript library for reorderable
                                        drag-and-drop
                                        lists.</p>


                                    <h6 class="mt-3">Javascript</h6>
                                    <pre><code class="language-markup">&lt;!-- sortablejs --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/libs/sortablejs/Sortable.min.js') &#125;&#125;&quot;&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Initjs (Custom js)</h6>
                                    <pre><code class="language-markup">&lt;!-- nestable init js --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/js/pages/nestable.init.js') &#125;&#125;&quot;&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Add Package</h6>
                                    <pre><code class="language-markup">npm i sortablejs --save</code></pre>

                                    <h6 class="mt-3">Remove Package</h6>
                                    <pre><code class="language-markup">npm uninstall sortablejs or you can remove package by removing specific package from package.json</code></pre>

                                </div><!-- end card-body -->

                                <div class="card-body border-top border-2 border-top-dashed">
                                    <h5 class="fw-semibold">Examples</h5>

                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width:40%">Title</th>
                                                    <th scope="col">Javascript</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Nested Sortables List</th>
                                                    <td>
                                                        <pre><code class="language-js">var nestedSortables = [].slice.call(document.querySelectorAll('.nested-sortable'));

for (var i = 0; i < nestedSortables.length; i++) {
    new Sortable(nestedSortables[i], {
        group: 'nested',
        animation: 150,
        fallbackOnBody: true,
        swapThreshold: 0.65
    });
}</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Nested Sortables List with Handle</th>
                                                    <td>
                                                        <pre><code class="language-js">var nestedSortablesHandles = [].slice.call(document.querySelectorAll('.nested-sortable-handle'));

for (var i = 0; i < nestedSortablesHandles.length; i++) {
    new Sortable(nestedSortablesHandles[i], {
        handle: '.handle',
        group: 'nested',
        animation: 150,
        fallbackOnBody: true,
        swapThreshold: 0.65
    });
}</code></pre>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                        <!-- end table -->
                                    </div>
                                    <!-- end table responsive -->
                                </div><!-- end card-body -->

                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
@endsection