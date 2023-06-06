<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContatoTable extends Migration
{

    public function up()
    {
        Schema::create('contato', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable();
            $table->string('email')->unique();
            $table->integer('contato')->unique();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contato');
    }
}
