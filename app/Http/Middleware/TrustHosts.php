<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     */
<<<<<<< HEAD
    public function hosts()
=======
    public function hosts(): array
>>>>>>> 106f54eec92316c317e3f0b4a7294843f31cf997
    {
        return [
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
}
