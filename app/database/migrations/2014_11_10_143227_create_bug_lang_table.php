<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBugLangTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bug_lang', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('bug_id')->unsigned()->index();
			$table->foreign('bug_id')->references('id')->on('bugs')->onDelete('cascade');
			$table->integer('lang_id')->unsigned()->index();
			$table->foreign('lang_id')->references('id')->on('langs')->onDelete('cascade');
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
		Schema::drop('bug_lang');
	}

}
