<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductTable extends Migration {

	public function up()
	{
		Schema::create('product', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('image', 255)->nullable();
		    $table->string('title', 255);
			$table->text('description');
			$table->float('price', 0.00);
			$table->smallInteger('quantity')->default('1');
			$table->string('store', 255)->nullable();
			$table->boolean('brandFree')->default(1);
            $table->integer('category_id')->unsigned()->index();
        });
	}

	public function down()
	{
		Schema::drop('product');
	}
}
