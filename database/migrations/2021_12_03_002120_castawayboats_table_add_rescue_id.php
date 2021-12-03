<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CastawayboatsTableAddRescueId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('castawayboats', function (Blueprint $table) {
           $table->foreignId('rescue_id')
               ->nullable()
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
        Schema::table('castawayboats', function (Blueprint $table) {
            $table->dropConstrainedForeignId('rescue_id');
        });
    }
}
