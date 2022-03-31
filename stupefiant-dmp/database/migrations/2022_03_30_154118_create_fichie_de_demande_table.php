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
        Schema::create('fichie_de_demandes', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->json("nature_de_element");
            $table->enum('year', ["increment" , "decrement"]);
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
        Schema::dropIfExists('fichie_de_demande');
    }
};
