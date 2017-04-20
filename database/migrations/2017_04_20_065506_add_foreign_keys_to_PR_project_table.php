<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPRProjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('PR_project', function(Blueprint $table)
		{
			$table->foreign('types_id', 'fk_PR_project_PR_projet_types1')->references('id')->on('PR_projet_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('PR_project', function(Blueprint $table)
		{
			$table->dropForeign('fk_PR_project_PR_projet_types1');
		});
	}

}
