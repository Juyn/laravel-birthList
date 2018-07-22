<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('Wish', function(Blueprint $table) {
			$table->foreign('product')->references('id')->on('Product')
						->onDelete('cascade')
						->onUpdate('no action');
		});
	}

	public function down()
	{
		Schema::table('Wish', function(Blueprint $table) {
			$table->dropForeign('Wish_product_foreign');
		});
	}
}