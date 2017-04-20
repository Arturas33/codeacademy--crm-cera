<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePRClientPersonConectedIdTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('PR_client_person_conected_id', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->softDeletes();
			$table->string('cllients_id', 36)->index('fk_PR_client_person_conected_id_PR_clients_idx');
			$table->string('person_id', 36)->index('fk_PR_client_person_conected_id_PR_persons1_idx');
			$table->string('client_person_type_id', 36)->index('fk_PR_client_person_conected_id_PR_clients_person_type1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('PR_client_person_conected_id');
	}

}
