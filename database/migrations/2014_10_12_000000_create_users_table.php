<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
return new class extends Migration
{
    /**
     * Run the migrations.
<<<<<<< HEAD
=======
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
>>>>>>> 13aaf85 (p1)
     *
     * @return void
     */
    public function up()
<<<<<<< HEAD
=======
     */
    public function up(): void
>>>>>>> 106f54eec92316c317e3f0b4a7294843f31cf997
=======
>>>>>>> 13aaf85 (p1)
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
<<<<<<< HEAD
=======
>>>>>>> 13aaf85 (p1)
     *
     * @return void
     */
    public function down()
<<<<<<< HEAD
=======
     */
    public function down(): void
>>>>>>> 106f54eec92316c317e3f0b4a7294843f31cf997
    {
        Schema::dropIfExists('users');
    }
};
=======
    {
        Schema::dropIfExists('users');
    }
}
>>>>>>> 13aaf85 (p1)
