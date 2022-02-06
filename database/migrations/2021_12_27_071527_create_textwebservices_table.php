<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTextwebservicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('textwebservices', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->mediumText('text');
            $table->string('url');
            $table->string('link');
            $table->bigInteger('categoryapi_id')->unsigned()->index();
            $table->timestamps();


            $table->foreign('categoryapi_id')->references('id')->on('categoryapis')->onDelete('cascade')->onUpdate('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('textwebservices');
    }
}
