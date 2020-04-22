<?php

use Illuminate\Database\Seeder;

class admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $arr=[
    		'user_name'=>'admin',
    		'password'=>md5(123),
    		'ghichu'=>'kmin',
    	];
        //
        DB::table('admin')->insert($arr);
    }
}
