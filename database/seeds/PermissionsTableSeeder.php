<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2018-07-24 21:14:22',
                'updated_at' => '2018-07-24 21:14:22',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2018-07-24 21:14:22',
                'updated_at' => '2018-07-24 21:14:22',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2018-07-24 21:14:22',
                'updated_at' => '2018-07-24 21:14:22',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2018-07-24 21:14:22',
                'updated_at' => '2018-07-24 21:14:22',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2018-07-24 21:14:22',
                'updated_at' => '2018-07-24 21:14:22',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2018-07-24 21:14:22',
                'updated_at' => '2018-07-24 21:14:22',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2018-07-24 21:14:22',
                'updated_at' => '2018-07-24 21:14:22',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2018-07-24 21:14:22',
                'updated_at' => '2018-07-24 21:14:22',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2018-07-24 21:14:22',
                'updated_at' => '2018-07-24 21:14:22',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2018-07-24 21:14:22',
                'updated_at' => '2018-07-24 21:14:22',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2018-07-24 21:14:22',
                'updated_at' => '2018-07-24 21:14:22',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2018-07-24 21:14:22',
                'updated_at' => '2018-07-24 21:14:22',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2018-07-24 21:14:22',
                'updated_at' => '2018-07-24 21:14:22',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2018-07-24 21:14:22',
                'updated_at' => '2018-07-24 21:14:22',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2018-07-24 21:14:22',
                'updated_at' => '2018-07-24 21:14:22',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2018-07-24 21:14:22',
                'updated_at' => '2018-07-24 21:14:22',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2018-07-24 21:14:22',
                'updated_at' => '2018-07-24 21:14:22',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2018-07-24 21:14:22',
                'updated_at' => '2018-07-24 21:14:22',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2018-07-24 21:14:22',
                'updated_at' => '2018-07-24 21:14:22',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2018-07-24 21:14:22',
                'updated_at' => '2018-07-24 21:14:22',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2018-07-24 21:14:22',
                'updated_at' => '2018-07-24 21:14:22',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2018-07-24 21:14:22',
                'updated_at' => '2018-07-24 21:14:22',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2018-07-24 21:14:22',
                'updated_at' => '2018-07-24 21:14:22',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2018-07-24 21:14:22',
                'updated_at' => '2018-07-24 21:14:22',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2018-07-24 21:14:22',
                'updated_at' => '2018-07-24 21:14:22',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2018-07-24 21:14:22',
                'updated_at' => '2018-07-24 21:14:22',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'browse_category',
                'table_name' => 'category',
                'created_at' => '2018-07-24 21:15:00',
                'updated_at' => '2018-07-24 21:15:00',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'read_category',
                'table_name' => 'category',
                'created_at' => '2018-07-24 21:15:00',
                'updated_at' => '2018-07-24 21:15:00',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'edit_category',
                'table_name' => 'category',
                'created_at' => '2018-07-24 21:15:00',
                'updated_at' => '2018-07-24 21:15:00',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'add_category',
                'table_name' => 'category',
                'created_at' => '2018-07-24 21:15:00',
                'updated_at' => '2018-07-24 21:15:00',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'delete_category',
                'table_name' => 'category',
                'created_at' => '2018-07-24 21:15:00',
                'updated_at' => '2018-07-24 21:15:00',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'browse_product',
                'table_name' => 'product',
                'created_at' => '2018-07-24 21:15:07',
                'updated_at' => '2018-07-24 21:15:07',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'read_product',
                'table_name' => 'product',
                'created_at' => '2018-07-24 21:15:07',
                'updated_at' => '2018-07-24 21:15:07',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'edit_product',
                'table_name' => 'product',
                'created_at' => '2018-07-24 21:15:07',
                'updated_at' => '2018-07-24 21:15:07',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'add_product',
                'table_name' => 'product',
                'created_at' => '2018-07-24 21:15:07',
                'updated_at' => '2018-07-24 21:15:07',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'delete_product',
                'table_name' => 'product',
                'created_at' => '2018-07-24 21:15:07',
                'updated_at' => '2018-07-24 21:15:07',
            ),
            36 => 
            array (
                'id' => 42,
                'key' => 'browse_wish',
                'table_name' => 'wish',
                'created_at' => '2018-07-24 21:30:35',
                'updated_at' => '2018-07-24 21:30:35',
            ),
            37 => 
            array (
                'id' => 43,
                'key' => 'read_wish',
                'table_name' => 'wish',
                'created_at' => '2018-07-24 21:30:35',
                'updated_at' => '2018-07-24 21:30:35',
            ),
            38 => 
            array (
                'id' => 44,
                'key' => 'edit_wish',
                'table_name' => 'wish',
                'created_at' => '2018-07-24 21:30:35',
                'updated_at' => '2018-07-24 21:30:35',
            ),
            39 => 
            array (
                'id' => 45,
                'key' => 'add_wish',
                'table_name' => 'wish',
                'created_at' => '2018-07-24 21:30:35',
                'updated_at' => '2018-07-24 21:30:35',
            ),
            40 => 
            array (
                'id' => 46,
                'key' => 'delete_wish',
                'table_name' => 'wish',
                'created_at' => '2018-07-24 21:30:35',
                'updated_at' => '2018-07-24 21:30:35',
            ),
        ));
        
        
    }
}