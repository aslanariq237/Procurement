<?php

namespace Tests\Feature;

<<<<<<< HEAD
// use Illuminate\Foundation\Testing\RefreshDatabase;
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
>>>>>>> 13aaf85 (p1)
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
=======
     */
    public function test_the_application_returns_a_successful_response(): void
>>>>>>> 106f54eec92316c317e3f0b4a7294843f31cf997
=======
     *
     * @return void
     */
    public function test_example()
>>>>>>> 13aaf85 (p1)
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
