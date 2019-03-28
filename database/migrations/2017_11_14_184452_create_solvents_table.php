<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solvents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('grade');
            $table->unsignedInteger('stock');
            $table->unsignedInteger('warning');
            $table->unsignedInteger('priority');
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
        Schema::dropIfExists('solvents');
    }
}
