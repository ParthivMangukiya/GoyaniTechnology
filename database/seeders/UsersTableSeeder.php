<?php

namespace Database\Seeders;

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
                'name' => 'Admin',
                'email' => 'parthivm20@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$KQU2yjYotMczSL6.W4m03uhGl9yvQ98Ul1hnlu8RhO1Zk3/JBpPC6',
                'remember_token' => 'nC6zM4vax6PyxzhpyQELyNNKVT23PbYeUk7X0LTwXqygzvvfmRaQk7dXYNzR',
                'settings' => NULL,
                'created_at' => '2021-05-16 06:06:27',
                'updated_at' => '2021-05-16 06:06:27',
            ),
        ));
        
        
    }
}