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
        Schema::create('c_m_s', function (Blueprint $table) {
            $table->id();

    $table->string('page')->nullable();
            $table->string('section')->nullable();
            $table->string('title')->nullable();
            $table->string('sub_title')->nullable();
            $table->string('text')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->text('sub_description')->nullable();
            $table->string('button_text')->nullable();
            $table->string('link_url')->nullable();
            $table->string('name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('question')->nullable();
            $table->string('section_header')->nullable();
            $table->string('expert_designation')->nullable();
            $table->string('email')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_m_s');
    }
};
