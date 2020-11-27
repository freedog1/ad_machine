<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            //広告名、性別、年齢、八地方区分
            $table->string('ad_name',40);
            $table->boolean('gender');
            $table->tinyInteger('age');
            $table->string('region',40);
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
        Schema::dropIfExists('ad_forms');
    }
}
