<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('company_id')->nullable();
            $table->string('title', 128)->index();
            $table->string('desc', 4096);
            $table->string('benefit', 512);
            $table->integer('max_salary');
            $table->integer('min_salary');
            $table->string('skill', 512);
            $table->string('education_level');
            $table->datetime('created_date');
            $table->datetime('end_date');

            $table->foreign('company_id')
                  ->references('id')
                  ->on('companies')
                  ->onUpdate('cascade')
                  ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_jobs');
    }
}
