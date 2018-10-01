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
        DB::table('users')->insert([
        	'account_types_id'=>1,
        	'name'=> 'admin',
        ]});

        DB::table('users')->insert([
        	'account_types_id'=>2,
        	'name'=> 'checker',
        ]});

        DB::table('users')->insert([
        	'account_types_id'=>3,
        	'name'=> 'treasurer',
        ]});
    }
}
