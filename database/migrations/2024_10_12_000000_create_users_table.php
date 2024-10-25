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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->constrained()->cascadeOnDelete();
            $table->string('username');
            $table->string('name');
            $table->string('position')->nullable();
            $table->string('email')->unique()->nullable();
            $table->text('bio')->nullable();
            $table->string('fb')->nullable();
            $table->string('tg')->nullable();
            $table->string('ins')->nullable();
            $table->string('ln')->nullable();
            $table->string('password');
            $table->string('photo')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
