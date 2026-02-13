@extends('docs.laravel.layout')

@section('title', 'Choices | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Choices</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Choices</li>
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

                                    <h5 class="fw-semibold">Overview<a href="https://github.com/Choices-js/Choices"
                                            target="_blank" class="float-end badge badge-soft-success">Official Website
                                            <i class="ri-external-link-line"></i></a> </h5>
                                    <p class="text-muted mb-4">Choices.js is a vanilla JavaScript plugin that converts
                                        the
                                        normal select or input into customizable select inputs with multi-select and
                                        autocomplete support.</p>
                                    <h6 class="mt-3">Javascript</h6>
                                    <pre><code class="language-markup">&lt;!-- choices.js --&gt;
&lt;script type='text/javascript' src='build/libs/choices.js/public/assets/scripts/choices.min.js'&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Note</h6>
                                    <pre><code class="language-markup">Choices js file is loaded in &lt;script src=&quot;assets/js/pluggins.js&quot;&gt;&lt;/script&gt;.</code></pre>

                                    <h6 class="mt-3">Initjs (Custom js)</h6>
                                    <pre><code class="language-markup">&lt;!-- app js --&gt;
&lt;script src=&quot;build/js/app.js&quot;&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Add Package</h6>
                                    <pre><code class="language-markup">yarn add choices.js --save</code></pre>

                                    <h6 class="mt-3">Remove Package</h6>
                                    <pre><code class="language-markup">yarn remove choices.js or you can remove package by removing specific package from package.json</code></pre>
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
                                                    <th scope="row">Default Choice</th>
                                                    <td>
                                                        <pre><code class="language-markup">&lt;select class=&quot;form-control&quot; data-choices name=&quot;choices-single-default&quot;&gt;
    &lt;option value=&quot;&quot;&gt;This is a placeholder&lt;/option&gt;
    &lt;option value=&quot;Choice 1&quot;&gt;...&lt;/option&gt;
    &lt;option value=&quot;Choice 2&quot;&gt;...&lt;/option&gt;
&lt;/select&gt;</code></pre>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">Option Groups</th>
                                                    <td>
                                                        <pre><code class="language-markup">&lt;select class=&quot;form-control&quot; data-choices data-choices-groups  data-placeholder=&quot;Select City&quot; name=&quot;choices-single-groups&quot;&gt;
    &lt;option value=&quot;&quot;&gt;Choose a city&lt;/option&gt;
    &lt;optgroup label=&quot;UK&quot;&gt;
        &lt;option value=&quot;London&quot;&gt;London&lt;/option&gt;
        &lt;option value=&quot;Manchester&quot;&gt;Manchester&lt;/option&gt;
        &lt;option value=&quot;Liverpool&quot;&gt;Liverpool&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label=&quot;Country&quot;&gt;
        &lt;option value=&quot;...&quot;&gt;...&lt;/option&gt;
        &lt;option value=&quot;...&quot;&gt;...&lt;/option&gt;
        &lt;option value=&quot;...&quot;&gt;...&lt;/option&gt;
    &lt;/optgroup&gt;
&lt;/select&gt;</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Options added with no search</th>
                                                    <td>
                                                        <pre><code class="language-markup">&lt;select class=&quot;form-control&quot; name=&quot;choices-single-no-search&quot; data-choices data-choices-search-false  data-choices-removeItem&gt;
    &lt;option value=&quot;Zero&quot;&gt;Zero&lt;/option&gt;
    &lt;option value=&quot;One&quot;&gt;One&lt;/option&gt;
    &lt;option value=&quot;...&quot;&gt;...&lt;/option&gt;

&lt;/select&gt;</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Options added with no sorting</th>
                                                    <td>
                                                        <pre><code class="language-markup">&lt;select class=&quot;form-control&quot; name=&quot;choices-single-no-sorting&quot; data-choices data-choices-sorting-false&gt;
    &lt;option value=&quot;Madrid&quot;&gt;Madrid&lt;/option&gt;
    &lt;option value=&quot;Toronto&quot;&gt;Toronto&lt;/option&gt;
    &lt;option value=&quot;Vancouver&quot;&gt;Vancouver&lt;/option&gt;
    &lt;option value=&quot;London&quot;&gt;London&lt;/option&gt;
    &lt;option value=&quot;Manchester&quot;&gt;Manchester&lt;/option&gt;
    &lt;option value=&quot;...&quot;&gt;...&lt;/option&gt;
&lt;/select&gt;</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Default Multiple Select</th>
                                                    <td>
                                                        <pre><code class="language-markup">&lt;select class=&quot;form-control&quot; data-choices name=&quot;choices-multiple-default&quot; multiple&gt;
    &lt;option value=&quot;Choice 1&quot; selected&gt;Choice 1&lt;/option&gt;
    &lt;option value=&quot;Choice 2&quot;&gt;Choice 2&lt;/option&gt;
    &lt;option value=&quot;...&quot;&gt;...&lt;/option&gt;
    &lt;option value=&quot;...&quot; disabled&gt;...&lt;/option&gt;
&lt;/select&gt;</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Multiple Select with remove button</th>
                                                    <td>
                                                        <pre><code class="language-markup"> &lt;select class=&quot;form-control&quot; data-choices data-choices-removeItem name=&quot;choices-multiple-remove-button&quot;multiple&gt;
    &lt;option value=&quot;Choice 1&quot; selected&gt;Choice 1&lt;/option&gt;
    &lt;option value=&quot;Choice 2&quot;&gt;Choice 2&lt;/option&gt;
    &lt;option value=&quot;...&quot;&gt;...&lt;/option&gt;    
&lt;/select&gt;</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Multiple Select with options group.</th>
                                                    <td>
                                                        <pre><code class="language-markup"> &lt;select class=&quot;form-control&quot; name=&quot;choices-multiple-groups&quot; data-choices data-choices-multiple-groups=&quot;true&quot; multiple&gt;
    &lt;option value=&quot;&quot;&gt;Choose a city&lt;/option&gt;
    &lt;optgroup label=&quot;UK&quot;&gt;
        &lt;option value=&quot;London&quot;&gt;London&lt;/option&gt;
        &lt;option value=&quot;Manchester&quot;&gt;Manchester&lt;/option&gt;
        &lt;option value=&quot;Liverpool&quot;&gt;Liverpool&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label=&quot;Country&quot;&gt;
        &lt;option value=&quot;...&quot;&gt;...&lt;/option&gt;
        &lt;option value=&quot;...&quot;&gt;...&lt;/option&gt;
        &lt;option value=&quot;...&quot;&gt;...&lt;/option&gt;
    &lt;/optgroup&gt;                                                           
    
&lt;/select&gt;</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Choices select limit with text input & removebutton
                                                    </th>
                                                    <td>
                                                        <pre><code class="language-markup">&lt;input class=&quot;form-control&quot; data-choices data-choices-limit=&quot;your required limit&quot; data-choices-removeItem type=&quot;text&quot;value=&quot;Task-1&quot; /&gt;</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Choices unique value only, no pasting</th>
                                                    <td>
                                                        <pre><code class="language-markup">&lt;input class=&quot;form-control&quot; data-choices data-choices-text-unique-true type=&quot;text&quot; value=&quot;Project-A, Project-B&quot; /&gt;</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Choices with disable option</th>
                                                    <td>
                                                        <pre><code class="language-markup">&lt;input class=&quot;form-control&quot; data-choices data-choices-text-disabled-true type=&quot;text&quot; value=&quot;josh&#64;joshuajohnson.co.uk, joe&#64;bloggs.co.uk&quot; /&gt;</code></pre>
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