@extends('docs.laravel.layout')

@section('title', 'List Js | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">List Js</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">List Js</li>
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

                                    <h5 class="fw-semibold">Overview<a href="../../../../github.com/javve/list.html"
                                            target="_blank" class="float-end badge badge-soft-success">Official Website
                                            <i class="ri-external-link-line"></i></a> </h5>
                                    <p class="text-muted mb-4">List js is a library for adding search, sort, filters and
                                        flexibility to tables, lists and various HTML elements. </p>

                                    <h6 class="mt-3">Javascript</h6>
                                    <pre><code class="language-markup">&lt;!-- List js --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/libs/list.js/list.min.js') &#125;&#125;&quot;&gt;&lt;/script&gt;
&lt;!-- Pagination js --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/libs/list.pagination.js/list.pagination.min.js') &#125;&#125;&quot;&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Initjs (Custom js)</h6>
                                    <pre><code class="language-markup">&lt;!-- listjs init --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/js/pages/listjs.init.js') &#125;&#125;&quot;&gt;&lt;/script&gt;</code></pre>
                                    <h6 class="mt-3">Add Package</h6>
                                    <pre><code class="language-markup">npm i list.js --save</code></pre>

                                    <h6 class="mt-3">Remove Package</h6>
                                    <pre><code class="language-markup">npm unistall remove list.js or you can remove package by removing specific package from package.json</code></pre>

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
                                                    <th scope="row">Data Attributes + Custom</th>
                                                    <td>
                                                        <pre><code class="language-js">var attroptions = {
  valueNames: [
    'name',
    'born',
    { data: ['id'] },
    { attr: 'src', name: 'image' },
    { attr: 'href', name: 'link' },
    { attr: 'data-timestamp', name: 'timestamp' }
  ]
};
var attrList = new List('users', attroptions);
attrList.add({ name: 'Leia', born: '1954', image: 'build/images/users/avatar-5.jpg', id: 5, timestamp: '67893' });
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Existing List</th>
                                                    <td>
                                                        <pre><code class="language-js">var existOptionsList = {
    valueNames: [ 'contact-name', 'contact-message' ]
};

var existList = new List('contact-existing-list', existOptionsList);
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Fuzzy Search</th>
                                                    <td>
                                                        <pre><code class="language-js">var fuzzySearchList = new List('fuzzysearch-list', { 
    valueNames: ['name']
});
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Pagination</th>
                                                    <td>
                                                        <pre><code class="language-js">var paginationList = new List('pagination-list', {
    valueNames: ['pagi-list'],
    page: 3,
    pagination: true
});
</code></pre>
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