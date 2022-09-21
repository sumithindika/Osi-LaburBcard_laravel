<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAudioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('sub_category_id');
            $table->string('url');
            $table->mediumText('heading_name');
            $table->mediumText('description')->nullable();
            $table->string('mp3url')->nullable();
            $table->string('image_path')->nullable();
            $table->tinyInteger('status')->default('0')->nullable();
            $table->tinyInteger('new_arrival_products')->default('0')->nullable();
            $table->tinyInteger('populer_products')->default('0')->nullable();
            $table->tinyInteger('old_products')->default('0')->nullable();
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
        Schema::dropIfExists('audio');
    }
}
