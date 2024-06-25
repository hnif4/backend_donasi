<?php
namespace App\Providers;
use Laravel\Passport\Passport; // <-- import Laravel Passport
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as
ServiceProvider;
class AuthServiceProvider extends ServiceProvider
{
 /**
 * The policy mappings for the application.
 *
 * @var array
 */
 protected $policies = [
 // 'App\Models\Model' => 'App\Policies\ModelPolicy',
 ];
 /**
 * Register any authentication / authorization services.
 *
 * @return void
 */
public function boot()
{
    $this->registerPolicies();
    
    /** @var CachesRoutes $app */
    $app = $this->app;
    if (!$app->routesAreCached()) {
        Passport::routes(); // <-- passport route
        }
    }
}