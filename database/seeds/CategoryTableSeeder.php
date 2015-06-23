<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CategoryTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		DB::table('categories')->truncate();
        $categories = [
        	[
        		'id'			=> '1',
            	'name' 			=> 'Article',
            	'created_at' 	=> date('Y-m-d H:i:s'),
            	'updated_at' 	=> date('Y-m-d H:i:s'),
        	],
        	[
        		'id'			=> '2',
            	'name' 			=> 'News - Unit',
            	'created_at' 	=> date('Y-m-d H:i:s'),
            	'updated_at' 	=> date('Y-m-d H:i:s'),
        	],
            [
                'id'            => '3',
                'name'          => 'About Us',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'id'            => '4',
                'name'          => 'Gallery',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'id'            => '5',
                'name'          => 'News - Group',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ], 
            [
                'id'            => '6',
                'name'          => 'News - Jr. TKP',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ], 
            [
                'id'            => '7',
                'name'          => 'News - Kohhranpui',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'id'            => '8',
                'name'          => 'Download',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],   
            [
                'id'            => '9',
                'name'          => 'Programme',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
           
        ];

        DB::table('categories')->insert($categories);
	}

}