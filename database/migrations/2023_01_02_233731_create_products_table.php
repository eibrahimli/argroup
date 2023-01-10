<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->text('title')->nullable();
            $table->longText('desc')->nullable();
            $table->text('small_desc')->nullable();
            $table->text('price')->nullable();
            $table->string('main_photo')->nullable();

            $table->unsignedBigInteger('brand_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();

            $table->foreign('category_id')->on('categories')->references('id');
            $table->foreign('brand_id')->on('brands')->references('id');

            $table->text('seo_desc')->nullable();
            $table->string('seo_keys',300)->nullable();

            $table->softDeletes();
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
};
