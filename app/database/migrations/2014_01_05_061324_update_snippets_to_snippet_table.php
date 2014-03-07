<?php

use Illuminate\Database\Migrations\Migration;

class UpdateSnippetsToSnippetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('snippets', function($table)
		{
			$table->dropColumn('snippets');
			$table->text('snippet');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('snippets', function($table)
		{
			$table->text('snippets');
			$table->dropColumn('snippet');

		});
	}
}
