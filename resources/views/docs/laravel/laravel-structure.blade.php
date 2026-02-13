@extends('docs.laravel.layout')

@section('title', 'Laravel Structure | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Laravel Structure</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Laravel Structure</li>
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
                                    <p class="alert alert-warning text-warning">How to create new page?</p>

                                    <div class="mb-3">
                                        <p class="text-muted">Let's create new page named test. create new route for
                                            page in <code>routes/web.php</code> like below.</p>
                                        <pre><code class="language-markup">Route::get('/test-page', [App\Http\Controllers\TestController::class, 'test'])->name('test');</code></pre>
                                    </div>
                                    <div class="mb-3">
                                        <p class="text-muted">After adding routes create new controller using below
                                            command.</p>
                                        <pre><code class="language-markup">php artisan make:controller TestController</code></pre>
                                    </div>

                                    <div class="mb-3">
                                        <p class="text-muted">Open your TestController file. which is located in
                                            <code>app/Http/Controller/TestController.php</code>. and create new function
                                            named <code>test()</code>.</p>
                                        <pre><code class="language-markup">public function test() {
    return view('test');
}</code></pre>
                                    </div>

                                    <div class="mb-3">
                                        <p class="text-muted">Now time to make view of test page. create
                                            <code>test.blade.php</code> in <code>resources/views/</code> directory.</p>
                                        <pre><code class="language-markup">&#64;extends&#40;&quot;layouts.master&quot;)
&#64;section('title') Page Title &#64;endsection
&#64;section('css')
&lt;!-- your page css file --&gt;
&#64;endsection
&#64;section('content')
&lt;!-- your page content start from here --&gt;

&#64;endsection
&#64;section('content')
&lt;!-- your page script here --&gt;
&#64;endsection</code></pre>
                                    </div>

                                    <div class="mb-3">
                                        <p class="text-muted">Now, simple run below command for clear cache. and you can
                                            use your page after.</p>
                                        <pre><code class="language-markup">php artisan optimize</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <p class="alert alert-warning text-warning">How to add new javascript dependency?
                                    </p>

                                    <div class="mb-3">
                                        <p class="text-muted">Let's add new module named <code>simplebar</code>. Install
                                            Simplebar using below command.</p>
                                        <pre><code class="language-markup">npm install simplebar</code></pre>
                                    </div>

                                    <div class="mb-3">
                                        <p class="text-muted">Its time to register Simplebar in
                                            <code>package-copy-config.json</code> file.</p>
                                        <pre><code class="language-markup">{
"packagesToCopy": [
    "simplebar"
    ]
}</code></pre>
                                    </div>

                                    <div class="mb-3">
                                        <p class="text-muted">and then run below command. after you can access this from
                                            <code>public/build/libs/simplebar</code>.</p>
                                        <pre><code class="language-markup">npm run build</code></pre>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!--end row-->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
@endsection