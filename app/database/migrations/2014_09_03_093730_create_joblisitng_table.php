<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJoblisitngTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('joblistings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('employer_id')->unsigned();
			$table->string('title');
			$table->decimal('wage', 6, 2);
			$table->string('location');
			$table->string('area');
			$table->string('category');
			$table->string('subcategory');
			$table->string('start');
			$table->string('type');
			$table->string('description');
			$table->string('keywords');
			$table->timestamps();

			$table->foreign('employer_id')->references('id')->on('employers');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
