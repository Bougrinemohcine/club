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
    Schema::create('adherents', function (Blueprint $table) {
        $table->bigIncrements('id_adherent');
        $table->string('nom');
        $table->string('prenom');
        $table->string('ville');
        $table->string('telephone');
        $table->string('cin');
        $table->string('carte');
        $table->string('email');
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
        Schema::dropIfExists('adherents');
    }
};
