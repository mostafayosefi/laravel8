<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Mngfinical;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();



            $table->string('title');
            $table->string('instagram');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('youtube');
            $table->string('tell');
            $table->string('email');

            $table->string('address');
            $table->string('description');
            $table->string('keyword');
            $table->string('fcopy');
            $table->string('analatik');
            $table->string('codetiket');

            $table->string('favicon');
            $table->string('logo');

            $table->string('_token');



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
        Schema::dropIfExists('settings');
    }
}
