<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoryDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (!Schema::hasTable('story_data'))
        {
            Schema::create('story_data', function($table)
            {
                $table->increments('id');
                $table->integer('story_id')->unsigned();
                $table->string('type');
                $table->string('value');
                $table->timestamps();
            });

            Schema::table('story_data', function($table) {
               $table->foreign('story_id')->references('id')->on('stories');
            });
        }
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('story_data');
	}

}
