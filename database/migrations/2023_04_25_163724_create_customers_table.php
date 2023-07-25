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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('razon_social');
            $table->boolean('status')->default(1);
            $table->string('ruc');
            $table->string('rubro');
            $table->string('pagina_web');
            $table->string('direccion');
            $table->string('departamento_id');
            $table->string('provincia_id');
            $table->string('distrito_id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('tipo_doc');
            $table->integer('number_doc');
            $table->integer('telefono');
            $table->string('correo');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
