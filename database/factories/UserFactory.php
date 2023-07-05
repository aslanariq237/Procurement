<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

<<<<<<< HEAD
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
=======
>>>>>>> 13aaf85 (p1)
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
<<<<<<< HEAD
     * @return array<string, mixed>
     */
<<<<<<< HEAD
    public function definition()
=======
    public function definition(): array
>>>>>>> 106f54eec92316c317e3f0b4a7294843f31cf997
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
=======
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
>>>>>>> 13aaf85 (p1)
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return static
     */
    public function unverified()
=======
     */
    public function unverified(): static
>>>>>>> 106f54eec92316c317e3f0b4a7294843f31cf997
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
=======
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
>>>>>>> 13aaf85 (p1)
    }
}
