<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            /* profile */
            $table->string('name');
            $table->boolean('gender')->nullable();
            $table->string('contact')->nullable()->unique();
            $table->text('address')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('date_of_birth')->nullable();
            /* education */
            $table->string('school_origin')->nullable();
            $table->string('school_class')->nullable();
            $table->integer('ranking')->nullable();
            $table->year('graduation_year')->nullable();
            $table->text('achievement')->nullable();
            /* marketing */
            $table->string('source')->nullable();
            /* account */
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
