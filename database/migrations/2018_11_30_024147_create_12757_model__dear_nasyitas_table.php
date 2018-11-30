<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create12757ModelDearNasyitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('12757_model__dear_nasyitas', function (Blueprint $table) {
            $table->increments('id_customer');
			$table->string('name');
			$table->string('email');
			$table->string('password');
			$table->string('creditCardNumber');
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
        Schema::dropIfExists('12757_model__dear_nasyitas');
    }
}
