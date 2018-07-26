<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('category')->delete();

        \DB::table('category')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'created_at' => '2018-07-24 21:21:13',
                    'updated_at' => '2018-07-24 21:21:13',
                    'name' => 'Jouets',
                    'keywords' => 'jouet éveil peluche nounours',
                    'visible' => 1,
                ),
        ));


        \DB::table('product')->delete();

        \DB::table('product')->insert(array (
            0 =>
                [
                    'id' => 1,
                    'created_at' => '2018-07-24 21:21:00',
                    'updated_at' => '2018-07-24 21:23:03',
                    'image' => 'dada',
                    'title' => 'dada',
                    'description' => 'dadada',
                    'price' => 0.0,
                    'quantity' => 5,
                    'store' => NULL,
                    'brandFree' => 1,
                    'category' => 1,
                ],
            1 =>
                [
                    'id' => 2,
                    'created_at' => '2018-07-24 21:21:00',
                    'updated_at' => '2018-07-24 21:23:03',
                    'image' => 'dada',
                    'title' => 'dada',
                    'description' => 'dadada',
                    'price' => 0.0,
                    'quantity' => 5,
                    'store' => NULL,
                    'brandFree' => 1,
                    'category' => 1,
                ],
            2 =>
                [
                    'id' => 3,
                    'created_at' => '2018-07-24 21:21:00',
                    'updated_at' => '2018-07-24 21:23:03',
                    'image' => 'dada',
                    'title' => 'dada',
                    'description' => 'dadada',
                    'price' => 0.0,
                    'quantity' => 5,
                    'store' => NULL,
                    'brandFree' => 1,
                    'category' => 1,
                ],
        ));

        \DB::table('wish')->delete();

        \DB::table('wish')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'created_at' => '2018-07-24 21:25:33',
                    'updated_at' => '2018-07-24 21:25:33',
                    'product_id' => 1,
                    'user_id' => 1,
                ),
        ));

    }
}
