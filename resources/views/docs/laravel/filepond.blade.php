@extends('docs.laravel.layout')

@section('title', 'Filepond-File Uploads | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Filepond-File Uploads</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Filepond-File Uploads</li>
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
                                    <h5 class="fw-semibold">Overview<a href="https://pqina.nl/filepond/" target="_blank"
                                            class="float-end badge badge-soft-success">Official Website <i
                                                class="ri-external-link-line"></i></a> </h5>
                                    <p class="text-muted mb-4">Filepond is a JavaScript library that can upload anything
                                        you
                                        throw at it,
                                        optimizes images for faster uploads, and offers a great, accessible, silky
                                        smooth
                                        user experience.
                                    </p>

                                    <h6>CSS</h6>
                                    <pre><code class="language-markup">&lt;!-- Filepond css --&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;&#123;&#123; URL::asset('build/libs/filepond/filepond.min.css') &#125;&#125;&quot; type=&quot;text/css&quot; /&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;&#123;&#123; URL::asset('build/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css') &#125;&#125;&quot;&gt;
</code></pre>

                                    <h6 class="mt-3">Javascript</h6>
                                    <pre><code class="language-markup">&lt;!-- filepond js --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/libs/filepond/filepond.min.js') &#125;&#125;&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js') &#125;&#125;&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js') &#125;&#125;&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js') &#125;&#125;&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js') &#125;&#125;&quot;&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Initjs (Custom js)</h6>
                                    <pre><code class="language-markup">&lt;!-- File upload js --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/js/pages/form-file-upload.init.js') &#125;&#125;&quot;&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Add Package</h6>
                                    <pre><code class="language-markup">npm i filepond --save</code></pre>

                                    <h6 class="mt-3">Remove Package</h6>
                                    <pre><code class="language-markup">npm unistall filepond or you can remove package by removing specific package from package.json</code></pre>

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
                                                    <th scope="row">Multiple File Upload</th>
                                                    <td>
                                                        <pre><code class="language-js">FilePond.registerPlugin(
    // encodes the file as base64 data
    FilePondPluginFileEncode,
    // validates the size of the file
    FilePondPluginFileValidateSize,
    // corrects mobile image orientation
    FilePondPluginImageExifOrientation,
    // previews dropped images
    FilePondPluginImagePreview
);

var inputMultipleElements = document.querySelectorAll('input.filepond-input-multiple');

// loop over input elements
Array.from(inputMultipleElements).forEach(function(inputElement) {
    // create a FilePond instance at the input element location
    FilePond.create(inputElement);
})
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Profile Picture Selection</th>
                                                    <td>
                                                        <pre><code class="language-js">FilePond.registerPlugin(
    // encodes the file as base64 data
    FilePondPluginFileEncode,
    // validates the size of the file
    FilePondPluginFileValidateSize,
    // corrects mobile image orientation
    FilePondPluginImageExifOrientation,
    // previews dropped images
    FilePondPluginImagePreview
);

FilePond.create(
    document.querySelector('.filepond-input-circle'),
    {
        labelIdle: 'Drag & Drop your picture or <span class="filepond--label-action">Browse</span>',
        imagePreviewHeight: 170,
        imageCropAspectRatio: '1:1',
        imageResizeTargetWidth: 200,
        imageResizeTargetHeight: 200,
        stylePanelLayout: 'compact circle',
        styleLoadIndicatorPosition: 'center bottom',
        styleProgressIndicatorPosition: 'right bottom',
        styleButtonRemoveItemPosition: 'left bottom',
        styleButtonProcessItemPosition: 'right bottom',
    }
);
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