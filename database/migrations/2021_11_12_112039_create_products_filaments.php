<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsFilaments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_filaments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('product_id')->unsigned()->nullable();
            $table->foreign('product_id')
                ->references('id')
                ->on('products');
            $table->integer('filament_id')->unsigned()->nullable();
            $table->foreign('filament_id')
                ->references('id')
                ->on('filaments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_filaments');
    }
}
