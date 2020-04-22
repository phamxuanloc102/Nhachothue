<?php

use Illuminate\Database\Seeder;

class member extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$arr=[
    		'user_name'=>'admin',
    		'password'=>md5(123),
    		'ghichu'=>'kmin',
    	];
        //
        DB::table('number')->insert($arr);
    }
}
