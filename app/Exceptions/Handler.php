<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
=======
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
>>>>>>> 13aaf85 (p1)
     */
    protected $dontReport = [
        //
    ];

    /**
<<<<<<< HEAD
     * A list of the inputs that are never flashed to the session on validation exceptions.
=======
     * The list of the inputs that are never flashed to the session on validation exceptions.
>>>>>>> 106f54eec92316c317e3f0b4a7294843f31cf997
=======
     * A list of the inputs that are never flashed for validation exceptions.
>>>>>>> 13aaf85 (p1)
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 13aaf85 (p1)
     *
     * @return void
     */
    public function register()
<<<<<<< HEAD
=======
     */
    public function register(): void
>>>>>>> 106f54eec92316c317e3f0b4a7294843f31cf997
=======
>>>>>>> 13aaf85 (p1)
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
