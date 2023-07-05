<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
<<<<<<< HEAD
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
=======
        //
>>>>>>> 106f54eec92316c317e3f0b4a7294843f31cf997
    ];

    /**
     * Register any authentication / authorization services.
<<<<<<< HEAD
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

=======
     */
    public function boot(): void
    {
>>>>>>> 106f54eec92316c317e3f0b4a7294843f31cf997
        //
    }
}
