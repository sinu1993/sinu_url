<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrltbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urltb', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
			$table->string('title');
			$table->string('url');
			$table->string('short_url');
			$table->string('created_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('urltb');
    }
}
