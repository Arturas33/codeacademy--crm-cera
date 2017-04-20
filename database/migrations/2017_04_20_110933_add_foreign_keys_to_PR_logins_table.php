<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPRLoginsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('PR_logins', function(Blueprint $table)
		{
			$table->foreign('login_name_id', 'fk_PR_logins_PR_login_name1')->references('id')->on('PR_login_name')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('PR_logins', function(Blueprint $table)
		{
			$table->dropForeign('fk_PR_logins_PR_login_name1');
		});
	}

}
