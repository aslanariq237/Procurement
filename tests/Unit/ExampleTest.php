<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return void
     */
    public function test_that_true_is_true()
=======
     */
    public function test_that_true_is_true(): void
>>>>>>> 106f54eec92316c317e3f0b4a7294843f31cf997
=======
     *
     * @return void
     */
    public function test_example()
>>>>>>> 13aaf85 (p1)
    {
        $this->assertTrue(true);
    }
}
