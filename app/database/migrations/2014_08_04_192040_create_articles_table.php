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

            Schema::connection('mysql2')->table('articles', function($table) {
               $table->foreign('content_id')->references('id')->on('test_project_db1.contents');
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
