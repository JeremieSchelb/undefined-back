<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boats', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string('name');
            $table->string('type')->nullable();
            $table->string('constructor')->nullable();
            $table->float('length')->nullable();
            $table->float('width')->nullable();
            $table->float('weight')->nullable();
            $table->float('draugth')->nullable();
            $table->date('commisionning')->nullable();
            $table->date('withdraw')->nullable();
            $table->longText('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boats');
    }
}
