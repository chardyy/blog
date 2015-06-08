<?php
 
class UserTableSeeder extends Seeder {
 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('users')->delete();
 
        User::create(array(
 
            'first_name'    => 'Richard',
            'last_name'     => 'Orofeo',
            'email'         => 'rborofeo@email.com',
            'username'      => 'admin',
            'password'      => Hash::make('password')
 
        ));
 
    }
 
}