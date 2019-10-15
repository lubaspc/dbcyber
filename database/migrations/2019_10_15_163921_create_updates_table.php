<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('updates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedDecimal('budget')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('fk_id_work');
            $table->unsignedBigInteger('fk_id_repair');
            $table->foreign('fk_id_work')->on('works')->references('id');
            $table->foreign('fk_id_repair')->on('repairs')->references('id');
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
        Schema::dropIfExists('updates');
    }
}
