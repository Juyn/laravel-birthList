<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('wish', function(Blueprint $table) {
			$table->foreign('product_id')->references('id')->on('product')
						->onDelete('cascade')
						->onUpdate('no action');
		});
	}

	public function down()
	{
		Schema::table('wish', function(Blueprint $table) {
			$table->dropForeign('Wish_product_foreign');
		});
	}
}
