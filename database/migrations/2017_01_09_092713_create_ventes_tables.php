<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventes', function(Blueprint $vente)
        {
            $vente->increments('id');
            $vente->string('nom');
            $vente->string('description');
            $vente->string('origine');
            $vente->string('etat');
            $vente->string('prix');
            $vente->string('image');
            $vente->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ventes');
    }
}
