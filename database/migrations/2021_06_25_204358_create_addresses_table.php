<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string("addressTitle");
            $table->string("country");
            $table->text("streetAddress")-> nullable();
            $table->text("streetAddress2")->nullable();
            $table->string("city")->nullable();
            $table->string("state")->nullable();
            $table->string("zipCode")->nullable();
            $table->string("phoneNumber")->nullable();
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
        Schema::dropIfExists('addresses');
    }
}
