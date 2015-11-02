<?php
	
class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
        	'uname' => 'heruujoko',
        	'password' => Hash::make('12345'),
        	'status' => 'admin'
        ));
    }

}
	
?>