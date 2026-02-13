@extends('docs.laravel.layout')

@section('title', 'CKeditor | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">CKeditor</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">CKeditor</li>
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

                                    <h5 class="fw-semibold">Overview<a href="https://github.com/ckeditor/ckeditor5"
                                            target="_blank" class="float-end badge badge-soft-success">Official Website
                                            <i class="ri-external-link-line"></i></a> </h5>
                                    <p class="text-muted mb-4">Ck Editor is a set of ready-to-use rich text editors
                                        created
                                        with a powerful
                                        framework. Made with real-time collaborative editing in mind. </p>


                                    <h6 class="mt-3">Javascript</h6>
                                    <pre><code class="language-markup">&lt;!-- ckeditor --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/libs/&#64;ckeditor/ckeditor5-build-classic/build/ckeditor.js') &#125;&#125;&quot;&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Initjs (Custom js)</h6>
                                    <pre><code class="language-markup">&lt;!-- init js --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/js/pages/form-editor.init.js') &#125;&#125;&quot;&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Add Package</h6>
                                    <pre><code class="language-markup">npm i &#64;ckeditor/ckeditor5-build-classic --save</code></pre>

                                    <h6 class="mt-3">Remove Package</h6>
                                    <pre><code class="language-markup">npm unistall &#64;ckeditor/ckeditor5-build-classic or you can remove package by removing specific package from package.json</code></pre>

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
                                                    <th scope="row">CK Editor</th>
                                                    <td>
                                                        <pre><code class="language-js">var ckClassicEditor = document.querySelectorAll(".ckeditor-classic")
    ckClassicEditor.forEach(function () {
        ClassicEditor
    .create( document.querySelector( '.ckeditor-classic' ) )
    .then( function(editor) {
        editor.ui.view.editable.element.style.height = '200px';
    } )
    .catch( function(error) {
        console.error( error );
    } );
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