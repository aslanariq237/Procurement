<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;
<<<<<<< HEAD
=======
use Illuminate\Foundation\Application;
>>>>>>> 106f54eec92316c317e3f0b4a7294843f31cf997

trait CreatesApplication
{
    /**
     * Creates the application.
<<<<<<< HEAD
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
=======
     */
    public function createApplication(): Application
>>>>>>> 106f54eec92316c317e3f0b4a7294843f31cf997
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
