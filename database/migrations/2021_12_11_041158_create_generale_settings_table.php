<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneraleSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generale_settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->text('sitetitle');
            $table->text('metatitle');
            $table->text('metadescription');
            $table->longText('metakeyword');
            $table->string('metaauthor');
            $table->string('favicon');
            $table->text('banner_normal_text');
            $table->string('banner_bold_text');
            $table->string('banner_image');
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
        Schema::dropIfExists('generale_settings');
    }
}
