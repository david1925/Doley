<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExceptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $current_timestamp = "CURRENT_TIMESTAMP";
        Schema::create('exceptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('exception');
            $table->string('class');
            $table->string('method');
            $table->timestamp()->deafult($current_timestamp);      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exceptions');
    }
}
