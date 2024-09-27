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
        Schema::table('properties', function (Blueprint $table) {
            $table->unsignedBigInteger('service_type_id')->after('price');
            $table->foreign('service_type_id')->references('id')->on('service_types')->onDelete('cascade');
            $table->integer('bathroom')->after('bedroom');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropColumn('service_type_id');
            $table->dropColumn('bathroom');
        });
    }
};
