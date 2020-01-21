<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriacaoTabelaCandidato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('candidatos', function(Blueprint $table){
            $table->increments('id');
            $table->string('nome');
            $table->string('email');
            $table->string('fone');
            $table->text('apresentacao');
            $table->string('linkedIn');
            $table->string('gitHub');
            $table->string('ingles');
            $table->decimal('pretencaoSalarial',10,2);
            $table->string('curriculo');
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
        //
        Schema::drop('candidato');
    }
}
