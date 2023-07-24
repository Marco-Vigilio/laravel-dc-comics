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
        Schema::create('fumetti', function (Blueprint $table) {
            $table->id();
            $table->string('title', 60);
            $table->string('description', 255);
            $table->string('thumb', 255);
            $table->float('price')->unsigned();
            $table->string ('series', 60);
            $table->data('sale_date');
            $table->string('type', 60);
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
        Schema::dropIfExists('fumetti');
    }
};
