<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPRClientPersonConectedIdTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('PR_client_person_conected_id', function(Blueprint $table)
		{
			$table->foreign('cllients_id', 'fk_PR_client_person_conected_id_PR_clients')->references('id')->on('PR_clients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('client_person_type_id', 'fk_PR_client_person_conected_id_PR_clients_person_type1')->references('id')->on('PR_clients_person_type')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('person_id', 'fk_PR_client_person_conected_id_PR_persons1')->references('id')->on('PR_persons')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('PR_client_person_conected_id', function(Blueprint $table)
		{
			$table->dropForeign('fk_PR_client_person_conected_id_PR_clients');
			$table->dropForeign('fk_PR_client_person_conected_id_PR_clients_person_type1');
			$table->dropForeign('fk_PR_client_person_conected_id_PR_persons1');
		});
	}

}
