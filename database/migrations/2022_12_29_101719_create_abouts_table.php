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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('small_desc')->nullable();
            $table->longText('desc')->nullable();
            $table->string('video')->nullable();

            $table->double('closed_projects')->nullable();
            $table->double('happy_clients')->nullable();
            $table->double('partners')->nullable();
            $table->double('rewards')->nullable();

            $table->string('logo');
            $table->string('banner')->comment('1920x766 px meslehet gorulur');

            $table->string('seo_keys',500)->nullable();
            $table->string('seo_desc',500)->nullable();

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
        Schema::dropIfExists('abouts');
    }
};
