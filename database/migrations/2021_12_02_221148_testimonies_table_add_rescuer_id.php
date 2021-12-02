<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TestimoniesTableAddRescuerId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('testimonies', function (Blueprint $table) {
           $table->foreignId('rescuer_id')
               ->constrained()
               ->cascadeOnUpdate()
               ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('testimonies', function(Blueprint $table) {
            $table->dropConstrainedForeignId('rescuer_id');
        });
    }
}
