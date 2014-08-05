<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (!Schema::hasTable('stories'))
        {
            Schema::create('stories', function($table)
            {
                $table->increments('id');
                $table->integer('content_id')->unsigned();
                $table->string('title');
                $table->text('content');
                $table->timestamps();
            });

            Schema::table('stories', function($table) {
               $table->foreign('content_id')->references('id')->on('contents');
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
		Schema::dropIfExists('stories');
	}

}
