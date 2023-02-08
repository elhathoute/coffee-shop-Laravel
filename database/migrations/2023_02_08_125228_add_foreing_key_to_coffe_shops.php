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
        Schema::table('coffeshops', function (Blueprint $table) {
            $table->unsignedBigInteger('type_plat')->nullable();//allow null value to insert in foreing key
            $table->foreign('type_plat')->references('id')->on('types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('coffeshops', function (Blueprint $table) {
            $table->dropForeign('type_plat');
            $table->dropColumn('type_plat');
        });
    }
};
