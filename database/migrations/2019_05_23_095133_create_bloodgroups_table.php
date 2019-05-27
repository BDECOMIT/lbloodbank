<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBloodgroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bloodgroups', function(Blueprint $table)
		{
			$table->integer('BloodGroupId', true);
			$table->text('BloodGroupName')->nullable();
			$table->dateTime('CreationDate')->default(\DB::raw('CURRENT_TIMESTAMP'));
			$table->boolean('IsActive', 1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bloodgroups');
	}

}
