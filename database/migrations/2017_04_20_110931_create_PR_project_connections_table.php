<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePRProjectConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('PR_project_connections', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->softDeletes();
			$table->string('project_id', 36)->index('fk_PR_project_connections_id_PR_project1_idx');
			$table->string('project_id', 36)->index('fk_PR_project_connections_id_PR_persons1_idx');
			$table->string('perso_type_id', 36)->index('fk_PR_project_connections_id_PR_types1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('PR_project_connections');
	}

}
