<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBlooddonarusersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('blooddonarusers', function(Blueprint $table)
		{
			$table->foreign('CityId', 'DonorsCityID')->references('CityId')->on('cities')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('CountryId', 'DonorsCountryID')->references('CountryId')->on('countries')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('LocationId', 'DonorsLocationID')->references('LocationId')->on('locations')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('BloodGroupId', 'DonorsBloodGroupID')->references('BloodGroupId')->on('bloodgroups')->onUpdate('RESTRICT')->onDelete('RESTRICT');

        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('blooddonarusers', function(Blueprint $table)
		{
			$table->dropForeign('DonorsCityID');
			$table->dropForeign('DonorsCountryID');
            $table->dropForeign('DonorsLocationID');
            $table->dropForeign('DonorsBloodGroupID');
		});
	}

}
