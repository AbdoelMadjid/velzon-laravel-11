@extends('docs.laravel.layout')

@section('title', 'Select2 | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Select2</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Select2</li>
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

                                    <h5 class="fw-semibold">Overview<a href="https://select2.org/" target="_blank"
                                            class="float-end badge badge-soft-success">Official Website <i
                                                class="ri-external-link-line"></i></a> </h5>
                                    <p class="text-muted mb-4">Select2 gives you a customizable select box with support
                                        for searching, tagging,
                                        remote data sets, infinite scrolling, and many other highly used options.</p>
                                    <h6 class="mt-3">Javascript</h6>
                                    <pre><code class="language-markup">&lt;!--jquery cdn--&gt;
&lt;script src=&quot;https://code.jquery.com/jquery-3.6.0.min.js&quot; integrity=&quot;sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=&quot; crossorigin=&quot;anonymous&quot;&gt;&lt;/script&gt;
&lt;!--select2 cdn--&gt;
&lt;script src=&quot;https://cdn.jsdelivr.net/npm/select2&#64;4.1.0-rc.0/dist/js/select2.min.js&quot;&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Note</h6>
                                    <pre><code class="language-markup">This is Select2 page in wihch we have used jQuery with cnd link!</code></pre>

                                    <h6 class="mt-3">Initjs (Custom js)</h6>
                                    <pre><code class="language-markup">&lt;script src=&quot;build/js/pages/select2.init.js&quot;&gt;&lt;
/script&gt;</code></pre>


                                </div><!-- end card-body -->

                                <div class="card-body border-top border-2 border-top-dashed">
                                    <h5 class="fw-semibold">Examples</h5>

                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width:40%">Title</th>
                                                    <th scope="col">HTML</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Basic Select</th>
                                                    <td>
                                                        <pre><code class="language-markup">&lt;select class=&quot;js-example-basic-single&quot; name=&quot;state&quot;&gt;
    &lt;option value=&quot;AL&quot;&gt;Alabama&lt;/option&gt;
        &lt;option value=&quot;MA&quot;&gt;Madrid&lt;/option&gt;
        &lt;option value=&quot;TO&quot;&gt;Toronto&lt;/option&gt;
        &lt;option value=&quot;LO&quot;&gt;Londan&lt;/option&gt;
    &lt;option value=&quot;WY&quot;&gt;Wyoming&lt;/option&gt;
&lt;/select&gt;</code></pre>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">Multi Select</th>
                                                    <td>
                                                        <pre><code class="language-markup">&lt;select class=&quot;js-example-basic-multiple&quot; name=&quot;states[]&quot; multiple=&quot;multiple&quot;&gt;
    &lt;optgroup label=&quot;UK&quot;&gt;
        &lt;option value=&quot;London&quot;&gt;London&lt;/option&gt;
        &lt;option value=&quot;Manchester&quot; selected&gt;Manchester&lt;/option&gt;
        &lt;option value=&quot;Liverpool&quot;&gt;Liverpool&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label=&quot;FR&quot;&gt;
        &lt;option value=&quot;Paris&quot;&gt;Paris&lt;/option&gt;
        &lt;option value=&quot;Lyon&quot;&gt;Lyon&lt;/option&gt;
        &lt;option value=&quot;Marseille&quot;&gt;Marseille&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label=&quot;SP&quot;&gt;
        &lt;option value=&quot;Madrid&quot; selected&gt;Madrid&lt;/option&gt;
        &lt;option value=&quot;Barcelona&quot;&gt;Barcelona&lt;/option&gt;
        &lt;option value=&quot;Malaga&quot;&gt;Malaga&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label=&quot;CA&quot;&gt;
        &lt;option value=&quot;Montreal&quot;&gt;Montreal&lt;/option&gt;
        &lt;option value=&quot;Toronto&quot;&gt;Toronto&lt;/option&gt;
        &lt;option value=&quot;Vancouver&quot;&gt;Vancouver&lt;/option&gt;
    &lt;/optgroup&gt;
&lt;/select&gt;</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Ajax Select</th>
                                                    <td>
                                                        <pre><code class="language-markup">&lt;select class=&quot;js-example-data-array&quot; name=&quot;state&quot;&gt;&lt;/select&gt;</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Templating</th>
                                                    <td>
                                                        <pre><code class="language-markup">&lt;select class=&quot;form-control js-example-templating&quot;&gt;
    &lt;optgroup label=&quot;Alaskan/Hawaiian Time Zone&quot;&gt;
        &lt;option value=&quot;AK&quot;&gt;Alaska&lt;/option&gt;
        &lt;option value=&quot;HI&quot;&gt;Hawaii&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label=&quot;Pacific Time Zone&quot;&gt;
        &lt;option value=&quot;CA&quot;&gt;California&lt;/option&gt;
        &lt;option value=&quot;NV&quot;&gt;Nevada&lt;/option&gt;
        &lt;option value=&quot;OR&quot;&gt;Oregon&lt;/option&gt;
        &lt;option value=&quot;WA&quot;&gt;Washington&lt;/option&gt;
    &lt;/optgroup&gt;
&lt;/select&gt;</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Selections Templating</th>
                                                    <td>
                                                        <pre><code class="language-markup">&lt;select class=&quot;form-control select-flag-templating&quot;&gt;
    &lt;optgroup label=&quot;Alaskan/Hawaiian Time Zone&quot;&gt;
        &lt;option value=&quot;AK&quot;&gt;Alaska&lt;/option&gt;
        &lt;option value=&quot;HI&quot;&gt;Hawaii&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label=&quot;Pacific Time Zone&quot;&gt;
        &lt;option value=&quot;CA&quot;&gt;California&lt;/option&gt;
        &lt;option value=&quot;NV&quot;&gt;Nevada&lt;/option&gt;
        &lt;option value=&quot;OR&quot;&gt;Oregon&lt;/option&gt;
        &lt;option value=&quot;WA&quot;&gt;Washington&lt;/option&gt;
    &lt;/optgroup&gt;
&lt;/select&gt;</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Disabling a Select2 Control</th>
                                                    <td>
                                                        <pre><code class="language-markup">&lt;select class=&quot;js-example-disabled&quot; name=&quot;state&quot;&gt;
        &lt;option value=&quot;AL&quot;&gt;Alabama&lt;/option&gt;
        &lt;option value=&quot;MA&quot;&gt;Madrid&lt;/option&gt;
        &lt;option value=&quot;TO&quot;&gt;Toronto&lt;/option&gt;
        &lt;option value=&quot;LO&quot;&gt;Londan&lt;/option&gt;
        &lt;option value=&quot;WY&quot;&gt;Wyoming&lt;/option&gt;
    &lt;/select&gt;
    &lt;select class=&quot;js-example-disabled-multi&quot; name=&quot;states[]&quot; multiple=&quot;multiple&quot;&gt;
        &lt;optgroup label=&quot;UK&quot;&gt;
            &lt;option value=&quot;London&quot;&gt;London&lt;/option&gt;
            &lt;option value=&quot;Manchester&quot; selected&gt;Manchester&lt;/option&gt;
            &lt;option value=&quot;Liverpool&quot;&gt;Liverpool&lt;/option&gt;
        &lt;/optgroup&gt;
        &lt;optgroup label=&quot;FR&quot;&gt;
            &lt;option value=&quot;Paris&quot;&gt;Paris&lt;/option&gt;
            &lt;option value=&quot;Lyon&quot;&gt;Lyon&lt;/option&gt;
            &lt;option value=&quot;Marseille&quot;&gt;Marseille&lt;/option&gt;
        &lt;/optgroup&gt;
        &lt;optgroup label=&quot;SP&quot;&gt;
            &lt;option value=&quot;Madrid&quot; selected&gt;Madrid&lt;/option&gt;
            &lt;option value=&quot;Barcelona&quot;&gt;Barcelona&lt;/option&gt;
            &lt;option value=&quot;Malaga&quot;&gt;Malaga&lt;/option&gt;
        &lt;/optgroup&gt;
        &lt;optgroup label=&quot;CA&quot;&gt;
            &lt;option value=&quot;Montreal&quot;&gt;Montreal&lt;/option&gt;
            &lt;option value=&quot;Toronto&quot;&gt;Toronto&lt;/option&gt;
            &lt;option value=&quot;Vancouver&quot;&gt;Vancouver&lt;/option&gt;
        &lt;/optgroup&gt;
    &lt;/select&gt;
    &lt;/div&gt;
    &lt;div class=&quot;hstack gap-2 mt-3&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;js-programmatic-enable btn btn-primary&quot;&gt;
        Enable
    &lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;js-programmatic-disable btn btn-success&quot;&gt;
        Disable
    &lt;/button&gt;
&lt;/div&gt;</code></pre>
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