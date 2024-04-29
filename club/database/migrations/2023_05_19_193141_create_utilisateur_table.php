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
        Schema::create('utilisateur', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('adherent_id')->nullable();
            $table->string('nom');
            $table->string('prenom');
            $table->string('ville');
            $table->string('telephone');
            $table->string('cin');
            $table->string('carte');
            $table->string('email');
            $table->timestamps();
    
            $table->foreign('adherent_id')->references('id_adherent')->on('adherents');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateur');
    }
};
