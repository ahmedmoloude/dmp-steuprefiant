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
        Schema::create('table_data', function (Blueprint $table) {
            $table->id();
            $table->json("config");
            $table->json("data");
            $table->string("on_depend_id");
            $table->unsignedBigInteger('demande_id')->nullable();
            $table->foreign('demande_id')->references('id')->on('demandes')->onDelete('cascade');
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
        Schema::dropIfExists('table_data');
    }
};
