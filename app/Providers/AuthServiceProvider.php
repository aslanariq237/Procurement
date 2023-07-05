<?php

namespace App\Providers;

<<<<<<< HEAD
// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
=======
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
>>>>>>> 13aaf85 (p1)

class AuthServiceProvider extends ServiceProvider
{
    /**
<<<<<<< HEAD
     * The model to policy mappings for the application.
=======
     * The policy mappings for the application.
>>>>>>> 13aaf85 (p1)
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
<<<<<<< HEAD
<<<<<<< HEAD
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
=======
        //
>>>>>>> 106f54eec92316c317e3f0b4a7294843f31cf997
=======
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
>>>>>>> 13aaf85 (p1)
    ];

    /**
     * Register any authentication / authorization services.
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 13aaf85 (p1)
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

<<<<<<< HEAD
=======
     */
    public function boot(): void
    {
>>>>>>> 106f54eec92316c317e3f0b4a7294843f31cf997
=======
>>>>>>> 13aaf85 (p1)
        //
    }
}
