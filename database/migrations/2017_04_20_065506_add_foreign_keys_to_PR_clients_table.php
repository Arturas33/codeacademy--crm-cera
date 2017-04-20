<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPRClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('PR_clients', function(Blueprint $table)
		{
			$table->foreign('project_id', 'fk_PR_clients_PR_project1')->references('id')->on('PR_project')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('PR_clients', function(Blueprint $table)
		{
			$table->dropForeign('fk_PR_clients_PR_project1');
		});
	}

}
