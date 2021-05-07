<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->float('price', 8, 2);
            $table->string('marca');
            $table->string('modelo');
            $table->integer('status')->default(1);
            $table->string('tag')->nullable();
            $table->string('url_image');
            $table->float('new_price', 8, 2)->nullable();
            $table->integer('installments')->nullable();
            $table->integer('fees')->nullable();
            $table->integer('stars')->nullable();
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
        Schema::dropIfExists('products');
    }
}
