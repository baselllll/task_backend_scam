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
            $table->unsignedInteger('id', true);
            $table->string('sku', )->unique();
            $table->string('name')->nullable();
            $table->integer('price')->default(0);
            $table->string('size')->nullable();
            $table->string('type')->nullable();
            $table->integer('height')->default(0);
            $table->integer('weight')->default(0);
            $table->integer('length')->default(0);
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
