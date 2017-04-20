<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPRProjectConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('PR_project_connections', function(Blueprint $table)
		{
			$table->foreign('person_id', 'fk_PR_project_connections_id_PR_persons1')->references('id')->on('PR_persons')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('project_id', 'fk_PR_project_connections_id_PR_project1')->references('id')->on('PR_project')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('perso_type_id', 'fk_PR_project_connections_id_PR_types1')->references('id')->on('PR_person_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('PR_project_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_PR_project_connections_id_PR_persons1');
			$table->dropForeign('fk_PR_project_connections_id_PR_project1');
			$table->dropForeign('fk_PR_project_connections_id_PR_types1');
		});
	}

}
