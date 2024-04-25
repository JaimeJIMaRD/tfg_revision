<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('serie');
            $table->string('actor_original')->nullable();
            $table->text('muestra')->nullable();
            $table->string('imagen_logo')->nullable();
            $table->string('imagen_fondo')->nullable();
            $table->unsignedBigInteger('actor_id');
            $table->foreign('actor_id')->references('id')->on('actor');
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
        Schema::dropIfExists('admin');
    }
};
