<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert(
		  [ 
		    [
		      'account_types_id'=>1,
		      'name'=> 'admin',
		      'email' => 'admin@gmail.com',
		      'password' => bcrypt('admin123'),
		    ],[
		      'account_types_id'=>2,
		      'name'=> 'checker',
		      'email' => 'checker@gmail.com',
		      'password' => bcrypt('checker123'),
		    ],[
		      'account_types_id'=>3,
		      'name'=> 'treasurer',
		      'email' => 'treasurer@gmail.com',
		      'password' => bcrypt('treasurer123'),
		    ]
		  ]);
    }
}
