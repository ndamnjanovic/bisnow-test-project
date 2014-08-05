<?php

class DatabaseSeeder extends Seeder {

    /**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('ContentTableSeeder');
        $this->call('StoryTableSeeder');
        $this->call('StoryDataTableSeeder');
        $this->call('ArticleTableSeeder');
	}

}
