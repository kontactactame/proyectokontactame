<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Agregacolumnascines extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cines', function (Blueprint $table) {
           $table->string('estados',40);
		   $table->string('municipios',40);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cines', function (Blueprint $table) {
          $table->dropColumn('estados');
	      $table->dropColumn('municipios');
        });
    }
}
