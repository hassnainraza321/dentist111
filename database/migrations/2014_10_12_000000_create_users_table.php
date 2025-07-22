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
        // Schema::create('contact_us', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('first_name');
        //     $table->string('last_name')->nullable();
        //     $table->string('email');
        //     $table->string('phone', 15)->nullable();
        //     $table->text('message');
        //     $table->ipAddress('ip')->nullable();
        //     $table->text('user_agent')->nullable();
        //     $table->timestamps();
        // });

        // Schema::create('counties', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('county', 15);
        //     $table->string('slug')->unique();
        //     $table->boolean('is_active')->default(1);
        //     $table->timestamps();
        // });

        // Schema::create('cities', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('city');
        //     $table->string('slug')->unique();
        //     $table->boolean('is_active')->default(1);
        //     $table->foreignId('county_id')->index();
        //     $table->timestamps();

        //     $table->foreign('county_id')->references('id')->on('counties')->onDelete('cascade');
        // });

        // Schema::create('towns', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('town');
        //     $table->string('slug');
        //     $table->boolean('is_active')->default(1);
        //     $table->foreignId('city_id')->index();
        //     $table->timestamps();

        //     $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('towns');
        // Schema::dropIfExists('cities');
        // Schema::dropIfExists('counties');
        // Schema::dropIfExists('contact_us');
    }
};
