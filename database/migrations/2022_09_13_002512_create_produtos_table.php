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
        //nome
        //valor
        //estoque

        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');//varchar
            $table->decimal('valor');//decimal
            $table->integer('estoque');//int
            $table->timestamps();//created_at | updeted_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
};
