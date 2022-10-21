<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school', function (Blueprint $table) {
            $table->id();
            $table->string('lastname');
           $table->string('nom');
           $table->string('email');
           $table->string('naissance');
           $table->string('gender');
           $table->string('lieu');
           $table->string('Niveau_Scolaire');
           $table->string('maladies');
          $table->string('formation_a');
           $table->string('formation_b');
           $table->string('formation_c');
           $table->string('urgence');
          $table->string('paiement');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('school');
    }
};
