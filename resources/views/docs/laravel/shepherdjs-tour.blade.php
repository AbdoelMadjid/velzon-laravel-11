@extends('docs.laravel.layout')

@section('title', 'Shepherdjs-tour | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Shepherdjs-tour</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Shepherdjs-tour</li>
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

                                    <h5 class="fw-semibold">Overview <a href="https://shepherdjs.dev/" target="_blank"
                                            class="float-end badge badge-soft-success">Official Website <i
                                                class="ri-external-link-line"></i></a></h5>
                                    <p class="text-muted mb-4">Guide your users through a tour of your app.</p>

                                    <h6>CSS</h6>
                                    <pre><code class="language-markup">&lt;!-- shepherd.js css --&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;&#123;&#123; URL::asset('build/libs/shepherd.js/css/shepherd.css') &#125;&#125;&quot;&gt;</code></pre>

                                    <h6 class="mt-3">Javascript</h6>
                                    <pre><code class="language-markup">&lt;!-- shepherd js --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/libs/shepherd.js/js/shepherd.min.js') &#125;&#125;&quot;&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Initjs (Custom js)</h6>
                                    <pre><code class="language-markup">&lt;!-- tour init --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/js/pages/tour.init.js') &#125;&#125;&quot;&gt;&lt;/script</code></pre>

                                    <h6 class="mt-3">Add Package</h6>
                                    <pre><code class="language-markup">npm i shepherd.js --save</code></pre>

                                    <h6 class="mt-3">Remove Package</h6>
                                    <pre><code class="language-markup">npm unistall shepherd.js or you can remove package by removing/clearing specific package from package.json</code></pre>

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
                                                    <th scope="row">Shepherdjs</th>
                                                    <td>
                                                        <pre><code class="language-js">var tour = new Shepherd.Tour({
    defaultStepOptions: {
        cancelIcon: {
            enabled: true
        },
        
        classes: 'shadow-md bg-purple-dark',
        scrollTo: { behavior: 'smooth', block: 'center' }
    },

    useModalOverlay:{
        enabled: true
    },
});

tour.addStep({
    title: 'Welcome Back !',
    text: 'This is Step 1',
    attachTo: {
        element: '#logo-tour',
        on: 'bottom'
    },
    buttons: [
        {
            text: 'Next',
            classes: 'btn btn-success',
            action: tour.next
        }
    ]
});
// end step 1

tour.addStep({
    title: 'Register your account',
    text: 'Get your Free Velzon account now.',
    attachTo: {
        element: '#register-tour',
        on: 'bottom'
    },
    buttons: [
        {
            text: 'Back',
            classes: 'btn btn-light',
            action: tour.back
        },
        {
            text: 'Next',
            classes: 'btn btn-success',
            action: tour.next
        }
    ]
});
// end step 2

tour.addStep({
    title: 'Login your account',
    text: 'Sign in to continue to Velzon.',
    attachTo: {
        element: '#login-tour',
        on: 'bottom'
    },
    buttons: [
        {
            text: 'Back',
            classes: 'btn btn-light',
            action: tour.back
        },
        {
            text: 'Next',
            classes: 'btn btn-success',
            action: tour.next
        }
    ]
});
// end step 3

tour.addStep({
    title: 'Get yout Product',
    text: 'Sign in to continue to Velzon.',
    attachTo: {
        element: '#getproduct-tour',
        on: 'bottom'
    },
    buttons: [
        {
            text: 'Back',
            classes: 'btn btn-light',
            action: tour.back
        },
        {
            text: 'Next',
            classes: 'btn btn-success',
            action: tour.next
        }
    ]
});
// end step 4

tour.addStep({
    title: 'Thank you !',
    text: 'Sign in to continue to Velzon.',
    attachTo: {
        element: '#thankyou-tour',
        on: 'bottom'
    },
    buttons: [
        {
            text: 'Back',
            classes: 'btn btn-light',
            action: tour.back
        },
        {
            text: 'Thank you !',
            classes: 'btn btn-primary',
            action: tour.complete
        }
    ]
});
// end step 5

tour.start();</code></pre>
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