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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string("name", 200);
            $table->char("reticule", 2);
            $table->string("level", 200);
            $table->string("official_key", 200);
            $table->string("shortened_name", 10);
            $table->integer("maximum_load");
            $table->integer("total_credits");
            $table->string("modality", 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
