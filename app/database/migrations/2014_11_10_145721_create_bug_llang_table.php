<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBugLlangTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bug_llang', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('bug_id')->unsigned()->index();
			$table->foreign('bug_id')->references('id')->on('bugs')->onDelete('cascade');
			$table->integer('llang_id')->unsigned()->index();
			$table->foreign('llang_id')->references('id')->on('llangs')->onDelete('cascade');
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
		Schema::drop('bug_llang');
	}

}
