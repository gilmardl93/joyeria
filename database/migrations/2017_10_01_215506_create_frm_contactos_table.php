<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrmContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frm_contactos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('email');
            $table->string('asunto');
            $table->text('descripcion');
            $table->dateTime('fecha_hora');
            $table->softDeletes();
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
        Schema::dropIfExists('frm_contactos');
    }
}
