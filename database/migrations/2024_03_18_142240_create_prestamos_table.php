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
        Schema::create('prestamos', function (Blueprint $table) {
            $table->increments('id');
            $table->usingnedBigInteger('user_id');
            $table->usingnedBigInteger('book_id');
            $table->timestamp('fecha_prestamo')->nullable();
            $table->timestamp('fecha_devolucion')->nullable();
            $table->timestamps();
            //definir clave foranea
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('book_id')->references('id')->on('libros')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestamos');
    }
};
