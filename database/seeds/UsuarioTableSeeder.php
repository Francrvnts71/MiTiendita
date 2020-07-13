<?php

use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
        	[
	           	'name' => 'Francia';
	            'email'  => 'francrvnts@gmail.com';
	            'user' => 'francrvnts';
	            'password' => \Hash::make('123456');
	            'tipo' => 'admin';
        	],
        	[
	           	'name' => 'Diego';
	            'email'  => 'diarchavez@gmail.com';
	            'user' => 'diarchavez';
	            'password' => \Hash::make('123456');
	            'tipo' => 'user';
        	]
    	);

    	Usuario::insert($data);
    }
}
