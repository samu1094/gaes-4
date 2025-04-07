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
        Schema::create('res_ambiente', function (Blueprint $table) {
            $table->increments('cod_amb');
            $table->string('nom_amb', 35)->unique();
            $table->integer('capacidad_amb');
            $table->integer('piso_amb');
            
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('res_ambiente');
    }
};
