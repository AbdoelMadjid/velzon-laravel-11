@extends('docs.laravel.layout')

@section('title', 'Color pickr | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Color pickr</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Color pickr</li>
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

                                    <h5 class="fw-semibold">Overview<a href="https://simonwep.github.io/pickr/"
                                            target="_blank" class="float-end badge badge-soft-success">Official Website
                                            <i class="ri-external-link-line"></i></a> </h5>
                                    <p class="text-muted mb-4">Colorpickr: Flat, simple, multi-themed, responsive and
                                        hackable Color-Picker library.</p>

                                    <h6>CSS</h6>
                                    <pre><code class="language-markup">&lt;!-- One of the following themes --&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;&#123;&#123; URL::asset('build/libs/&#64;simonwep/pickr/themes/classic.min.css') &#125;&#125;&quot;/&gt; &lt;!-- 'classic' theme --&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;&#123;&#123; URL::asset('build/libs/&#64;simonwep/pickr/themes/monolith.min.css') &#125;&#125;&quot;/&gt; &lt;!-- 'monolith' theme --&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;&#123;&#123; URL::asset('build/libs/&#64;simonwep/pickr/themes/nano.min.css') &#125;&#125;&quot;/&gt; &lt;!-- 'nano' theme --&gt;
</code></pre>

                                    <h6 class="mt-3">Javascript</h6>
                                    <pre><code class="language-markup">&lt;!-- Modern colorpicker bundle --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/libs/&#64;simonwep/pickr/pickr.min.js') &#125;&#125;&quot;&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Initjs (Custom js)</h6>
                                    <pre><code class="language-markup">&lt;!--  color pickr init js --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/js/pages/form-pickers.init.js') &#125;&#125;&quot;&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Add Package</h6>
                                    <pre><code class="language-markup">npm i &#64;simonwep/pickr --save</code></pre>

                                    <h6 class="mt-3">Remove Package</h6>
                                    <pre><code class="language-markup">npm unistall &#64;simonwep/pickr or you can remove package by removing specific package from package.json</code></pre>

                                </div><!-- end card-body -->

                                <div class="card-body border-top border-2 border-top-dashed">
                                    <h5 class="fw-semibold">Colorpickr Examples</h5>

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
                                                    <th scope="row">Classic Demo</th>
                                                    <td>
                                                        <pre><code class="language-js">var classicPickrDemo = document.querySelectorAll(".classic-colorpicker");

classicPickrDemo.forEach(function () {
Pickr.create({
    el: ".classic-colorpicker",
    theme: "classic", // or 'monolith', or 'nano'
    default: "#405189",
    swatches: [
        "rgba(244, 67, 54, 1)",
        "rgba(233, 30, 99, 0.95)",
        "rgba(156, 39, 176, 0.9)",
        "rgba(103, 58, 183, 0.85)",
        "rgba(63, 81, 181, 0.8)",
        "rgba(33, 150, 243, 0.75)",
        "rgba(3, 169, 244, 0.7)",
        "rgba(0, 188, 212, 0.7)",
        "rgba(0, 150, 136, 0.75)",
        "rgba(76, 175, 80, 0.8)",
        "rgba(139, 195, 74, 0.85)",
        "rgba(205, 220, 57, 0.9)",
        "rgba(255, 235, 59, 0.95)",
        "rgba(255, 193, 7, 1)",
    ],

    components: {
        // Main components
        preview: true,
        opacity: true,
        hue: true,

        // Input / output Options
        interaction: {
            hex: true,
            rgba: true,
            hsva: true,
            input: true,
            clear: true,
            save: true,
        },
    },
});
});
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Monolith Demo</th>
                                                    <td>
                                                        <pre><code class="language-js">var monolithColorPickr = document.querySelectorAll(".monolith-colorpicker");
monolithColorPickr.forEach(function () {
Pickr.create({
    el: ".monolith-colorpicker",
    theme: "monolith",
    default: "#0ab39c",
    swatches: [
        "rgba(244, 67, 54, 1)",
        "rgba(233, 30, 99, 0.95)",
        "rgba(156, 39, 176, 0.9)",
        "rgba(103, 58, 183, 0.85)",
        "rgba(63, 81, 181, 0.8)",
        "rgba(33, 150, 243, 0.75)",
        "rgba(3, 169, 244, 0.7)",
    ],
    defaultRepresentation: "HEXA",
    components: {
        // Main components
        preview: true,
        opacity: true,
        hue: true,

        // Input / output Options
        interaction: {
            hex: false,
            rgba: false,
            hsva: false,
            input: true,
            clear: true,
            save: true,
        },
    },
});
});
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Nano Demo</th>
                                                    <td>
                                                        <pre><code class="language-js">var nanoColorPickr = document.querySelectorAll(".nano-colorpicker");
nanoColorPickr.forEach(function () {
Pickr.create({
    el: ".nano-colorpicker",
    theme: "nano",
    default: "#3577f1",
    swatches: [
        "rgba(244, 67, 54, 1)",
        "rgba(233, 30, 99, 0.95)",
        "rgba(156, 39, 176, 0.9)",
        "rgba(103, 58, 183, 0.85)",
        "rgba(63, 81, 181, 0.8)",
        "rgba(33, 150, 243, 0.75)",
        "rgba(3, 169, 244, 0.7)",
    ],
    defaultRepresentation: "HEXA",
    components: {
        // Main components
        preview: true,
        opacity: true,
        hue: true,

        // Input / output Options
        interaction: {
            hex: false,
            rgba: false,
            hsva: false,
            input: true,
            clear: true,
            save: true,
        },
    },
});
});
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Options Demo</th>
                                                    <td>
                                                        <pre><code class="language-js">var demoColorPickr = document.querySelectorAll(".colorpicker-demo");
demoColorPickr.forEach(function () {
Pickr.create({
    el: ".colorpicker-demo",
    theme: "monolith",
    default: "#405189",
    components: {
        // Main components
        preview: true,
        // Input / output Options
        interaction: {
            clear: true,
            save: true,
        },
    },
});
}); 
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Picker with Opacity & Hue</th>
                                                    <td>
                                                        <pre><code class="language-js">var opacityHueColorPickr = document.querySelectorAll(".colorpicker-opacity-hue");
opacityHueColorPickr.forEach(function () {
Pickr.create({
    el: ".colorpicker-opacity-hue",
    theme: "monolith",
    default: "#0ab39c",

    components: {
        // Main components
        preview: true,
        opacity: true,
        hue: true,

        // Input / output Options
        interaction: {
            clear: true,
            save: true,
        },
    },
});
});
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Switches</th>
                                                    <td>
                                                        <pre><code class="language-js">var swatcherColorPickr = document.querySelectorAll(".colorpicker-swatches");
swatcherColorPickr.forEach(function () {
Pickr.create({
    el: ".colorpicker-swatches",
    theme: "monolith",
    default: "#3577f1",
    swatches: [
        "rgba(244, 67, 54, 1)",
        "rgba(233, 30, 99, 0.95)",
        "rgba(156, 39, 176, 0.9)",
        "rgba(103, 58, 183, 0.85)",
        "rgba(63, 81, 181, 0.8)",
        "rgba(33, 150, 243, 0.75)",
        "rgba(3, 169, 244, 0.7)",
    ],
    components: {
        // Main components
        preview: true,
        opacity: true,
        hue: true,

        // Input / output Options
        interaction: {
            clear: true,
            save: true,
        },
    },
});
});

</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Picker with Input</th>
                                                    <td>
                                                        <pre><code class="language-js">var inputColorPickr = document.querySelectorAll(".colorpicker-input");
inputColorPickr.forEach(function () {
Pickr.create({
    el: ".colorpicker-input",
    theme: "monolith",
    default: "#f7b84b",
    swatches: [
        "rgba(244, 67, 54, 1)",
        "rgba(233, 30, 99, 0.95)",
        "rgba(156, 39, 176, 0.9)",
        "rgba(103, 58, 183, 0.85)",
        "rgba(63, 81, 181, 0.8)",
        "rgba(33, 150, 243, 0.75)",
        "rgba(3, 169, 244, 0.7)",
    ],
    components: {
        // Main components
        preview: true,
        opacity: true,
        hue: true,

        // Input / output Options
        interaction: {
            input: true,
            clear: true,
            save: true,
        },
    },
});
});
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Color Format</th>
                                                    <td>
                                                        <pre><code class="language-js">var formatColorPickr = document.querySelectorAll(".colorpicker-format");
formatColorPickr.forEach(function () {
Pickr.create({
    el: ".colorpicker-format",
    theme: "monolith",
    default: "#f06548",
    swatches: [
        "rgba(244, 67, 54, 1)",
        "rgba(233, 30, 99, 0.95)",
        "rgba(156, 39, 176, 0.9)",
        "rgba(103, 58, 183, 0.85)",
        "rgba(63, 81, 181, 0.8)",
        "rgba(33, 150, 243, 0.75)",
        "rgba(3, 169, 244, 0.7)",
    ],
    components: {
        // Main components
        preview: true,
        opacity: true,
        hue: true,

        // Input / output Options
        interaction: {
            hex: true,
            rgba: true,
            hsva: true,
            input: true,
            clear: true,
            save: true,
        },
    },
});
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