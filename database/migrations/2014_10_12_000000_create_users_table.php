<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
<<<<<<< HEAD
     *
     * @return void
     */
    public function up()
=======
     */
    public function up(): void
>>>>>>> 106f54eec92316c317e3f0b4a7294843f31cf997
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
<<<<<<< HEAD
     *
     * @return void
     */
    public function down()
=======
     */
    public function down(): void
>>>>>>> 106f54eec92316c317e3f0b4a7294843f31cf997
    {
        Schema::dropIfExists('users');
    }
};
