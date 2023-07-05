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
class CreateFailedJobsTable extends Migration
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
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
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
        Schema::dropIfExists('failed_jobs');
    }
};
=======
    {
        Schema::dropIfExists('failed_jobs');
    }
}
>>>>>>> 13aaf85 (p1)
