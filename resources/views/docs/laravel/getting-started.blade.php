@extends('docs.laravel.layout')

@section('title', 'Getting Started | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Getting Started</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Getting Started</li>
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
                                    <p class="alert alert-success text-success">Just few more steps to setup <b>Velzon
                                            Laravel</b> in your system.</p>
                                    <p class="text-muted">
                                        <a class="text-danger" href="https://laravel.com/docs/10.x/mix"
                                            target="_blank">Laravel Vite</a>
                                        provides a clean, fluent API for defining basic build steps for your Laravel
                                        application.
                                        Vite supports several common CSS and JavaScript pre-processors.
                                    </p>
                                    <h5> Prerequisites:</h5>
                                    <p class="text-muted"> Please follow the below steps to install and setup all
                                        prerequisites:</p>
                                    <ul>
                                        <li>
                                            <strong>Xampp</strong>
                                            <p>
                                                Make sure to have the <a href="https://www.apachefriends.org/"
                                                    class="text-danger" target="_blank">Xampp</a>
                                                installed &amp; running in your computer. PHP Version 8.2 or Higher must
                                                be required for Laravel 12.
                                            </p>
                                        </li>
                                        <li>
                                            <strong>Composer</strong>
                                            <p>
                                                Make sure to have the <a href="https://getcomposer.org/"
                                                    class="text-danger" target="_blank">Composer</a>
                                                installed &amp; running in your computer. make sure the composer version
                                                must be 2.2.0 or Higher.
                                            </p>
                                        </li>
                                        <li>
                                            <strong>Nodejs</strong>
                                            <p>
                                                Make sure to have <a class="text-danger" href="https://nodejs.org/"
                                                    target="_blank">Node.js</a> installed &amp; running
                                                on your computer.
                                                If you already have installed Node on your computer, you
                                                can skip this step if your existing node version is
                                                greater than 22. </p>
                                        </li>
                                        <li>
                                            <strong>Git</strong>

                                            <p>Make sure to have <a class="text-danger" href="https://git-scm.com/"
                                                    target="_blank">Git</a> installed globally &amp;
                                                running on your computer. If you already have installed
                                                git on your computer, you can skip this step.</p>
                                        </li>
                                    </ul>
                                    <div id="installation">
                                        <h5 class="mt-4">Installation</h5>

                                        <p class="text-muted">
                                            To setup the admin theme, follow below-mentioned steps:
                                        </p>

                                        <ul>
                                            <li>
                                                <strong>Install Prerequisites</strong>
                                                <p>
                                                    Make sure to have all above prerequisites installed &amp; running on
                                                    your computer.
                                                </p>
                                            </li>
                                        </ul>


                                        <p class="text-muted mt-4">
                                            After you finished with the above steps, you can run the following commands
                                            to
                                            run the project locally or build for production use:
                                        </p>
                                        <table class="table table-bordered m-0">
                                            <thead>
                                                <tr>
                                                    <th style="width: 20%;">
                                                        <i class="ti-file"></i> Command
                                                    </th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <code>yarn install</code>
                                                    </td>
                                                    <td>
                                                        This would install all the required dependencies in the
                                                        <code>node_modules</code> folder.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <code>composer install</code>
                                                    </td>
                                                    <td>
                                                        command to install all of the framework's dependencies.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <h6>
                                                            Please run the below command to generate the new key.
                                                        </h6>
                                                        <pre class=" language-markup my-3"
                                                            tabindex="0"><code class=" language-markup">php artisan key:generate</code></pre>
                                                        <h6 class="mb-3">
                                                            Please fill your DB credentials in the .env file.
                                                        </h6>
                                                        <div class="p-3 bg-light text-muted">
                                                            DB_CONNECTION=mysql<br> DB_HOST=127.0.0.1
                                                            <br> DB_PORT=3306
                                                            <br> DB_DATABASE=velzon_laravel
                                                            <br> DB_USERNAME=root
                                                            <br> DB_PASSWORD=
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <code>yarn run build</code>
                                                    </td>
                                                    <td>
                                                        To compile all scss to css and copy all files from resource to
                                                        public directory.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <code>yarn run build-rtl</code>
                                                    </td>
                                                    <td>
                                                        To Generate RTL css files from LTR css.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <h6>
                                                            Please run the following commands to clear all cache from
                                                            the
                                                            project.
                                                        </h6>
                                                        <pre class="language-markup"
                                                            tabindex="0"><code class=" language-markup">php artisan optimize:clear</code></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <code>php artisan migrate</code>
                                                    </td>
                                                    <td>
                                                        This will migrate the database tables. For more details visit <a
                                                            href="https://laravel.com/docs/10.x/migrations"
                                                            target="_blank">https://laravel.com/docs/10.x/migrations
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <code>php artisan serve</code>
                                                    </td>
                                                    <td>
                                                        The development server is accessible at <a
                                                            href="http://localhost:8000/">http://localhost:8000</a>.
                                                        <br> To run on other port just run command : php artisan serve
                                                        --port=8001
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="multi" class="mb-4">
                                        <h5 class="mt-4">Multi Language Settings</h5>
                                        <p class="text-muted">Lets add french language.</p>
                                        <ul>
                                            <li> Create new file translation.php in the fr folder in the
                                                <code>resources/lang</code> folder and add the below code.
                                                <pre class="language-markup my-3">&lt;?php
    // translation.php
    return [
            'welcome' =&gt; 'Welcome Friend'
    ];
</pre>
                                            </li>
                                            <li> You need to add the new language option in the topbar
                                                <code>resources/views/layouts/topbar.blade.php</code>. Make sure to add
                                                it
                                                flag image and option in the dropdown.
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="alert alert-info mb-0">
                                        SCSS: We suggest you do not change any scss files from the resrouces/scss/custom
                                        folders because getting new updates will break your SCSS changes if any you have
                                        made. We strongly suggest you create a new custom.scss file and use that instead
                                        of
                                        overwriting any theme's custom scss files.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
@endsection