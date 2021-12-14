<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creatives', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('title_normal_text');
            $table->string('title_bold_text');
            $table->string('item1_icon');
            $table->string('item1_title');
            $table->text('item1_description');
            $table->string('item2_icon');
            $table->string('item2_title');
            $table->text('item2_description');
            $table->string('item3_icon');
            $table->string('item3_title');
            $table->text('item3_description');
            $table->string('item4_icon');
            $table->string('item4_title');
            $table->text('item4_description');
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
        Schema::dropIfExists('creatives');
    }
}
