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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('title',500)->nullable();
            $table->string('smallTitle',500)->nullable();
            $table->text('desc')->nullable();
            $table->string('address')->nullable();
            $table->string('banner',500)->nullable();
            $table->string('email',255)->nullable();
            $table->string('numbers',255)->nullable();

            $table->string('seo_keys',500)->nullable();
            $table->string('seo_desc',500)->nullable();

            $table->string('fb',255)->nullable();
            $table->string('wp',255)->nullable();
            $table->string('ln',255)->nullable();
            $table->string('yt',255)->nullable();
            $table->string('in',255)->nullable();

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
        Schema::dropIfExists('contacts');
    }
};
