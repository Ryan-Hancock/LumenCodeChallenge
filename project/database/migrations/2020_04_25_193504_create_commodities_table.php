<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommoditiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commodities', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('family_id');
            $table->unsignedBigInteger('segment_id');

            $table->foreign('class_id')
                ->references('id')
                ->on('classification');
            $table->foreign('family_id')
                ->references('id')
                ->on('families');
            $table->foreign('segment_id')
                ->references('id')
                ->on('segments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commondities');
    }
}
