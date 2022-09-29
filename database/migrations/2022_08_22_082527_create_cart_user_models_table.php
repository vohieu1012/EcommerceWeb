<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartUserModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_user_models', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->string('user_name');
            $table->timestamps();
        });
        Schema::table('cart_user_models', function (Blueprint $table) {
            $table->foreign('user_id')
            ->references('cart_id')
            ->on('cart_products');
            // ->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_user_models');
    }
}
