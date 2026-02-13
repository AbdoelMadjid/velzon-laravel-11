@extends('docs.laravel.layout')

@section('title', 'Quill Js | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Quill Js</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Quill Js</li>
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

                                    <h5 class="fw-semibold">Overview<a href="https://github.com/quilljs/quill/"
                                            target="_blank" class="float-end badge badge-soft-success">Official Website
                                            <i class="ri-external-link-line"></i></a> </h5>
                                    <p class="text-muted mb-4">Quill is a modern rich text editor built for
                                        compatibility
                                        and extensibility.</p>

                                    <h6>CSS</h6>
                                    <pre><code class="language-markup">&lt;!-- quill css --&gt;
&lt;link href=&quot;&#123;&#123; URL::asset('build/libs/quill/quill.core.css') &#125;&#125;&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot; /&gt;
&lt;!-- bubble css for bubble editor--&gt;
&lt;link href=&quot;&#123;&#123; URL::asset('build/libs/quill/quill.bubble.css') &#125;&#125;&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot; /&gt;
&lt;!-- snow css for snow editor--&gt;
&lt;link href=&quot;&#123;&#123; URL::asset('build/libs/quill/quill.snow.css') &#125;&#125;&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot; /&gt;
</code></pre>

                                    <h6 class="mt-3">Javascript</h6>
                                    <pre><code class="language-markup">&lt;!-- quill js --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/libs/quill/quill.min.js') &#125;&#125;&quot;&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Initjs (Custom js)</h6>
                                    <pre><code class="language-markup">&lt;!-- init js --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/js/pages/form-editor.init.js') &#125;&#125;&quot;&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Add Package</h6>
                                    <pre><code class="language-markup">npm i quill --save</code></pre>

                                    <h6 class="mt-3">Remove Package</h6>
                                    <pre><code class="language-markup">npm unistall quill or you can remove package by removing specific package from package.json</code></pre>

                                </div><!-- end card-body -->

                                <div class="card-body border-top border-2 border-top-dashed">
                                    <h5 class="fw-semibold">Quilljs Editor</h5>

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
                                                    <th scope="row">Snow Editor</th>
                                                    <td>
                                                        <pre><code class="language-js">var snowEditor = document.querySelectorAll(".snow-editor")
    snowEditor.forEach(function (item) {
        var snowEditorData = {};
        var issnowEditorVal = item.classList.contains("snow-editor");
        if (issnowEditorVal==true) {
            snowEditorData.theme = 'snow',
            snowEditorData.modules = {
            'toolbar': [[{ 'font': [] }, { 'size': [] }], ['bold', 'italic', 'underline', 'strike'],
             [{ 'color': [] }, { 'background': [] }], [{ 'script': 'super' }, { 'script': 'sub' }], 
             [{ 'header': [false, 1, 2, 3, 4, 5, 6] }, 'blockquote', 'code-block'], 
             [{ 'list': 'ordered' }, { 'list': 'bullet' }, { 'indent': '-1' }, { 'indent': '+1' }], 
             ['direction', { 'align': [] }], ['link', 'image', 'video'], ['clean']]
        }
        }
    new Quill(item, snowEditorData);
});

</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Bubble Editor</th>
                                                    <td>
                                                        <pre><code class="language-js">var bubbleEditor = document.querySelectorAll(".bubble-editor")
bubbleEditor.forEach(function (element) {
    var bubbleEditorData = {};
    var isbubbleEditorVal = element.classList.contains("bubble-editor");
    if (isbubbleEditorVal==true) {
        bubbleEditorData.theme = 'bubble'
    }
new Quill(element, bubbleEditorData);
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