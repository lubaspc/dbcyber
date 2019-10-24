<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('works', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('date_estimated')->nullable();
            $table->unsignedInteger('status')->default(1);
            $table->dateTime('date_delivery')->nullable();
            $table->unsignedDecimal('cost_total')->nullable();
            $table->unsignedBigInteger('fk_id_client');
            $table->unsignedBigInteger('fk_id_user');
            $table->unsignedBigInteger('fk_id_product');
            $table->boolean('active')->default(1);
            $table->foreign('fk_id_client')->on('clients')->references('id');
            $table->foreign('fk_id_user')->on('users')->references('id');
            $table->foreign('fk_id_product')->on('products')->references('id');
            $table->timestamps();
        });

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
        Schema::dropIfExists('works');
    }
}
