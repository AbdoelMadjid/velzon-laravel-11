@extends('docs.laravel.layout')

@section('title', 'Laravel Passport | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Laravel Passport</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Laravel Passport</li>
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
                                    <h4 class="card-title mb-0">Laravel API authentication using passport</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-sm-12">
                                            <h5 class="fw-semibold fs-16 text-decoration-underline mb-3">Introduction
                                            </h5>
                                            <p>
                                                <a href="https://laravel.com/docs/9.x/passport" class="text-danger"
                                                    target="_blank">Laravel
                                                    Passport</a> provides a full OAuth2 server implementation for your
                                                Laravel application in a matter of minutes. Passport is built on top of
                                                the
                                                <a href="https://github.com/thephpleague/oauth2-server"
                                                    class="text-danger" target="_blank">League OAuth2</a>
                                                <a href="https://github.com/thephpleague/oauth2-server"
                                                    class="text-danger" target="_blank">server</a> that is maintained by
                                                Andy Millington and Simon Hamp.
                                            </p>
                                            <div class="alert alert-warning text-warning mb-0">We have not provided
                                                Passport support default with Velzon admin template. In order to use
                                                passport then you have to follow the below steps.</div>
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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Passport Or Sanctum?</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-sm-12">
                                            <p>
                                                Before getting started, you may wish to determine if your application
                                                would be better served by Laravel Passport or Laravel sanctum . If your
                                                application absolutely needs to support OAuth2, then you should use
                                                Laravel Passport.
                                            </p>
                                            <p>However, if you are attempting to authenticate a single-page application,
                                                mobile application, or issue API tokens, you should use Laravel sanctum.
                                                Laravel Sanctum does not support OAuth2; however, it provides a
                                                much simpler API authentication development experience.</p>
                                            <div class="alert alert-danger text-danger mb-0">
                                                If you use Laravel password with Jetstream then you cannot use
                                                Jetstream's
                                                <code>api()</code> features.
                                            </div>
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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Installation</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-sm-12">
                                            <p>To get started, install Passport via the Composer package manager:</p>
                                            <pre class="language-markup my-3"
                                                tabindex="0"><code class="language-markup">composer require laravel/passport</code></pre>
                                            <p>Passport's <a href="https://laravel.com/docs/9.x/providers"
                                                    class="text-danger" target="_blank">service provider</a> registers
                                                its own database migration directory, so you should migrate your
                                                database after installing
                                                the package. The Passport migrations will create the tables your
                                                application needs to store OAuth2 clients and access tokens:</p>
                                            <pre class="language-markup my-3"
                                                tabindex="0"><code class="language-markup">php artisan migrate</code></pre>
                                            <p>Next, you should execute the <code>passport:install</code> Artisan
                                                command. This command will create the encryption keys needed to generate
                                                secure access tokens. In addition, the command will create "personal
                                                access"
                                                and "password grant" clients which will be used to generate access
                                                tokens:</p>
                                            <div class="alert alert-warning text-warning mb-3">
                                                NOTE- If you would like to use UUIDs as the primary key value of the
                                                Passport
                                                <code>Client</code> model instead of auto-incrementing integers, please
                                                install Passport using the
                                                <a href="https://laravel.com/docs/9.x/passport#client-uuids"
                                                    class="text-danger" target="_blank">uuids option.</a>
                                            </div>
                                            <p>After running the <code>passport:install</code> command, add the
                                                <code>Laravel\Passport\HasApiTokens</code>> trait to your
                                                <code>App\Models\User</code> model. This trait will provide a few helper
                                                methods to your
                                                model which allow you to inspect the authenticated user's token and
                                                scopes. If your model is already using the
                                                <code>Laravel\Sanctum\HasApiTokens</code> trait, you may remove that
                                                trait:</p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup"> &lt?php
namespace App\Models;
    
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
    
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
}</code></pre>
                                            <p>Next, you should call the <code>Passport::routes</code> method within the
                                                <code>boot</code> method of your
                                                <code>App\Providers\AuthServiceProvider</code>. This method will
                                                register the routes necessary to issue
                                                access tokens and revoke access tokens, clients, and personal access
                                                tokens:</p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">&lt?php
 
        namespace App\Providers;
            
        use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
        use Illuminate\Support\Facades\Gate;
        use Laravel\Passport\Passport;
            
        class AuthServiceProvider extends ServiceProvider
        {
            /**
                * The policy mappings for the application.
                *
                * &#64;var array
                */
            protected $policies = [
                'App\Models\Model' => 'App\Policies\ModelPolicy',
            ];
            
            /**
                * Register any authentication / authorization services.
                *
                * &#64;return void
                */
            public function boot()
            {
                $this->registerPolicies();
            
                if (! $this->app->routesAreCached()) {
                    Passport::routes();
                }
            }
        }</code></pre>
                                            <p>Finally, in your application's <code>config/auth.php</code> configuration
                                                file, you should set the <code>driver</code> option of the
                                                <code>api</code> authentication <code>guard</code> to passport. This
                                                will instruct
                                                your application to use Passport's
                                                <code>TokenGuard</code> when authenticating incoming API requests:
                                            </p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">'guards' => [
    'web' => [
        'driver' => 'session',
        'provider' => 'users',
    ],
    
    'api' => [
        'driver' => 'passport',
        'provider' => 'users',
    ],
],</code></pre>
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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Client UUIDs</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-sm-12">
                                            <p>You may also run the passport:install command with the --uuids option
                                                present. This option will instruct Passport that you would like to use
                                                UUIDs instead of auto-incrementing integers as the Passport Client
                                                model's
                                                primary key values. After running the passport:install command with the
                                                --uuids option, you will be given additional instructions regarding
                                                disabling Passport's default migrations:</p>
                                            <pre class="language-markup py-3"
                                                tabindex="0"><code class="language-markup">php artisan passport:install --uuids</code></pre>
                                        </div>
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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Deploying Passport</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-sm-12">
                                            <p>When deploying Passport to your application's servers for the first time,
                                                you will likely need to run the <code>passport:keys</code> command. This
                                                command generates the encryption keys Passport needs in order to
                                                generate access tokens. The generated keys are not typically kept in
                                                source control:</p>
                                            <pre class="language-markup my-3"
                                                tabindex="0"><code class="language-markup">php artisan passport:keys</code></pre>
                                            <p>If necessary, you may define the path where Passport's keys should be
                                                loaded from. You may use the <code>Passport::loadKeysFrom</code> method
                                                to accomplish this. Typically, this method should be called from the
                                                <code>boot</code> method of your application's
                                                <code>App\Providers\AuthServiceProvider</code> class:
                                            </p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">/**
* Register any authentication / authorization services.
*
* &#64;return void
*/
public function boot()
{
    $this->registerPolicies();

    Passport::routes();

    Passport::loadKeysFrom(__DIR__.'/../secrets/oauth');
}</code></pre>
                                            <div class="alert alert-info text-info mb-0">
                                                NOTE – You can read
                                                <a href="https://laravel.com/docs/9.x/passport" class="text-danger"
                                                    target="_blank">Laravel Passport</a> documentation in detail for
                                                Configurations, Migration, Upgrading Passport, Issuing Access Tokens,
                                                Requesting
                                                Tokens, Refreshing, Revoking & Purging Tokens etc..
                                            </div>
                                        </div>
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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Passport Authentication</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-sm-12">
                                            <p>
                                                Below are some authentications sample code to authenticate users via
                                                Laravel Passport.
                                            </p>
                                            <h6 class="fw-semibold fs-16 text-decoration-underline mb-3">Step 1:Create
                                                Route</h6>
                                            <p>Open <code>api.php</code> from routes folder, and replace the code of
                                                route with the following:</p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">&lt?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);

    Route::group(['middleware' => 'auth:api'], function () {
        Route::get('logout', [AuthController::class, 'logout']);
        Route::get('user', [AuthController::class, 'user']);
    });

</code></pre>
                                            <h6 class="fw-semibold fs-16 text-decoration-underline mb-3">Step 2:Create
                                                Controller</h6>
                                            <pre class="language-markup my-3"
                                                tabindex="0"><code class="language-markup">php artisan make:controller AuthController</code></pre>
                                            <div class="alert alert-info text-info mb-0">
                                                NOTE - Now, We will create APIs and to test those APIs one can use tools
                                                like POSTMAN. We have attached images showing the API test results using
                                                POSTMAN.
                                            </div>
                                            <h6 class="fw-semibold fs-16 text-decoration-underline mt-3 mb-3">Step
                                                3:Register User API</h6>
                                            <p>Open <code>Http/Controllers/AuthController.php</code> and replace the
                                                code with below code:</p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">public function register(Request $request)
{
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email|unique:users,email',
        'password' => ['required', Password::min(8)->mixedCase()->letters()->numbers()->symbols()->uncompromised(),],
    ]);

    $user = new User([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password)
    ]);
    if ($user->save()) {
        return response()->json([
            'message' => 'Successfully created user!'
        ], 201);
    } else {
        return response()->json(['error' => 'Something went wrong, check details']);
    }
}</code></pre>
                                            <p>TEST register user API using postman</p>
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/assets/images/api/register.png" alt="image"
                                                    class="img-fluid shadow mb-3">
                                            </div>
                                            <p>We can also try to access the same route with an empty email column. We
                                                should receive an required error.</p>
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/assets/images/api/email-error.png" alt="image"
                                                    class="img-fluid shadow mb-3">
                                            </div>
                                            <h6 class="fw-semibold fs-16 text-decoration-underline mt-3 mb-3">Step 4:
                                                Login User API</h6>
                                            <p>In the same file
                                                <code>Http/Controllers/AuthController.php></code>, add below code after
                                                register method:
                                            </p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">public function login(Request $request)
{
    $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
        'remember_me' => 'boolean'
    ]);
    $credentials = request(['email', 'password']);
    if (!Auth::attempt($credentials))
        return response()->json([
            'message' => 'Unauthorized'
        ], 401);
    $user = $request->user();
    $tokenResult = $user->createToken('Personal Access Token');
    $token = $tokenResult->token;
    if ($request->remember_me)
        $token->expires_at = Carbon::now()->addWeeks(1);
    $token->save();
    return response()->json([
        'access_token' => $tokenResult->accessToken,
        'token_type' => 'Bearer',
        'expires_at' => Carbon::parse(
            $tokenResult->token->expires_at
        )->toDateTimeString()
    ]);
}</code></pre>
                                            <p>TEST Login user API using postman</p>
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/assets/images/api/login.png" alt="image"
                                                    class="img-fluid shadow mb-3">
                                            </div>
                                            <h6 class="fw-semibold fs-16 text-decoration-underline mt-3 mb-3">Step 5:
                                                Get User API</h6>
                                            <p>In the same file
                                                <code>Http/Controllers/AuthController.php</code>, add below code after
                                                Login method:
                                            </p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">/**
* Get the authenticated User
*
* &#64;return [json] user object
*/
public function user(Request $request)
{
    return response()->json($request->user());
}</code></pre>
                                            <p>TEST get user API using postman </p>
                                            <div class="border p-3 text-center mb-3">
                                                <img src="/assets/images/api/usredetails.png" alt="image"
                                                    class="img-fluid shadow mb-3">
                                            </div>
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