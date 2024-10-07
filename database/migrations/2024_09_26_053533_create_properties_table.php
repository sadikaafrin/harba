<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['approve', 'disapprove', 'pending', 'close'])->default('pending')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->unsignedBigInteger('appartment_type_id');
            $table->foreign('appartment_type_id')->references('id')->on('appartment_types')->onDelete('cascade');
            $table->string('property_title');
            $table->decimal('price', 8, 2);
            $table->string('keyword');
            $table->string('tag');
            $table->string('phone');
            $table->string('email');
            $table->unsignedBigInteger('all_cities_id');
            $table->foreign('all_cities_id')->references('id')->on('all_cities')->onDelete('cascade');
            $table->text('address');
            $table->integer('area');
            $table->integer('bedroom');
            $table->integer('bethrooms');
            $table->string('parking');
            $table->string('accomudation');
            $table->string('website');
            $table->text('details');
            $table->enum('feature', ['active', 'inactive'])->default('active');
            // $table->string('brochure_pdf');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};