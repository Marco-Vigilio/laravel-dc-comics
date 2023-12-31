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
        Schema::create('helpers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('super_hero_id');
            $table->string("name", 60);
            $table->timestamps();

            $table->foreign('super_hero_id')
                ->references('id')
                ->on('superheros')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            //stessa cosa di sopra
            //$table->foreignId('superhero_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('helpers');
    }
};
