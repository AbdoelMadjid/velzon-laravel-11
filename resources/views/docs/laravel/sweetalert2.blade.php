@extends('docs.laravel.layout')

@section('title', 'Sweetalert2 | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Sweetalert2</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Sweetalert2</li>
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

                                    <h5 class="fw-semibold">Overview <a href="https://sweetalert2.github.io/"
                                            target="_blank" class="float-end badge badge-soft-success">Official Website
                                            <i class="ri-external-link-line"></i></a></h5>
                                    <p class="text-muted mb-4">A beautiful, responsive, customizable, accessible
                                        (WAI-ARIA)
                                        replacement for JavaScript's popup boxes.</p>
                                    <h6>CSS</h6>
                                    <pre><code class="language-markup">&lt;!-- Sweet Alert css--&gt;
&lt;link href=&quot;&#123;&#123; URL::asset('build/libs/sweetalert2/sweetalert2.min.css') &#125;&#125;&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot; /&gt;</code></pre>

                                    <h6 class="mt-3">Javascript</h6>
                                    <pre><code class="language-markup">&lt;!-- Sweet Alerts js --&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/libs/sweetalert2/sweetalert2.min.js') &#125;&#125;&quot;&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Initjs (Custom js)</h6>
                                    <pre><code class="language-markup">&lt;!-- Sweet alert init js--&gt;
&lt;script src=&quot;&#123;&#123; URL::asset('build/js/pages/sweetalerts.init.js') &#125;&#125;&quot;&gt;&lt;/script&gt;</code></pre>

                                    <h6 class="mt-3">Add Package</h6>
                                    <pre><code class="language-markup">npm i sweetalert2 --save</code></pre>

                                    <h6 class="mt-3">Remove Package</h6>
                                    <pre><code class="language-markup">npm unistall sweetalert2 or you can remove package by removing specific package from package.json .</code></pre>

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
                                                    <th scope="row">A Basic Message</th>
                                                    <td>
                                                        <pre><code class="language-js">document.getElementById(&quot;sa-basic&quot;).addEventListener(&quot;click&quot;, function() {
    Swal.fire(
            {
                title: 'Any fool can use a computer',
                confirmButtonClass: 'btn btn-primary w-xs mt-2',
                buttonsStyling: false,
                showCloseButton: true
            }
    )
});</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row ">A Title with a Text Under</th>
                                                    <td>
                                                        <pre><code class="language-js">document.getElementById("sa-title").addEventListener("click", function() {
    Swal.fire(
            {
                title: "The Internet?",
                text: 'That thing is still around?',
                icon: 'question',
                confirmButtonClass: 'btn btn-primary w-xs mt-2',
                buttonsStyling: false,
                showCloseButton: true
            }
    )
});</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row ">A Success message!</th>
                                                    <td>
                                                        <pre><code class="language-js">document.getElementById("sa-success").addEventListener("click", function() {
    Swal.fire(
            {
                title: 'Good job!',
                text: 'You clicked the button!',
                icon: 'success',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-primary w-xs me-2 mt-2',
                cancelButtonClass: 'btn btn-danger w-xs mt-2',
                buttonsStyling: false,
                showCloseButton: true
            }
    )
});</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">A Modal with a title, an error icon, a text, and a
                                                        footer</th>
                                                    <td>
                                                        <pre><code class="language-js">document.getElementById("sa-error").addEventListener("click", function() {
    Swal.fire(
            {
                title: 'Oops...',
                text: 'Something went wrong!',
                icon: 'error',
                confirmButtonClass: 'btn btn-primary w-xs mt-2',
                buttonsStyling: false,
                footer: '<a href="#">Why do I have this issue?</a>',
                showCloseButton: true
            }
    )
});</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">A Modal window with a long content inside</th>
                                                    <td>
                                                        <pre><code class="language-js">document.getElementById("sa-longcontent").addEventListener("click", function() {
    Swal.fire(
        {
            imageUrl: 'https://placeholder.pics/svg/300x1500',
            imageHeight: 1500,
            imageAlt: 'A tall image',
            confirmButtonClass: 'btn btn-primary w-xs mt-2',
            buttonsStyling: false,
            showCloseButton: true
        }
    )
});</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">A Warning message, with a function attached to the
                                                        "Confirm"-button...</th>
                                                    <td>
                                                        <pre><code class="language-js">document.getElementById("sa-warning").addEventListener("click", function() {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonClass: 'btn btn-primary w-xs me-2 mt-2',
        cancelButtonClass: 'btn btn-danger w-xs mt-2',
        confirmButtonText: "Yes, delete it!",
        buttonsStyling: false,
        showCloseButton: true
      }).then(function (result) {
        if (result.value) {
            Swal.fire({
                title: 'Deleted!',
                text: 'Your file has been deleted.',
                icon: 'success',
                confirmButtonClass: 'btn btn-primary w-xs mt-2',
                buttonsStyling: false
            })
        }
    });
});</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">By passing a parameter, you can execute something
                                                        else
                                                        for "Cancel".</th>
                                                    <td>
                                                        <pre><code class="language-js">document.getElementById("sa-params").addEventListener("click", function() {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        confirmButtonClass: 'btn btn-primary w-xs me-2 mt-2',
        cancelButtonClass: 'btn btn-danger w-xs mt-2',
        buttonsStyling: false,
        showCloseButton: true
    }).then(function (result) {
        if (result.value) {
            Swal.fire({
                title: 'Deleted!',
                text: 'Your file has been deleted.',
                icon: 'success',
                confirmButtonClass: 'btn btn-primary w-xs mt-2',
                buttonsStyling: false
            })
          } else if (
            // Read more about handling dismissals
            result.dismiss === Swal.DismissReason.cancel
          ) {
            Swal.fire({
              title: 'Cancelled',
              text: 'Your imaginary file is safe :)',
              icon: 'error',
              confirmButtonClass: 'btn btn-primary mt-2',
              buttonsStyling: false
            })
          }
    });
});</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">A message with custom Image Header.</th>
                                                    <td>
                                                        <pre><code class="language-js">document.getElementById("sa-image").addEventListener("click", function() {
    Swal.fire({
        title: 'Sweet!',
        text: 'Modal with a custom image.',
        imageUrl: 'build/images/logo-sm.png',
        imageHeight: 40,
        confirmButtonClass: 'btn btn-primary w-xs mt-2',
        buttonsStyling: false,
        animation: false,
        showCloseButton: true
    })
});</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">A message with auto close timer.</th>
                                                    <td>
                                                        <pre><code class="language-js">document.getElementById("sa-close").addEventListener("click", function() {
    var timerInterval;
    Swal.fire({
        title: 'Auto close alert!',
        html: 'I will close in <strong></strong> seconds.',
        timer: 2000,
        timerProgressBar: true,
        showCloseButton: true,
        didOpen:function () {
            Swal.showLoading()
            timerInterval = setInterval(function() {
            var content = Swal.getHtmlContainer()
            if (content) {
                var b = content.querySelector('b')
                if (b) {
                    b.textContent = Swal.getTimerLeft()
                }
            }
            }, 100)
        },
        onClose: function () {
            clearInterval(timerInterval)
        }
        }).then(function (result) {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
                console.log('I was closed by the timer')
            }
        })
});</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Custom HTML description and buttons.</th>
                                                    <td>
                                                        <pre><code class="language-js">document.getElementById("custom-html-alert").addEventListener("click", function() {
    Swal.fire({
            title: '<i>HTML</i> <u>example</u>',
            icon: 'info',
            html: 'You can use <b>bold text</b>, ' +
            '<a href="http://themesbrand.in/">links</a> ' +
            'and other HTML tags',
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonClass: 'btn btn-success me-2',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false,
            confirmButtonText: '<i class="ri-thumb-up-fill align-bottom me-1"></i> Great!',
            cancelButtonText: '<i class="ri-thumb-down-fill align-bottom"></i>',
            showCloseButton: true
    })
});</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">A dialog with three buttons.</th>
                                                    <td>
                                                        <pre><code class="language-js">document.getElementById("sa-dialog-three-btn").addEventListener("click", function() {
    Swal.fire({
            title: 'Do you want to save the changes?',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: 'Save',
            confirmButtonClass: 'btn btn-success w-xs me-2',
            cancelButtonClass: 'btn btn-danger w-xs',
            denyButtonClass: 'btn btn-info w-xs me-2',
            buttonsStyling: false,
            denyButtonText: 'Don\'t save',
            showCloseButton: true
        }).then(function (result) {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
            Swal.fire({
                title: 'Saved!',
                icon: 'success',
                confirmButtonClass: 'btn btn-primary w-xs',
                buttonsStyling: false,
            })
            } else if (result.isDenied) {
            Swal.fire({
                title: 'Changes are not saved',
                icon: 'info',
                confirmButtonClass: 'btn btn-primary w-xs',
                buttonsStyling: false,
            })
        }
      })
});</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">A custom positioned dialog.</th>
                                                    <td>
                                                        <pre><code class="language-js">document.getElementById("sa-position").addEventListener("click", function() {
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Your work has been saved',
        showConfirmButton: false,
        timer: 1500,
        showCloseButton: true
    })
});</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">A message with custom width, padding and background.
                                                    </th>
                                                    <td>
                                                        <pre><code class="language-js">document.getElementById("custom-padding-width-alert").addEventListener("click", function() {
    Swal.fire({
        title: 'Custom width, padding, background.',
        width: 600,
        padding: 100,
        confirmButtonClass: 'btn btn-primary w-xs',
        buttonsStyling: false,
        background: '#fff url(build/images/auth-bg.jpg)'
    })
});</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Ajax request example.</th>
                                                    <td>
                                                        <pre><code class="language-js">document.getElementById("ajax-alert").addEventListener("click", function() {
    Swal.fire({
        title: 'Submit email to run ajax request',
        input: 'email',
        showCancelButton: true,
        confirmButtonText: 'Submit',
        showLoaderOnConfirm: true,
        confirmButtonClass: 'btn btn-primary w-xs me-2',
        cancelButtonClass: 'btn btn-danger w-xs',
        buttonsStyling: false,
        showCloseButton: true,
        preConfirm: function (email) {
            return new Promise(function (resolve, reject) {
                setTimeout(function () {
                    if (email === 'taken&#64;example.com') {
                        reject('This email is already taken.')
                    } else {
                        resolve()
                    }
                }, 2000)
            })
        },
        allowOutsideClick: false
    }).then(function (email) {
        Swal.fire({
            icon: 'success',
            title: 'Ajax request finished!',
            confirmButtonClass: 'btn btn-primary w-xs',
            buttonsStyling: false,
            html: 'Submitted email: ' + email
        })
    })
});</code></pre>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- end table -->
                                    </div>
                                    <!-- end table responsive -->
                                </div><!-- end card-body -->
                                <div class="card-body border-top border-2 border-top-dashed">
                                    <h5 class="fw-semibold">Custom Sweetalert Example</h5>

                                    <div class="table-responsive">
                                        <table class="table align-middle mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width:40%">Title</th>
                                                    <th scope="col">Javascript</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Success Message</th>
                                                    <td>
                                                        <pre><code class="language-js">document.getElementById("custom-sa-success").addEventListener("click", function() {
    Swal.fire({
        html: '<div class="mt-3">' +
            '<lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>' +
            '<div class="mt-4 pt-2 fs-15">' +
                '<h4>Well done !</h4>' +
                '<p class="text-muted mx-4 mb-0">Aww yeah, you successfully read this important message.</p>' +
            '</div>' +
        '</div>',
        showCancelButton: true,
        showConfirmButton: false,
        cancelButtonClass: 'btn btn-primary w-xs mb-1',
        cancelButtonText: 'Back',
        buttonsStyling: false,
        showCloseButton: true
    })
});</code></pre>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">Error Message</th>
                                                    <td>
                                                        <pre><code class="language-js">document.getElementById("custom-sa-error").addEventListener("click", function() {
    Swal.fire({
        html: '<div class="mt-3">' +
            '<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon>' +
            '<div class="mt-4 pt-2 fs-15">' +
                '<h4>Oops...! Something went Wrong !</h4>' +
                '<p class="text-muted mx-4 mb-0">Your email Address is invalid</p>' +
            '</div>' +
        '</div>',
        showCancelButton: true,
        showConfirmButton: false,
        cancelButtonClass: 'btn btn-primary w-xs mb-1',
        cancelButtonText: 'Dismiss',
        buttonsStyling: false,
        showCloseButton: true
    })
});</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Warning Message</th>
                                                    <td>
                                                        <pre><code class="language-js">document.getElementById("custom-sa-warning").addEventListener("click", function() {
    Swal.fire({
        html: '<div class="mt-3">' +
            '<lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>' +
            '<div class="mt-4 pt-2 fs-15 mx-5">' +
                '<h4>Are you Sure ?</h4>' +
                '<p class="text-muted mx-4 mb-0">Are you Sure You want to Delete this Account ?</p>' +
            '</div>' +
        '</div>',
        showCancelButton: true,
        confirmButtonClass: 'btn btn-primary w-xs me-2 mb-1',
        confirmButtonText: 'Yes, Delete It!',
        cancelButtonClass: 'btn btn-danger w-xs mb-1',
        buttonsStyling: false,
        showCloseButton: true
    })
});</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Join Our Community</th>
                                                    <td>
                                                        <pre><code class="language-js">document.getElementById("custom-sa-community").addEventListener("click", function() {
    Swal.fire({
        title: 'Join Our Community',
        html: 'You can use <b>bold text</b>, ' +
        '<a href="http://themesbrand.in/">links</a> ' +
        'and other HTML tags',
        html: '<div class="mt-3 text-start">' +
            '<label for="input-email" class="form-label fs-13">Email</label>' +
            '<input type="email" class="form-control" id="input-email" placeholder="Enter Email Address">' +
        '</div>',
        imageUrl: 'build/images/logo-sm.png',
        footer: '<p class="fs-13 text-muted mb-0">Already have an account ? <a href="#" class="fw-semibold text-decoration-underline"> Signin </a> </p>',
        imageHeight: 40,
        confirmButtonClass: 'btn btn-primary w-xs mb-2',
        confirmButtonText: 'Register <i class="ri-arrow-right-line ms-1 align-bottom"></i>',
        buttonsStyling: false,
        showCloseButton: true
    })
});</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Email Verification</th>
                                                    <td>
                                                        <pre><code class="language-js">document.getElementById("custom-sa-email-verify").addEventListener("click", function() {
    Swal.fire({
        html: '<div class="mt-3">' +
            '<div class="avatar-lg mx-auto">' +
                '<div class="avatar-title bg-light text-success display-5 rounded-circle">' +
                    '<i class="ri-mail-send-fill"></i>' +
                '</div>' +
            '</div>' +
            '<div class="mt-4 pt-2 fs-15">' +
                '<h4 class="fs-20 fw-semibold">Verify Your Email</h4>' +
                '<p class="text-muted mb-0 mt-3 fs-13">We have sent you verification email <span class="fw-medium text-dark">example&#64;abc.com</span>, <br/> Please check it.</p>' +
            '</div>' +
        '</div>',
        showCancelButton: false,
        confirmButtonClass: 'btn btn-primary mb-1',
        confirmButtonText: 'Verify Email',
        buttonsStyling: false,
        footer: '<p class="fs-14 text-muted mb-0">Didn\'t receive an email ? <a href="#" class="fw-semibold text-decoration-underline">Resend</a></p>',
        showCloseButton: true
    })
});</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Notification Message</th>
                                                    <td>
                                                        <pre><code class="language-js">document.getElementById("custom-sa-notification").addEventListener("click", function() {
    Swal.fire({
        html: '<div class="mt-3">' +
            '<div class="avatar-lg mx-auto">' +
                '<img src="/assets/images/users/avatar-2.html" class="rounded-circle img-thumbnail" alt="thumbnail">' +
            '</div>' +
            '<div class="mt-4 pt-2 fs-15">' +
                '<h4 class="fs-18 fw-semibold">Welcome <span class="fw-semibold">Mike Mayer</span></h4>' +
                '<p class="text-muted mb-0 fs-13">You have <span class="fw-semibold text-success">2</span> Notifications</p>' +
            '</div>' +
        '</div>',
        showCancelButton: false,
        confirmButtonClass: 'btn btn-primary mb-1',
        confirmButtonText: 'Show Me <i class="ri-arrow-right-line ms-1 align-bottom"></i>',
        buttonsStyling: false,
        showCloseButton: true
    })
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