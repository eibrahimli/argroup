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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title',1000)->nullable();
            $table->string('main_photo')->nullable()->comment('700x500 məsləhət görülür');;
            $table->string('photo')->nullable()->comment('1000x600 məsləhət görülür');

            $table->text('small_desc')->nullable();
            $table->longText('desc')->nullable();

            $table->string('seo_keys',1000)->nullable();
            $table->string('seo_desc',1000)->nullable();

            $table->unsignedBigInteger('service_category_id')->nullable();
            $table->foreign('service_category_id')->on('service_categories')->references('id');

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
        Schema::dropIfExists('services');
    }
};
