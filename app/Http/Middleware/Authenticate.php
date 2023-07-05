<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Http\Request;
>>>>>>> 106f54eec92316c317e3f0b4a7294843f31cf997
=======
>>>>>>> 13aaf85 (p1)

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 13aaf85 (p1)
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
<<<<<<< HEAD
=======
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
>>>>>>> 106f54eec92316c317e3f0b4a7294843f31cf997
=======
>>>>>>> 13aaf85 (p1)
    }
}
