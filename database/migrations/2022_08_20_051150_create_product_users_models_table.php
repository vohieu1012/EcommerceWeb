<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductUsersModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_users_models', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->integer('price');
            $table->integer('discount');
            $table->string('description');
            $table->integer('product_id');
            $table->string('image');
            $table->bigInteger('user_id')->unsigned()->index();
            $table->timestamps();
        });
        Schema::table('product_users_models', function (Blueprint $table) {
            $table->foreign('user_id')
            ->references('id')
            ->on('register_models');
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
        Schema::dropIfExists('product_users_models');
    }
}
