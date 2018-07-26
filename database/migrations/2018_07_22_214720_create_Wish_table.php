<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWishTable extends Migration {

	public function up()
	{
		Schema::create('wish', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('product_id')->unsigned()->index();
			$table->integer('user_id')->unsigned() ->index();
		});
	}

	public function down()
	{
		Schema::drop('wish');
	}
}
