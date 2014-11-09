<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAccountIdOnBranchesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('branches', function($table){
			$table->integer('account_id')->unsigned()->after('id');
			$table->foreign('account_id')
				->references('id')->on('accounts');
			$table->text('address')->after('branch_name');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('branches', function($table){
			$table->dropForeign('branches_account_id_foreign');
			$table->dropColumn(array('account_id','address'));
		});
	}

}
