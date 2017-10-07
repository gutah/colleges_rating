<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable('false');
            $table->text('description');
            $table->string('slug');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('college_course', function (Blueprint $table) {
            $table->integer('college_id');
            $table->integer('course_id');
            $table->primary(['college_id','course_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
          Schema::dropIfExists('college_course');
    }
}
