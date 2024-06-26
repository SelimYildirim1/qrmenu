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
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('icon')->nullable();
            $table->string('menu')->nullable();
            $table->text('adress')->nullable();
            $table->string('mail')->nullable();
            $table->string('phone')->nullable();
            $table->string('baslangic_saati')->nullable();
            $table->string('bitis_saati')->nullable();
            $table->text('harita')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configs');
    }
};
