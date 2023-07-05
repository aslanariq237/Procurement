<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Foundation\Bus\DispatchesJobs;
=======
>>>>>>> 106f54eec92316c317e3f0b4a7294843f31cf997
=======
use Illuminate\Foundation\Bus\DispatchesJobs;
>>>>>>> 13aaf85 (p1)
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
<<<<<<< HEAD
<<<<<<< HEAD
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
=======
    use AuthorizesRequests, ValidatesRequests;
>>>>>>> 106f54eec92316c317e3f0b4a7294843f31cf997
=======
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
>>>>>>> 13aaf85 (p1)
}
