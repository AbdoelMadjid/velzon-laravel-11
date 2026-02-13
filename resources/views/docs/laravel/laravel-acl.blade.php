@extends('docs.laravel.layout')

@section('title', 'Laravel ACL | Velzon Laravel - Admin & Dashboard Template Documentation')

@section('content')
<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Laravel ACL</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Docs</a></li>
                                        <li class="breadcrumb-item active">Laravel ACL</li>
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
                                    <h4 class="card-title mb-0">Laravel Permission</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-sm-12">
                                            <p>Multiple user roles and permission controls are required features for the
                                                admin panel.</p>
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
                                    <h4 class="card-title mb-0">Getting started</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-sm-12">
                                            <p>Install Composer Packages</p>
                                            <p>Now, we will install spatie package for ACL.</p>
                                            <pre class="language-markup my-3"
                                                tabindex="0"><code class="language-markup">composer require spatie/laravel-permission</code></pre>
                                            <p>Now open <code>config/app.php</code> file and add the following provider.
                                            </p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">'providers' => [
// ...
    Spatie\Permission\PermissionServiceProvider::class,
];</code></pre>
                                            <p>Now we need to publish the spatie roles and persion using the following
                                                commands.
                                            </p>
                                            <pre class="language-markup my-3"
                                                tabindex="0"><code class="language-markup">php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"</code></pre>
                                            <P>Spatie create three migrations you can see after running the migration
                                                command:
                                            </P>
                                            <pre class="language-markup my-3"
                                                tabindex="0"><code class="language-markup">php artisan migrate</code></pre>
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
                                    <h4 class="card-title mb-0">Basic Usage</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-sm-12">
                                            <p>First, add the
                                                <code>Spatie\Permission\Traits\HasRoles</code> trait to your User
                                                model(s):
                                            </p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles;

    // ...
}</code></pre>
                                            <p>This package allows for users to be associated with permissions and
                                                roles. Every role is associated with multiple permissions. A Role and a
                                                Permission are regular Eloquent models. They require a name and can be
                                                created like this:</p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

$role = Role::create(['name' => 'writer']);
$permission = Permission::create(['name' => 'edit articles']);</code></pre>
                                            <p>A permission can be assigned to a role using 1 of these methods:</p>
                                            <pre class="language-markup my-3" tabindex="0">$role->givePermissionTo($permission);
$permission->assignRole($role);<code class="language-markup"></code></pre>
                                            <p>Multiple permissions can be synced to a role using 1 of these methods:
                                            </p>
                                            <pre class="language-markup my-3" tabindex="0">$role->syncPermissions($permissions);
$permission->syncRoles($roles);<code class="language-markup"></code></pre>
                                            <p>A permission can be removed from a role using 1 of these methods: </p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">$role->revokePermissionTo($permission);
$permission->removeRole($role);</code></pre>
                                            <p>If you're using multiple guards the guard_name attribute needs to be set
                                                as well. Read about it in the using
                                                <a
                                                    href="https://spatie.be/docs/laravel-permission/v5/basic-usage/multiple-guards">multiple
                                                    guards</a> section of the readme.
                                            </p>
                                            <p>The HasRoles trait adds Eloquent relationships to your models, which can
                                                be accessed directly or used as a base query:</p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">// get a list of all permissions directly assigned to the user
$permissionNames = $user->getPermissionNames(); // collection of name strings
$permissions = $user->permissions; // collection of permission objects

// get all permissions for the user, either directly, or from roles, or from both
$permissions = $user->getDirectPermissions();
$permissions = $user->getPermissionsViaRoles();
$permissions = $user->getAllPermissions();

// get the names of the user's roles
$roles = $user->getRoleNames(); // Returns a collection</code></pre>
                                            <p>The HasRoles trait also adds a role scope to your models to scope the
                                                query to certain roles or permissions:</p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">$users = User::role('writer')->get(); // Returns only users with the role 'writer'
</code></pre>
                                            <p>The role scope can accept a string, a
                                                <code>\Spatie\Permission\Models\Role</code> object or an
                                                <code>\Illuminate\Support\Collection</code> object.</p>
                                            <p>The same trait also adds a scope to only get users that have a certain
                                                permission.</p>
                                            <pre class="language-matkup my-3"
                                                tabindex="0"><code class="language-matkup">$users = User::permission('edit articles')->get(); // Returns only users with the permission 'edit articles' (inherited or directly)</code></pre>
                                            <p>The scope can accept a string, a
                                                <code>\Spatie\Permission\Models\Permission</code> object or an
                                                <code>\Illuminate\Support\Collection</code> object.</p>
                                            <h6 class="fw-semibold fs-16 text-decoration-underline mt-3 mb-3">ELOQUENT
                                            </h6>
                                            <p>Since Role and Permission models are extended from Eloquent models, basic
                                                Eloquent calls can be used as well:</p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">$all_users_with_all_their_roles = User::with('roles')->get();
$all_users_with_all_direct_permissions = User::with('permissions')->get();
$all_roles_in_database = Role::all()->pluck('name');
$users_without_any_roles = User::doesntHave('roles')->get();
$all_roles_except_a_and_b = Role::whereNotIn('name', ['role A', 'role B'])->get();</code></pre>
                                            <h5 class="fw-semibold fs-18 text-decoration-underline mt-3 mb-3">Using a
                                                middleware </h5>
                                            <h6 class="fw-semibold fs-12 text-decoration-underline mt-3 mb-3">Default
                                                Middleware </h6>
                                            <p>For checking against a single permission (see Best Practices) using can,
                                                you can use the built-in Laravel middleware provided by
                                                <code>\Illuminate\Auth\Middleware\Authorize::class</code> like this</p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">Route::group(['middleware' => ['can:publish articles']], function () {
    //
});</code></pre>
                                            <h6 class="fw-semibold fs-12 text-decoration-underline mt-3 mb-3">Package
                                                Middleware</h6>
                                            <p>This package comes with RoleMiddleware, PermissionMiddleware and
                                                RoleOrPermissionMiddleware middleware. You can add them inside your
                                                <code>app/Http/Kernel.php</code> file.</p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">protected $routeMiddleware = [
// ...
'role' => \Spatie\Permission\Middlewares\RoleMiddleware::class,
'permission' => \Spatie\Permission\Middlewares\PermissionMiddleware::class,
'role_or_permission' => \Spatie\Permission\Middlewares\RoleOrPermissionMiddleware::class,
];</code></pre>
                                            <p>Then you can protect your routes using middleware rules:</p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">Route::group(['middleware' => ['role:super-admin']], function () {
    //
});

Route::group(['middleware' => ['permission:publish articles']], function () {
    //
});

Route::group(['middleware' => ['role:super-admin','permission:publish articles']], function () {
    //
});

Route::group(['middleware' => ['role_or_permission:super-admin|edit articles']], function () {
    //
});

Route::group(['middleware' => ['role_or_permission:publish articles']], function () {
    //
});</code></pre>
                                            <p>Alternatively, you can separate multiple roles or permission with a
                                                <code>|</code> (pipe) character:</p>
                                            <pre class="language-markup my-2" tabindex="0"><code class="language-markup">Route::group(['middleware' => ['role:super-admin|writer']], function () {
    //
});

Route::group(['middleware' => ['permission:publish articles|edit articles']], function () {
    //
});

Route::group(['middleware' => ['role_or_permission:super-admin|edit articles']], function () {
    //
});</code></pre>
                                            <p>You can protect your controllers similarly, by setting desired middleware
                                                in the constructor:</p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">public function __construct()
{
    $this->middleware(['role:super-admin','permission:publish articles|edit articles']);
}</code></pre>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">public function __construct()
{
    $this->middleware(['role_or_permission:super-admin|edit articles']);
}</code></pre>
                                            <h6 class="fw-semibold fs-16 text-decoration-underline mt-3 mb-3">Defining a
                                                Super-Admin</h6>
                                            <p>We strongly recommend that a Super-Admin be handled by setting a global
                                                <code>Gate::before</code> or <code>Gate::after</code> rule which checks
                                                for the desired role.</p>
                                            <p>Then you can implement the best-practice of primarily using
                                                permission-based controls (&#64;can and $user->can, etc) throughout your
                                                app, without always having to check for "is this a super-admin"
                                                everywhere. Best not
                                                to use role-checking (ie: <code>hasRole</code>) when you have Super
                                                Admin features like this.</p>
                                            <h6 class="fw-semibold fs-16 text-decoration-underline mt-3 mb-3">
                                                Gate::before</h6>
                                            <p>If you want a "Super Admin" role to respond true to all permissions,
                                                without needing to assign all those permissions to a role, you can use
                                                Laravel's <code>Gate::before()</code> method. For example:</p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerPolicies();

        // Implicitly grant "Super Admin" role all permissions
        // This works in the app by using gate-related functions like auth()->user->can() and &#64;can()
        Gate::before(function ($user, $ability) {
            return $user->hasRole('Super Admin') ? true : null;
        });
    }
}</code></pre>
                                            <h6 class="fw-semibold fs-16 text-decoration-underline mt-3 mb-3">
                                                Gate::after</h6>
                                            <p>Alternatively you might want to move the Super Admin check to the
                                                <code>Gate::after</code> phase instead, particularly if your Super Admin
                                                shouldn't be allowed to do things your app doesn't want "anyone" to do,
                                                such as writing more than 1 review, or bypassing unsubscribe rules, etc.
                                            </p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">// somewhere in a service provider

Gate::after(function ($user, $ability) {
    return $user->hasRole('Super Admin'); // note this returns boolean
});</code></pre>
                                            <h6 class="fw-semibold fs-16 text-decoration-underline mt-3 mb-3">Blade
                                                directives</h6>
                                            <h6 class="fw-semibold fs-16 text-decoration-underline mt-3 mb-3">
                                                Permissions</h6>
                                            <p>This package doesn't add any <b>permission</b>-specific Blade directives.
                                                Instead, use Laravel's native <code>&#64;can</code> directive to check if a
                                                user has a certain permission.</p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">&#64;can('edit articles')
//
&#64;endcan</code></pre>
                                            <p>or</p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">&#64;if(auth()->user()->can('edit articles') && $some_other_condition)
//
&#64;endif
</code></pre>
                                            <p>You can use <code>&#64;can</code>, <code>&#64;cannot</code>,
                                                <code>&#64;canany</code>, and <code>&#64;guest</code> to test for
                                                permission-related access.</p>
                                            <h6 class="fw-semibold fs-16 text-decoration-underline mt-3 mb-3">Roles</h6>
                                            <p>As discussed in the Best Practices section of the docs,
                                                <code>it is strongly recommended to always use permission directives</code>,
                                                instead of role directives.</p>
                                            <p>Additionally, if your reason for testing against Roles is for a
                                                Super-Admin, see the Defining A Super-Admin section of the docs.</p>
                                            <p>If you actually need to test for Roles, this package offers some Blade
                                                directives to verify whether the currently logged in user has all or any
                                                of a given list of roles.</p>
                                            <p>Optionally you can pass in the guard that the check will be performed on
                                                as a second argument.</p>
                                            <h6 class="fw-semibold fs-16 text-decoration-underline mt-3 mb-3">BLADE AND
                                                ROLES</h6>
                                            <p>Check for a specific role:</p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">&#64;role('writer')
I am a writer!
&#64;else
I am not a writer...
&#64;endrole</code></pre>
                                            <p>is the same as</p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">&#64;hasrole('writer')
    I am a writer!
&#64;else
    I am not a writer...
&#64;endhasrole</code></pre>
                                            <p>Check for any role in a list:</p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">&#64;hasanyrole($collectionOfRoles)
    I have one or more of these roles!
&#64;else
    I have none of these roles...
&#64;endhasanyrole
// or
&#64;hasanyrole('writer|admin')
    I am either a writer or an admin or both!
&#64;else
    I have none of these roles...
&#64;endhasanyrole</code></pre>
                                            <p>Check for all roles:</p>
                                            <pre class="language-markup my-3"><code class="language-markup">&#64;hasallroles($collectionOfRoles)
    I have all of these roles!
&#64;else
    I do not have all of these roles...
&#64;endhasallroles
// or
&#64;hasallroles('writer|admin')
    I am both a writer and an admin!
&#64;else
    I do not have all of these roles...
&#64;endhasallroles</code></pre>
                                            <p>Alternatively, <code>&#64;unlessrole</code> gives the reverse for checking a
                                                singular role, like this:</p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">&#64;unlessrole('does not have this role')
    I do not have the role
&#64;else
    I do have the role
&#64;endunlessrole</code></pre>
                                            <p>You can also determine if a user has exactly all of a given list of
                                                roles:</p>
                                            <pre class="language-markup my-3" tabindex="0"><code class="language-markup">&#64;hasexactroles('writer|admin')
    I am both a writer and an admin and nothing else!
&#64;else
    I do not have all of these roles or have more other roles...
&#64;endhasexactroles</code></pre>
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
