<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $action=[
            [
                'username' => 'admin',
                'name' => 'Admin',
                'avatar' => '',
                'email'=>'admin@admin.com',
                'phone'=>'9909999099',
                'password'=>'$2a$04$V/fWLcvQNN8kCeaIQfc/aefJDA1C1w5G7UPzLp3eDN5xuNuIhKheK', //'password'
                'status'=>'1',
            ]
        ];
            DB::table('users')->insert($action);
    }
}
