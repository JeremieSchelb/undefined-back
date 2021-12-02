<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRescuerRescuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rescuerRescues', function (Blueprint $table) {
            $table->id();

            $table->foreignId('rescuer')->nullable();
            $table->foreign('rescuers_id')->references('id')->on('rescuer')->cascadeOnUpdate()->nullOnDelete();

            $table->foreignId("rescue")->nullable();
            $table->foreign("rescues_id")->references("id")->on("rescuer")->cascadeOnUpdate()->nullOnDelete();

            $table->foreignId("rescuerRole")->nullable();
            $table->foreign("rescuerRoles_id")->references("id")->on("rescuerRole")->cascadeOnUpdate()->nullOnDelete();

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
        Schema::dropIfExists('rescuerRescue');
    }
}
