@extends('docs.laravel.layout')

@section('title', 'Icons | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Icons</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Icons</li>
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
                                    <h6>Icon Scss</h6>
                                    <p class="text-muted mb-3"><b>icon.scss</b> is source file for the all custom icon
                                        plugins.</p>
                                    <pre><code class="language-markup">&lt;!-- icon scss --&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;&#123;&#123; URL::asset('resources/scss/icon.scss') &#125;&#125;&quot;&gt;
</code></pre>

                                    <h5 class="fw-semibold mt-3 pt-3 border-top border-2 border-top-dashed">Remix
                                        icons<a href="https://remixicon.com/" target="_blank"
                                            class="float-end badge badge-soft-success">Official Website <i
                                                class="ri-external-link-line"></i></a> </h5>
                                    <p class="text-muted mb-3">Remix Icon is a set of open-source neutral-style system
                                        symbols elaborately crafted for designers and developers.
                                        of the icons are free for both personal and commercial use.</p>

                                    <h6 class="mt-3">Scss File</h6>
                                    <p class="text-muted mb-3">Remix icons are scss based here.where remix icon code is
                                        written in <b>_remixicon.scss</b> </p>
                                    <pre><code class="language-markup">&lt;!-- remix icon scss --&gt;
&#64;import &quot;custom/plugins/icons/remixicon&quot;;
</code></pre>

                                    <h6 class="mt-3">Example</h6>
                                    <pre><code class="language-markup">&lt;i class=&quot;ri-home-line&quot;&gt;&lt;/i&gt; or &lt;i class=&quot;ri-home-fill&quot;&gt;&lt;/i&gt;</code></pre>

                                    <h5 class="fw-semibold mt-3 pt-3 border-top border-2 border-top-dashed">Box icons<a
                                            href="https://boxicons.com/" target="_blank"
                                            class="float-end badge badge-soft-success">Official Website <i
                                                class="ri-external-link-line"></i></a> </h5>
                                    <p class="text-muted mb-3">Boxicons is a free collection of carefully crafted open
                                        source icons.Each icon is designed on a 24px grid with the material guidelines.
                                    </p>

                                    <h6 class="mt-3">Scss File</h6>
                                    <p class="text-muted mb-3">Remix icons are scss based here.where remix icon code is
                                        written in <b>_boxicon.scss</b> </p>
                                    <pre><code class="language-markup">&lt;!-- box icon scss --&gt;
&#64;import &quot;custom/plugins/icons/boxicons&quot;; 
</code></pre>

                                    <h6 class="mt-3">Example</h6>
                                    <pre><code class="language-markup">&lt;i class=&quot;bx bx-**&quot;&gt;&lt;/i&gt;</code></pre>

                                    <h5 class="fw-semibold mt-3 pt-3 border-top border-2 border-top-dashed">Material
                                        Design
                                        Icons<a href="https://materialdesignicons.com/" target="_blank"
                                            class="float-end badge badge-soft-success">Official Website <i
                                                class="ri-external-link-line"></i></a> </h5>
                                    <p class="text-muted mb-3">Material Design Icon is growing icon collection allows
                                        designers and developers targeting various platforms to download icons in the
                                        format,
                                        color and size they need for any project.</p>

                                    <h6 class="mt-3">Scss File</h6>
                                    <p class="text-muted mb-3">Material Design Icons are scss based here.where remix
                                        icon
                                        code is written in <b>_materialdesignicons.scss</b> </p>
                                    <pre><code class="language-markup">&lt;!-- material design icons scss --&gt;
&#64;import &quot;custom/plugins/icons/materialdesignicons&quot;; 
</code></pre>

                                    <h6 class="mt-3">Example</h6>
                                    <pre><code class="language-markup">&lt;i class=&quot;mdi mdi-*-*&quot;&gt;&lt;/i&gt;</code></pre>

                                    <h5 class="fw-semibold mt-3 pt-3 border-top border-2 border-top-dashed">Line
                                        Awesome<a href="https://icons8.com/line-awesome" target="_blank"
                                            class="float-end badge badge-soft-success">Official Website <i
                                                class="ri-external-link-line"></i></a> </h5>
                                    <p class="text-muted mb-3">Line Awesome consists line icons with a single line of
                                        code.
                                    </p>

                                    <h6 class="mt-3">Scss File</h6>
                                    <p class="text-muted mb-3">Line Awesome Icons are scss based here.where remix icon
                                        code
                                        is written in <b>_line-awesome.scss</b> </p>
                                    <pre><code class="language-markup">&lt;!-- line awesome icons scss --&gt;
&#64;import &quot;custom/plugins/icons/line-awesome&quot;; 
</code></pre>

                                    <h6 class="mt-3">Example</h6>
                                    <pre><code class="language-markup">&lt;i class=&quot;lab la-*-*&quot;&gt;&lt;/i&gt;</code></pre>

                                    <h5 class="fw-semibold mt-3 pt-3 border-top border-2 border-top-dashed">Feather
                                        Icons<a href="https://feathericons.com/" target="_blank"
                                            class="float-end badge badge-soft-success">Official Website <i
                                                class="ri-external-link-line"></i></a> </h5>
                                    <p class="text-muted mb-3">Feather is a collection of simply beautiful open source
                                        icons. Each icon is designed on a 24x24 grid
                                        with an emphasis on simplicity, consistency, and flexibility.</p>

                                    <h6 class="mt-3">Javascript</h6>
                                    <pre><code class="language-markup">&lt;script src=&quot;&#123;&#123; URL::asset('build/libs/feather-icons/feather.min.js') &#125;&#125;&quot;&gt;&lt;/script&gt;
</code></pre>

                                    <h6 class="mt-3">Example</h6>
                                    <pre><code class="language-markup">&lt;i data-feather=&quot;**&quot;&gt;&lt;/i&gt;</code></pre>

                                    <h5 class="fw-semibold mt-4 pt-4 border-top border-2 border-top-dashed">Crypto Icons
                                    </h5>
                                    <p class="text-muted mb-3">Crypto icon is a collection of simply beautiful svg
                                        images.You can use it by just adding svg images in your project.</p>


                                    <h6 class="mt-3">Example</h6>
                                    <pre><code class="language-markup">&lt;img src=&quot;&#123;&#123; URL::asset('build/images/svg/crypto-icons/**.svg') &#125;&#125;&quot;&gt;</code></pre>


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