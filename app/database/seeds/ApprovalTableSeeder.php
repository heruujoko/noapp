<?php
	
class ApprovalTableSeeder extends Seeder {

    public function run()
    {
        DB::table('approval_person')->delete();

        ApprovalPerson::create(array(
        	'name' => 'Prasanthy Ganty'
        ));

        ApprovalPerson::create(array(
            'name' => 'Nathaniel Rombo'
        ));

        ApprovalPerson::create(array(
            'name' => 'Fahri'
        ));        

        ApprovalPerson::create(array(
            'name' => 'Ahmad Taufik'
        ));

        ApprovalPerson::create(array(
            'name' => 'Mochammad Faizal'
        ));

        ApprovalPerson::create(array(
            'name' => 'Habibi M. Tau'
        ));        
    }

}
	
?>