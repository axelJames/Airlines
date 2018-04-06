<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

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
            'email' => 'jude@judy.com',
            'name' => 'jude',
            'password' => bcrypt('abc'),
        ]);
        \Bouncer::allow('customer')->to('view', \App\Airport::class);
    	
        $cust = User::where('email', 'jude@judy.com')->first();
        $cust->assign('customer');
    }
}
