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
class CreatePersonalAccessTokensTable extends Migration
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
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->id();
            $table->morphs('tokenable');
            $table->string('name');
            $table->string('token', 64)->unique();
            $table->text('abilities')->nullable();
            $table->timestamp('last_used_at')->nullable();
<<<<<<< HEAD
            $table->timestamp('expires_at')->nullable();
=======
>>>>>>> 13aaf85 (p1)
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
        Schema::dropIfExists('personal_access_tokens');
    }
};
=======
    {
        Schema::dropIfExists('personal_access_tokens');
    }
}
>>>>>>> 13aaf85 (p1)
