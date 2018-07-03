<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('building_id')->unique();
            $table->string('service_number')->unique();
            $table->integer('building_group')->unsigned();
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('status')->unsigned();
            $table->integer('state')->unsigned();
            $table->timestamps();
        });
        
        Schema::table('buildings', function($table) {
            $table->foreign('building_group')->references('id')->on('building_group')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('state')->references('id')->on('state')
                ->onUpdate('cascade')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buildings');
    }
}
