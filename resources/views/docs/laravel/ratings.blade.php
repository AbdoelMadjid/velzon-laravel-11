@extends('docs.laravel.layout')

@section('title', 'Raterjs-Ratings | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Raterjs-Ratings</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Raterjs-Ratings</li>
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

                                    <h5 class="fw-semibold">Overview <a href="https://fredolss.github.io/rater-js/"
                                            target="_blank" class="float-end badge badge-soft-success">Official Website
                                            <i class="ri-external-link-line"></i></a></h5>
                                    <p class="text-muted mb-4">Rater js is the best star rater for the browser. No
                                        dependencies. Unlimited number of stars.</p>


                                    <h6 class="mt-3">Javascript</h6>
                                    <pre><code class="language-markup">&lt;!-- rater-js plugin --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/libs/rater-js/index.js') &#125;&#125;&quot;&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Initjs (Custom js)</h6>
                                    <pre><code class="language-markup">&lt;!-- rating init --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/js/pages/rating.init.js') &#125;&#125;&quot;&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Add Package</h6>
                                    <pre><code class="language-markup">npm i rater-js --save</code></pre>

                                    <h6 class="mt-3">Remove Package</h6>
                                    <pre><code class="language-markup">npm unistallrater-js or you can remove package by removing specific package from package.json</code></pre>

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
                                                    <th scope="row">Basic Rater</th>
                                                    <td>
                                                        <pre><code class="language-js">var basicRating = raterJs( {
    starSize:22, 
    rating: 3, 
    element:document.querySelector("#basic-rater"), 
    rateCallback:function rateCallback(rating, done) {
        this.setRating(rating); 
        done(); 
    }
}); </code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Rater with Step</th>
                                                    <td>
                                                        <pre><code class="language-js">var starRatingStep = raterJs( {
    starSize:22, 
    rating:1.5, 
    element:document.querySelector("#rater-step"), 
    rateCallback:function rateCallback(rating, done) {
        this.setRating(rating); 
        done(); 
    }
});</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Custom Messages</th>
                                                    <td>
                                                        <pre><code class="language-js">var messageDataService =  {
    rate:function(rating) {
            return {then:function (callback) {
                setTimeout(function () {
                    callback((Math.random() * 5)); 
                }, 1000); 
            }
        }
    }
}

var starRatingmessage = raterJs( {isBusyText:"Rating in progress. Please wait...", 
    starSize:22, 
    element:document.querySelector("#rater-message"), 
    rateCallback:function rateCallback(rating, done) {
        starRatingmessage.setRating(rating); 
        messageDataService.rate().then(function (avgRating) {
            starRatingmessage.setRating(avgRating); 
            done(); 
    }); 
&#125;&#125;); </code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Example with unlimited number of stars. readOnly
                                                        option
                                                        is set to true</th>
                                                    <td>
                                                        <pre><code class="language-js">var starRatingunlimited = raterJs( {
    max:16, 
    readOnly:true, 
    rating:4.4, 
    element:document.querySelector("#rater-unlimitedstar")
}); 
</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">On Hover Event</th>
                                                    <td>
                                                        <pre><code class="language-js">var starRatinghover = raterJs( {
    starSize:22,
    rating: 1, 
    element:document.querySelector("#rater-onhover"), 
    rateCallback:function rateCallback(rating, done) {
        this.setRating(rating); 
        done(); 
    }, 
    onHover:function(currentIndex, currentRating) {
        document.querySelector('.ratingnum').textContent = currentIndex; 
    }, 
    onLeave:function(currentIndex, currentRating) {
        document.querySelector('.ratingnum').textContent = currentRating; 
    }
}); </code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Clear/Reset Rater</th>
                                                    <td>
                                                        <pre><code class="language-js">var starRatingreset = raterJs( {
    starSize:22,
    rating: 2, 
    element:document.querySelector("#raterreset"), 
    rateCallback:function rateCallback(rating, done) {
        this.setRating(rating); 
        done(); 
    }
}); 
document.querySelector('#raterreset-button').addEventListener("click", function() {
    starRatingreset.clear();
    console.log(starRatingreset.getRating());
}, false); </code></pre>
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