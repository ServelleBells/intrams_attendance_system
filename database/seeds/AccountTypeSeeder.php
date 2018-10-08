<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('account_types')->insert(
        [
        	[
        		'id'=>1,
        		'name'=> 'admin'
        	],[
        		'id'=>2,
        		'name'=> 'checker'
        	],[
        		'id'=>3,
        		'name'=> 'treasurer'
        	]
        ]);

    }
}
