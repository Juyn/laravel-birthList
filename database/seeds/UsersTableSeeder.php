<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'xavier',
                'email' => 'juyn89@gmail.com',
                'avatar' => 'users/default.png',
                'password' => '$2y$10$ZuBRKW4iY5KYHVrJvTK8vOyj1mHLMU1jiXtwK93ZULibWs2oP8q9.',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2018-07-24 21:14:40',
                'updated_at' => '2018-07-24 21:14:40',
                'facebook_id' => NULL,
            ),
        ));

        \DB::table('user_roles')->delete();
        \DB::table('user_roles')->insert(array (
            0 =>
            array (
                'user_id' => 1,
                'role_id' => 1,
            ),
        ));
        
        
    }
}