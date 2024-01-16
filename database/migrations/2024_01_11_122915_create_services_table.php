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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('service_name')->nullable();
            $table->string('description');
            $table->json('image');
            $table->string('category_name');
            $table->integer('number_of_bedrooms')->nullable();
            $table->integer('number_of_bathrooms')->nullable();
            $table->integer('number_of_people')->nullable();
            $table->string('area')->nullable();
            $table->string('location')->nullable();
            $table->string('brand')->nullable();
            $table->string('condition')->nullable();
            $table->string('price_type')->nullable();
            $table->float('price')->nullable();
            $table->json('facilities');
            $table->string('job_type')->nullable();
            $table->string('job_sector')->nullable();
            $table->string('salary_type')->nullable();
            $table->string('experience')->nullable();
            $table->string('salary_amount')->default('Attractive');
            $table->string('responsibility')->nullable();
            $table->boolean('status')->default(true);
            $table->float('charge')->nullable();
            $table->foreignId('service_owner')->constrained('users');
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
        Schema::dropIfExists('services');
    }
};
