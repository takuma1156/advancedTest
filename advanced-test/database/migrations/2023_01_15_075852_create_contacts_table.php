<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(false);
            $table->string('fullname',255)->nullable(false);
            $table->tinyinteger('gender')->nullable(false);
            $table->string('email',255)->nullable(false);
            $table->char('postcode',8)->nullable(false);
            $table->string('address',255)->nullable(false);
            $table->string('building_name',255);
            $table->text('option',255)->nullable(false);
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
}
