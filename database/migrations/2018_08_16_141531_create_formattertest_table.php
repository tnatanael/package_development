<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormattertestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formattertest', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date')->nullable();
            $table->dateTime('datetime')->nullable();
            $table->decimal('money', 10, 2)->nullable();
            $table->float('numeric', 10, 4)->nullable();
            $table->boolean('boolean')->nullable();
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
        Schema::dropIfExists('formattertest');
    }
}
