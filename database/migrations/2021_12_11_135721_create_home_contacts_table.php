<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('address_title')->nullable();
            $table->string('address_icon');
            $table->string('email');
            $table->string('email_address')->nullable();
            $table->string('email_icon');
            $table->string('call');
            $table->string('number one')->nullable();
            $table->string('number two')->nullable();
            $table->string('call_icon');
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
        Schema::dropIfExists('home_contacts');
    }
}
