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
            $table->timestamps();
            $table->softDeletes();

            $table->foreignId('rescuer_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId("rescue_id")->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId("rescuerrole_id")->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();
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