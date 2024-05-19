<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 255);
            $table->foreignId('autor_id')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->string('categoria_id')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->date('ano_publicacao');
            $table->string('isbn');
            $table->integer('quantidade_total')
                ->nullable();
            $table->integer('quantidade_disponivel')
                ->nullable();
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
        Schema::dropIfExists('livros');
    }
}
