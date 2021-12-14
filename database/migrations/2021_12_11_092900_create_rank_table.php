<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRankTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rank', function (Blueprint $table) {
            $table->id();
            $table->string('rank_section_normal_title');
            $table->string('rank_section_bold_title');
            $table->string('rank1_circle_text');
            $table->json('rank1_item_text');
            $table->json('rank1_item_icon');
            $table->string('rank2_circle_text');
            $table->json('rank2_item_text');
            $table->json('rank2_item_icon');
            $table->string('rank3_circle_text');
            $table->json('rank3_item_text');
            $table->json('rank3_item_icon');
            $table->string('rank4_circle_text');
            $table->json('rank4_item_text');
            $table->json('rank4_item_icon');
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
        Schema::dropIfExists('ranks');
    }
}
