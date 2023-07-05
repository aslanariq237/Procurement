<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
<<<<<<< HEAD
     *
     * @return void
     */
    public function boot()
=======
     */
    public function boot(): void
>>>>>>> 106f54eec92316c317e3f0b4a7294843f31cf997
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
<<<<<<< HEAD
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
=======
     */
    public function shouldDiscoverEvents(): bool
>>>>>>> 106f54eec92316c317e3f0b4a7294843f31cf997
    {
        return false;
    }
}
