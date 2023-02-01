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
        // crer une tableaux
        Schema::create('coffeShops', function (Blueprint $table) {
            // id not null pk AI
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('photo');
            $table->string('prix');
            $table->text('description');
            // date created and updated
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
        //drop table

        Schema::dropIfExists(('coffeShops'));
    }
};
