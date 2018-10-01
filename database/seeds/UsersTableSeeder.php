<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            'name' => 'admin',
            'account_type_id' => 1,
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
        ]);

         DB::table('users')->insert([
            'name' => 'treasurer',
            'account_type_id' => 2,
            'email' => 'treasurer@gmail.com',
            'password' => bcrypt('treasurer123'),
        ]);

         DB::table('users')->insert([
            'name' => 'checker',
            'account_type_id' => 3,
            'email' => 'checker@gmail.com',
            'password' => bcrypt('checker123'),
        ]);
    }
}
