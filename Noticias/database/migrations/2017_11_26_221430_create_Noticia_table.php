<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Noticia', function (Blueprint $table) {
            $table->increments('id_Noticia');
$table->string('titular');
$table->string('entrada');
$table->string('cuerpo');
$table->string('imagen');
$table->date('fecha');
$table->integer('id_Categoria');
$table->integer('id_Usuario');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Noticia');
    }
}
