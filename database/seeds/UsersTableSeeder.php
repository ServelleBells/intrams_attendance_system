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
         DB::table('users')->insert(
		  [ 
		    [
		      'account_types_id'=>1,
		      'name'=> 'admin',
		      'email' => 'admin@gmail.com',
		      'passsword' => bcrypt('admin123'),
		    ],[
		      'account_types_id'=>2,
		      'name'=> 'checker',
		      'email' => 'checker@gmail.com',
		      'passsword' => bcrypt('checker123'),
		    ],[
		      'account_types_id'=>3,
		      'name'=> 'treasurer',
		      'email' => 'treasurer@gmail.com',
		      'passsword' => bcrypt('treasurer123'),
		    ]
		  ]);
    }
}
