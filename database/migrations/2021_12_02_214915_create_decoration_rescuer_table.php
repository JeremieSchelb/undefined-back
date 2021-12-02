<?php

use App\Models\Decoration;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDecorationRescuersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('decoration_rescuers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table-> softDeletes();

            $table->dateTime('datetime');

            $table->foreignId('decoration_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->nullOnDelete();
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
        Schema::dropIfExists('decoration_rescuers');
    }
}
