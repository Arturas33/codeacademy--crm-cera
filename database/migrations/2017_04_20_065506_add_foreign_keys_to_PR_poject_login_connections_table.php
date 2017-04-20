<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPRPojectLoginConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('PR_poject_login_connections', function(Blueprint $table)
		{
			$table->foreign('login_id', 'fk_PR_poject_login_connections_PR_logins1')->references('id')->on('PR_logins')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('project_id', 'fk_PR_poject_login_connections_PR_project1')->references('id')->on('PR_project')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('PR_poject_login_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_PR_poject_login_connections_PR_logins1');
			$table->dropForeign('fk_PR_poject_login_connections_PR_project1');
		});
	}

}
