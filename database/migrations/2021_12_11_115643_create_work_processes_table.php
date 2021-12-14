<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_processes', function (Blueprint $table) {
            $table->id();
            $table->string('section_title');
            $table->string('section_description');
            $table->string('work_item_title1');
            $table->string('work_item_desc1');
            $table->string('work_item_icon1');
            $table->string('work_item_title2');
            $table->string('work_item_desc2');
            $table->string('work_item_icon2');
            $table->string('work_item_title3');
            $table->string('work_item_desc3');
            $table->string('work_item_icon3');
            $table->string('work_item_title4');
            $table->string('work_item_desc4');
            $table->string('work_item_icon4');
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
        Schema::dropIfExists('work_processes');
    }
}
