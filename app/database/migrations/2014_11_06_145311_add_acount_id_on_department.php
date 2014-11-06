<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAcountIdOnDepartment extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('departments', function($table){
			$table->integer('account_id')->unsigned()->after('id');;
			$table->foreign('account_id')
				->references('id')->on('accounts');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('departments', function($table){
			$table->dropForeign('departments_account_id_foreign');
			$table->dropColumn('account_id');
		});
	}

}
