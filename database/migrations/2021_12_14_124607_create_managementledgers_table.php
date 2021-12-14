<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagementledgersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managementledgers', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id')->length(11)->unsigned();
            $table->integer('admin_id')->length(11)->unsigned();
            $table->date('date')->nullable();
            $table->string('particulation')->nullable();
            $table->string('reason')->nullable();
            $table->double('credit',20,2);
            $table->double('debit',20,2);
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
        Schema::dropIfExists('managementledgers');
    }
}
