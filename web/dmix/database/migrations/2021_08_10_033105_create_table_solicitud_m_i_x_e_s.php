<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSolicitudMIXES extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_m_i_x_e_s', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('dj');
            $table->date('fecha');
            $table->string('estado');
            $table->string('descripcion',255);
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
        Schema::dropIfExists('solicitud_m_i_x_e_s');
    }
}
