@extends('docs.laravel.layout')

@section('title', 'Form Input Spin | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Form Input Spin</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Form Input Spin</li>
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

                                    <h5 class="fw-semibold">Overview</h5>
                                    <p class="text-muted mb-4">Form input spin is used to increase and decrease the
                                        number.Various
                                        example are shown belows.
                                    </p>

                                    <h6 class="mt-3">Initjs (Custom js)</h6>
                                    <pre><code class="language-markup">&lt;!-- input spin init --&gt;
&lt;script src=&quot;build/js/pages/form-input-spin.init.js&quot;&gt;&lt;/script&gt;</code></pre>


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
                                                    <th scope="row">Demo Example</th>
                                                    <td>
                                                        <pre><code class="language-js">isData();

function isData() {
    var plus = document.getElementsByClassName('plus');
    var minus = document.getElementsByClassName('minus');

    if (plus) {
        plus.forEach(function (e) {
            e.addEventListener('click', function (event) {
                // if(event.target.previousElementSibling.value )
                if (parseInt(e.previousElementSibling.value) < event.target.previousElementSibling.getAttribute('max')) {
                event.target.previousElementSibling.value++;                
                }
            });
        });
    }

    if (minus) {
        minus.forEach(function (e) {
            e.addEventListener('click', function (event) {
                if (parseInt(e.nextElementSibling.value) > event.target.nextElementSibling.getAttribute('min')) {
                event.target.nextElementSibling.value--;                
                }
            });
        });
    }
}

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