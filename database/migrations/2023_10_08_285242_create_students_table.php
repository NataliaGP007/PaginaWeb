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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string("name", 200);
            $table->string("lastname", 200);
            $table->string("email", 200);
            $table->string("telefono", 20);
            $table->date("date_birth");
            $table->string("gender", 15)->nullable();
            $table->string("street", 50)->nullable();
            $table->integer("exterior number");
            $table->integer("interior number");
            $table->string("colony")->nullable();
            $table->char("status", 1)->nullable();
            $table->integer("semester")->nullable();
            $table->foreignId('locality_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('role_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('career_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
