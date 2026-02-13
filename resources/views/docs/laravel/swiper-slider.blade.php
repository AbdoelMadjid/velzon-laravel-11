@extends('docs.laravel.layout')

@section('title', 'Swiper-Slider | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Swiper-Slider</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Swiper-Slider</li>
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

                                    <h5 class="fw-semibold">Overview <a href="https://swiperjs.com/get-started"
                                            target="_blank" class="float-end badge badge-soft-success">Official Website
                                            <i class="ri-external-link-line"></i></a></h5>
                                    <p class="text-muted mb-4">Swiper is the most modern slider with hardware
                                        accelerated
                                        transitions and amazing native behavior.</p>

                                    <h6>CSS</h6>
                                    <pre><code class="language-markup">&lt;!--Swiper slider css--&gt;
&lt;link href=&quot;&#123;&#123; URL::asset('build/libs/swiper/swiper-bundle.min.css') &#125;&#125;&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot; /&gt;</code></pre>

                                    <h6 class="mt-3">Javascript</h6>
                                    <pre><code class="language-markup">&lt;!--Swiper slider js--&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/libs/swiper/swiper-bundle.min.js') &#125;&#125;&quot;&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Initjs (Custom js)</h6>
                                    <pre><code class="language-markup">&lt;!-- swiper.init js --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/js/pages/swiper.init.js') &#125;&#125;&quot;&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Add Package</h6>
                                    <pre><code class="language-markup">npm i swiper --save</code></pre>

                                    <h6 class="mt-3">Remove Package</h6>
                                    <pre><code class="language-markup">npm unistall swiper or you can remove package by removing specific package from package.json</code></pre>

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
                                                    <th scope="row">Default Swiper</th>
                                                    <td>
                                                        <pre><code class="language-js">var swiper = new Swiper(".default-swiper", {
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
});</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Navigation & Pagination Swiper</th>
                                                    <td>
                                                        <pre><code class="language-js">var swiper = new Swiper(".navigation-swiper", {
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        clickable: true,
        el: ".swiper-pagination",
    },
});</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Pagination Dynamic Swiper</th>
                                                    <td>
                                                        <pre><code class="language-js">var swiper = new Swiper(".pagination-dynamic-swiper", {
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        clickable: true,
        el: ".swiper-pagination",
        dynamicBullets: true,
    },
});</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Pagination Fraction Swiper</th>
                                                    <td>
                                                        <pre><code class="language-js">var swiper = new Swiper(".pagination-fraction-swiper", {
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        clickable: true,
        el: ".swiper-pagination",
        type: "fraction",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Pagination Custom Swiper</th>
                                                    <td>
                                                        <pre><code class="language-js">var swiper = new Swiper(".pagination-custom-swiper", {
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        clickable: true,
        el: ".swiper-pagination",
        renderBullet: function (index, className) {
        return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
    }
});</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Pagination Progress Swiper</th>
                                                    <td>
                                                        <pre><code class="language-js">var swiper = new Swiper(".pagination-progress-swiper", {
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        type: "progressbar",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Scrollbar Swiper</th>
                                                    <td>
                                                        <pre><code class="language-js">var swiper = new Swiper(".pagination-scrollbar-swiper", {
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    scrollbar: {
        el: ".swiper-scrollbar",
        hide: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    }
});</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Vertical Swiper</th>
                                                    <td>
                                                        <pre><code class="language-js">var swiper = new Swiper(".vertical-swiper", {
    loop: true,
    direction: "vertical",
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Mousewheel Control Swiper</th>
                                                    <td>
                                                        <pre><code class="language-js">var swiper = new Swiper(".mousewheel-control-swiper", {
    loop: true,
    direction: "vertical",
    mousewheel: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Effect Fade Swiper</th>
                                                    <td>
                                                        <pre><code class="language-js">var swiper = new Swiper(".effect-fade-swiper", {
    loop: true,
    effect: "fade",
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Effect Creative Swiper</th>
                                                    <td>
                                                        <pre><code class="language-js">var swiper = new Swiper(".effect-creative-swiper", {
    loop: true,
    grabCursor: true,
    effect: "creative",
    creativeEffect: {
        prev: {
        shadow: true,
        translate: [0, 0, -400],
        },
        next: {
        translate: ["100%", 0, 0],
        },
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Effect Flip Swiper</th>
                                                    <td>
                                                        <pre><code class="language-js">var swiper = new Swiper(".effect-flip-swiper", {
    loop: true,
    effect: "flip",
    grabCursor: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Effect Coverflow Swiper</th>
                                                    <td>
                                                        <pre><code class="language-js">var swiper = new Swiper(".effect-coverflow-swiper", {
    loop: true,
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "4",
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
});
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Responsive Breakpoints Swiper</th>
                                                    <td>
                                                        <pre><code class="language-js">var swiper = new Swiper(".responsive-swiper", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        640: {
        slidesPerView: 2,
        spaceBetween: 20,
        },
        768: {
        slidesPerView: 4,
        spaceBetween: 40,
        },
        1024: {
        slidesPerView: 4,
        spaceBetween: 50,
        },
    },
});</code></pre>
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