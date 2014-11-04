<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('accounts', function($table){
			$table->dropColumn(array('email', 'password', 'active'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('accounts', function($table){
			$table->string('email')->after('domain');
			$table->unique('email');
			$table->string('password')->after('email');
			$table->boolean('active')->after('password');
		});
	}

}
