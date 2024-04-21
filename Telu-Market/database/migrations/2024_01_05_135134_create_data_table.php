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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('Username', 255);
            $table->string('Email', 100)->unique();
            $table->string('Password', 1000);
            $table->string('name')->nullable();
            $table->string('nim')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('address')->nullable();
            $table->string('birthday')->nullable();
            $table->string('country')->nullable();
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
