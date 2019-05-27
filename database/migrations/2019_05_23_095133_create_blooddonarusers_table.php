<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlooddonarusersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blooddonarusers', function(Blueprint $table)
		{
			$table->integer('BloodDonarId', true);
			$table->text('FirstName')->nullable();
			$table->text('LastName')->nullable();
			$table->text('Username')->nullable();
			$table->text('Email')->nullable();
			$table->binary('PasswordHash')->nullable();
			$table->binary('PasswordSalt')->nullable();
			$table->text('MobileNumber')->nullable();
			$table->text('Gender')->nullable();
			$table->dateTime('DateOfBirth');
			$table->integer('BloodGroupId');
			$table->integer('CountryId')->index('CountryID');
			$table->integer('CityId')->default(0)->index('CityID');
			$table->integer('LocationId')->index('LocationID');
			$table->dateTime('CreationDate')->default(\DB::raw('CURRENT_TIMESTAMP'));
			$table->boolean('IsActive');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('blooddonarusers');
	}

}
