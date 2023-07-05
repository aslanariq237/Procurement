<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
<<<<<<< HEAD
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
=======
     */
    public function test_the_application_returns_a_successful_response(): void
>>>>>>> 106f54eec92316c317e3f0b4a7294843f31cf997
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
