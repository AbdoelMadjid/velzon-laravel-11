@extends('docs.laravel.layout')

@section('title', 'Wizard | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Wizard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Wizard</li>
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

                                    <h5 class="fw-semibold">Overview<a
                                            href="../../../../github.com/Fabianlindfors/multi.html" target="_blank"
                                            class="float-end badge badge-soft-success">Official Website <i
                                                class="ri-external-link-line"></i></a> </h5>
                                    <p class="text-muted mb-4">The wizard is a component used for multiple layers of
                                        user
                                        input elements in the web application. </p>


                                    <h6 class="mt-3">Initjs (Custom js)</h6>
                                    <pre><code class="language-markup">&lt;!-- init js --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/js/pages/form-advanced.init.js') &#125;&#125;&quot;&gt;&lt;/script&gt;</code></pre>


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
                                                    <th scope="row">Wizard Example</th>
                                                    <td>
                                                        <pre><code class="language-js">document.querySelector("#profile-img-file-input").addEventListener("change", function () {
    var preview = document.querySelector(".user-profile-image");
    var file = document.querySelector(".profile-img-file-input").files[0];
    var reader = new FileReader();

    reader.addEventListener(
        "load",
        function () {
            preview.src = reader.result;
        },
        false
    );

    if (file) {
        reader.readAsDataURL(file);
    }
});

document.querySelectorAll(".form-steps").forEach(function (form) {

    // next tab
    form.querySelectorAll(".nexttab").forEach(function (nextButton) {
        console.log("nextButton");
        var tabEl = form.querySelectorAll('button[data-bs-toggle="pill"]');
        tabEl.forEach(function (item) {
            item.addEventListener('show.bs.tab', function (event) {
                event.target.classList.add('done');
            });
        });
        nextButton.addEventListener("click", function () {
            var nextTab = nextButton.getAttribute('data-nexttab');
            document.getElementById(nextTab).click();
        });
    });

    //Pervies tab
    form.querySelectorAll(".previestab").forEach(function (prevButton) {

        prevButton.addEventListener("click", function () {
            console.log("prevButton", prevButton);
            var prevTab = prevButton.getAttribute('data-previous');
            var totalDone = prevButton.closest("form").querySelectorAll(".custom-nav .done").length;
            for (var i = totalDone - 1; i < totalDone; i++) {
                (prevButton.closest("form").querySelectorAll(".custom-nav .done")[i]) ? prevButton.closest("form")
                .querySelectorAll(".custom-nav .done")[i].classList.remove('done') : '';
            }
            document.getElementById(prevTab).click();
        });
    });

    // Step number click
    var tabButtons = form.querySelectorAll('button[data-bs-toggle="pill"]');
    tabButtons.forEach(function (button, i) {
        button.setAttribute("data-position", i);
        button.addEventListener("click", function () {
            var getProgreebar = button.getAttribute("data-progressbar");
            if (getProgreebar) {
                var totallength = document.getElementById("custom-progress-bar").querySelectorAll("li").length - 1;
                var current = i;
                var percent = (current / totallength) * 100;
                document.getElementById("custom-progress-bar").querySelector('.progress-bar').style.width = percent + "%";
            }
            (form.querySelectorAll(".custom-nav .done").length > 0) ?
                form.querySelectorAll(".custom-nav .done").forEach(function (doneTab) {
                    doneTab.classList.remove('done');
                })
                : '';
            for (var j = 0; j <= i; j++) {
                tabButtons[j].classList.contains('active') ?  tabButtons[j].classList.remove('done') :  
                tabButtons[j].classList.add('done');
            }
        });
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