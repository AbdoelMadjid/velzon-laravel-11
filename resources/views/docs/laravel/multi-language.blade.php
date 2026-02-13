@extends('docs.laravel.layout')

@section('title', 'Multi Language | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Multi Language</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Multi Language</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Introduction</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-sm-12">
                                            <p>
                                                Laravel's <a href="https://laravel.com/docs/9.x/localization"
                                                    target="_blank" class="text-danger">localization</a> features
                                                provide a convenient way to retrieve strings in various languages,
                                                allowing you to
                                                easily support multiple languages within your application.
                                            </p>
                                            <p>Typically, translation strings are stored in files within the
                                                <code>lang</code> directory. Within this directory, there should be a
                                                subdirectory for each language supported by your application. This is
                                                the approach Laravel uses to manage translation strings for built-in
                                                Laravel features such as validation error messages:
                                            </p>
                                            <div class="col-sm-6">
                                                <div class="verti-sitemap">
                                                    <div class="first-list">
                                                        <div class="list-wrap">
                                                            <a href="javascript: void(0);" class="fw-medium text-primary">
                                                                <img src="/assets/images/extra/folder.png" class="me-1" alt="">default
                                                            </a>
                                                        </div>
                                                        <ul class="second-list list-unstyled">
                                                            <li>
                                                                <a href="javascript: void(0);">
                                                                    <img src="/assets/images/extra/folder.png" class="me-1" alt="">lang
                                                                </a>
                                                                <ul class="second-list list-unstyled">
                                                                    <li>
                                                                        <a href="javascript: void(0);">
                                                                            <img src="/assets/images/extra/folder.png" class="me-1" alt="">en
                                                                        </a>
                                                                        <ul class="second-list list-unstyled">
                                                                            <li>
                                                                                <a href="javascript: void(0);">
                                                                                    <img src="/assets/images/extra/file.png" class="me-1" alt="">translation.php
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript: void(0);">
                                                                            <img src="/assets/images/extra/folder.png" class="me-1" alt="">gr
                                                                        </a>
                                                                        <ul class="second-list list-unstyled">
                                                                            <li>
                                                                                <a href="javascript: void(0);">
                                                                                    <img src="/assets/images/extra/file.png" class="me-1" alt="">translation.php
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>All language files return an array of keyed strings. For example:</p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">&lt;?php

// lang/en/messages.php
    
return [
    'welcome' => 'Welcome to velzon laravel!',
];</code></pre>
                                            <h6 class="fw-semibold fs-16 text-decoration-underline mb-3">Retrieving
                                                Translation Strings</h6>
                                            <p>You may retrieve translation strings from your language files using the
                                                <code>__</code> helper function. If you are using "short keys" to define
                                                your translation strings, you should pass the file that contains the
                                                key and the key itself to the <code>__</code> function using "dot"
                                                syntax. For example, let's retrieve the <code>welcome</code> translation
                                                string from the <code>lang/en/translation.php</code> language file:</p>
                                            <pre class="language-markup my-3"
                                                tabindex="0"><code  class="language-markup">echo __('translation.welcome');</code></pre>
                                            <p>If you are using the Blade templating engine, you may use the &#123;&#123; &#125;&#125;
                                                syntax to echo the translation string or use the @lang directive:</p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">&#123;&#123; __('translation.welcome') &#125;&#125;
&#64;lang('translation.welcome')</code></pre>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Localization in Velzon Laravel</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p>In Velzon laravel, We provide a dropdown to switch language you can find
                                                it in the top-bar. How does it work? When we select a language from
                                                dropdown-menu we call a Route which calls a controller's function which
                                                then put selected language in session. We have created a middleware that
                                                sets the localization value from the session variable. It sounds a
                                                little messy. Let's find out how to do it.</p>
                                            <p>Use the below code in HomeController file in
                                                <code>App/Http/Controllers</code>. </p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup"> public function lang($locale)
{
    if ($locale) {
        App::setLocale($locale);
        Session::put('lang', $locale);
        Session::save();
        return redirect()->back()->with('locale', $locale);
    } else {
        return redirect()->back();
    }
}</code></pre>
                                            <p>We have to define Route for language switching in routes/web.php file.
                                            </p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">&lt;?php
use App\Http\Controllers\HomeController;
// locale Route
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);</code></pre>
                                            <p>Now we need a middleware to set <code>app()->setLocale()</code> variable
                                                gloabaly. Run below cammand to create a middleware.</p>
                                            <pre class="language-markup my-3"
                                                tabindex="0"><code class="language-markup">php artisan make:middleware Localization</code></pre>
                                            <p>You can find this middleware in <code>App\Http\Middleware</code></p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">&lt;?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Localization
{
    /**
        * Handle an incoming request.
        *
        * &#64;param  \Illuminate\Http\Request  $request
        * &#64;param  \Closure  $next
        * &#64;return mixed
        */
    public function handle(Request $request, Closure $next)
    {
        /* Set new lang with the use of session */
        if (session()->has('lang')) {
            App::setLocale(session()->get('lang'));
        }
        return $next($request);
    }
}
</code></pre>
                                            <p>You must have to mention middleware in the App\Http\kernel.php file. Use
                                                the \App\Http\Middleware\LocaleMiddleware::class, line in kernel.php
                                                file.</p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">protected $middlewareGroups = [
'web' => [

    \App\Http\Middleware\Localization::class,
],

'api' => [
    'throttle:api',
    \Illuminate\Routing\Middleware\SubstituteBindings::class,
    ],

];</code></pre>
                                            <p>Now we have to set the view. We provide language switch dropdown in
                                                topbar.blade.php.</p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">&lt;div class="dropdown ms-1 topbar-head-dropdown header-item">
    &lt;button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        &#64;switch(Session::get('lang'))
        &#64;case('ru')
            &lt;img src="&#123;&#123; URL::asset('/build/images/flags/russia.svg') &#125;&#125;" class="rounded" alt="Header Language"
                height="20">
        &#64;break
        &#64;case('it')
            &lt;img src="&#123;&#123; URL::asset('/build/images/flags/italy.svg') &#125;&#125;" class="rounded" alt="Header Language"
                height="20">
        &#64;break
        &#64;default
            &lt;img src="&#123;&#123; URL::asset('/build/images/flags/us.svg') &#125;&#125;" class="rounded" alt="Header Language" height="20">
    &#64;endswitch
    &lt;/button>
    &lt;div class="dropdown-menu dropdown-menu-end">

        &lt;!-- item-->
        &lt;a href="&#123;&#123; url('index/en') &#125;&#125;" class="dropdown-item notify-item language py-2" data-lang="en"
            title="English">
            &lt;img src="&#123;&#123; URL::asset('build/images/flags/us.svg') &#125;&#125;" alt="user-image" class="me-2 rounded" height="20">
            &lt;span class="align-middle">English&lt;/span>
        &lt;/a>

        &lt;!-- item-->
        &lt;a href="&#123;&#123; url('index/sp') &#125;&#125;" class="dropdown-item notify-item language" data-lang="sp"
            title="Spanish">
            &lt;img src="&#123;&#123; URL::asset('build/images/flags/spain.svg') &#125;&#125;" alt="user-image" class="me-2 rounded" height="20">
            &lt;span class="align-middle">Española&lt;/span>
        &lt;/a>
    &lt;/div>
&lt;/div></code></pre>
                                            <p>Include the newly created switcher into the “welcome” view:</p>
                                            <h6 class="fw-semibold fs-16 text-decoration-underline mb-3">
                                                welcome.blade.php</h6>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">&lt;!DOCTYPE html>
&lt;html lang="&#123;&#123; str_replace('_', '-', app()->getLocale()) &#125;&#125;">
    &lt;head>  
        &lt;title> &#64;lang('translation.welcome')&lt;/title>
    &lt;/head>
&lt;/html>
    </code></pre>
                                            <h6 class="fw-semibold fs-16 text-decoration-underline mb-3">
                                                Resources/views/layouts</h6>
                                            <p>sidebar.blade.php</p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">&lt;li class="nav-item">
&lt;a href="#sidebarCRM" class="nav-link" data-bs-toggle="collapse" role="button"
    aria-expanded="false" aria-controls="sidebarCRM" >&#64;lang('translation.crm')
&lt;/a>
&lt;div class="collapse menu-dropdown" id="sidebarCRM">
    &lt;ul class="nav nav-sm flex-column">
        &lt;li class="nav-item">
            &lt;a href="apps-crm-contacts" class="nav-link" >&#64;lang('translation.contacts')&lt;/a>
        &lt;/li>
        &lt;li class="nav-item">
            &lt;a href="apps-crm-companies" class="nav-link" >&#64;lang('translation.companies')&lt;/a>
        &lt;/li>
        &lt;li class="nav-item">
            &lt;a href="apps-crm-deals" class="nav-link" >&#64;lang('translation.deals')&lt;/a>
        &lt;/li>
        &lt;li class="nav-item">
            &lt;a href="apps-crm-leads" class="nav-link" >&#64;lang('translation.leads')&lt;/a>
        &lt;/li>
    &lt;/ul>
&lt;/div>
&lt;/li></code></pre>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Multi Language Settings</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h5 class="fw-semibold mb-3">Let's add the French language.</h5>
                                        <ul class="text-muted mb-0">
                                            <li>To add a new language in whole template first we need to create a
                                                <code>translation.php</code> file in <code>lang</code> which return an
                                                array with key and value pair.
                                            </li>
                                            <li>
                                                Now you need to add the language in the
                                                <code>resources/view/layouts/top-bar.blade.php</code> file. add the
                                                "case" condition as below code and make sure to add the french.jpg file
                                                in the
                                                <code>public/build/images/flags</code> folder.
                                                <pre class="language-markup my-3">&#64;case('fr'){
    document.getElementById("header-lang-img").src = "/build/images/flags/french.svg";
    &lt;img src="&#123;&#123; URL::asset('/build/images/flags/french.svg') &#125;&#125;"&gt;
&#64;break
}</pre>
                                            </li>
                                            <li>
                                                You can simply use &#64;lang attributes in the HTML tag to convert the
                                                language text. Example: &lt;a href="#"&gt;&#64;lang('translation.title')&lt;/a&gt;
                                            </li>
                                            <li>
                                                <p>Add the below dropdown in the
                                                    <code>resources/view/layouts/topbar.blade.php</code> file in the
                                                    language dropdown.
                                                </p>
                                                <pre class="language-markup mt-3 mb-0">
&lt;a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="fr" title="French">
    &lt;img src="&#123;&#123; URL::asset('/build/images/flags/french.svg') &#125;&#125;" alt="user-image" class="me-2 rounded" height="18">
    &lt;span class="align-middle">French&lt;/span>
&lt;/a></pre>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->

                </div>
                <!--end row-->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
@endsection
