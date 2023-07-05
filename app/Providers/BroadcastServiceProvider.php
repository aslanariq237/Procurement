<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 13aaf85 (p1)
     *
     * @return void
     */
    public function boot()
<<<<<<< HEAD
=======
     */
    public function boot(): void
>>>>>>> 106f54eec92316c317e3f0b4a7294843f31cf997
=======
>>>>>>> 13aaf85 (p1)
    {
        Broadcast::routes();

        require base_path('routes/channels.php');
    }
}
