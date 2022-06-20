<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locals', function (Blueprint $table) {
            $table->id();
            $table->string('razon_social', 120);
            $table->string('direccion', 60);
            $table->string('telefono_fijo', 20);
            $table->string('telefono_movil', 20);
            $table->string('correo_electronico', 60);
            $table->string('identificacion', 45);
            
            //
            $table->unsignedBigInteger('id_tipo_id_comercials');
            $table->foreign('id_tipo_id_comercials')->references('id')->on('tipo_id_comercials')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locals');
    }
};
