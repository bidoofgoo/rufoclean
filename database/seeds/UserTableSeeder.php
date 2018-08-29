<?php

use Illuminate\Database\Seeder;

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
        DB::table('users')->insert([
          'name' => 'Ron de Roode',
          'is_admin' => true,
          'email' => "ron". '@email.com',
          'password' => bcrypt('password'),
        ]);

    }
}
