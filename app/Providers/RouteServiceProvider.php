<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * The path to the "home" route for your application.
=======
     * The path to your application's "home" route.
>>>>>>> 106f54eec92316c317e3f0b4a7294843f31cf997
     *
     * Typically, users are redirected here after authentication.
=======
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
>>>>>>> 13aaf85 (p1)
     *
     * @var string
     */
    public const HOME = '/home';

    /**
<<<<<<< HEAD
     * Define your route model bindings, pattern filters, and other route configuration.
<<<<<<< HEAD
=======
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
>>>>>>> 13aaf85 (p1)
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();
<<<<<<< HEAD
=======
     */
    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
>>>>>>> 106f54eec92316c317e3f0b4a7294843f31cf997

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }
<<<<<<< HEAD
=======

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
        });
    }
>>>>>>> 13aaf85 (p1)

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
<<<<<<< HEAD
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
=======
>>>>>>> 106f54eec92316c317e3f0b4a7294843f31cf997
=======
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
>>>>>>> 13aaf85 (p1)
}
