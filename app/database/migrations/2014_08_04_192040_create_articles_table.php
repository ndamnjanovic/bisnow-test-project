<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (!Schema::connection('mysql2')->hasTable('articles'))
        {
            Schema::connection('mysql2')->create('articles', function($table)
            {
                $table->increments('id');
                $table->integer('content_id')->unsigned();
                $table->string('title');
                $table->text('content');
                $table->timestamps();
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
		Schema::connection('mysql2')->dropIfExists('articles');
	}

}
