<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAccountIdOnItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('items', function($table){
			$table->integer('account_id')->unsigned()->after('id');
			$table->foreign('account_id')
				->references('id')->on('accounts');

			$table->integer('department_id')->unsigned()->after('description');
			$table->foreign('department_id')
				->references('id')->on('departments');

			$table->integer('category_id')->unsigned()->after('department_id');
			$table->foreign('category_id')
				->references('id')->on('categories');

			$table->decimal('price', 10, 2)->after('category_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('items', function($table){
			$table->dropForeign('items_account_id_foreign');
			$table->dropForeign('items_department_id_foreign');
			$table->dropForeign('items_category_id_foreign');
			$table->dropColumn(array('account_id', 'department_id', 'category_id', 'price'));
		});
	}
}
