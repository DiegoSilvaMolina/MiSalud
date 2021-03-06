<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichaPacientesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha_pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('fk_paciente');
            $table->foreign('fk_paciente')->references('id')->on('pacientes')->onUpdate('cascade')->onDelete ('cascade') ;
            $table->date('fecha');
            $table->time('hora_inicio');
            $table->string('doctor');
            $table->string('especialidad');
            $table->text('diagnostico');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ficha_pacientes');
    }
}
