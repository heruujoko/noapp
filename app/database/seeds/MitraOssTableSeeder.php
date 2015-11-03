<?php
	
class MitraOssTableSeeder extends Seeder {

    public function run()
    {
        DB::table('mitra_oss')->delete();

        MitraOss::create(array(
        	'name' => 'PRIMATAMA-PLW'
        ));

        MitraOss::create(array(
            'name' => 'PRIMATAMA-PSO'
        ));

        MitraOss::create(array(
            'name' => 'PRIMATAMA-LWK'
        ));        

        MitraOss::create(array(
            'name' => 'KISEL-TLI'
        ));

        MitraOss::create(array(
            'name' => 'KISEL-PLW'
        ));
    }

}
	
?>