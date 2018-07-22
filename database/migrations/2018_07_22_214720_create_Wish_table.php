<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWishTable extends Migration {

	public function up()
	{
		Schema::create('Wish', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('product')->unsigned()->index();
		});
	}

	public function down()
	{
		Schema::drop('Wish');
	}
}