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
            $table->string("nombre", 30)->nullable();
            $table->string("apellido_paterno", 30)->nullable();
            $table->string("apellido_materno", 30)->nullable();
            $table->string("email", 50)->nullable();
            $table->bigInteger("telefono", 20)->nullable();
            $table->dateT("fecha_nacimiento")->nullable();
            $table->string("sexo", 15)->nullable();
            $table->string("calle", 50)->nullable();
            $table->integer("num_exterior", 10);
            $table->integer("num_interior", 10);
            $table->string("colonia")->nullable();
            $table->char("estatus", 1)->nullable();
            $table->integer("semestre", 11)->nullable();
            $table->foreignId('locality_id')->constrained()->onDele('cascade');
            $table->foreignId('role_id')->constrained()->onDele('cascade');
            $table->foreignId('career_id')->constrained()->onDele('cascade');
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
