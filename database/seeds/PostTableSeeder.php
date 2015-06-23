<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PostTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('posts')->truncate();
        $posts = [
            [
                'id'            => '1',
                'category_id'   => '3',
                'user_id'       => '1',
                'highlight'     => 'Yes',
                'title'         => 'TKP Chanmari Unit Chanchin',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ], 
            [
                'id'            => '2',
                'category_id'   => '3',
                'user_id'       => '1',
                'highlight'     => 'Yes',
                'title'         => '​2015 HRUAITUTE',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ], 
            [
                'id'            => '3',
                'category_id'   => '3',
                'user_id'       => '1',
                'highlight'     => 'Yes',
                'title'         => '​Contacts',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'id'            => '4',
                'category_id'   => '3',
                'user_id'       => '1',
                'highlight'     => 'Yes',
                'title'         => 'Kohhranpui',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'id'            => '5',
                'category_id'   => '3',
                'user_id'       => '1',
                'highlight'     => 'Yes',
                'title'         => 'Junior TKP',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'id'            => '6',
                'category_id'   => '3',
                'user_id'       => '1',
                'highlight'     => 'Yes',
                'title'         => 'Missionaries',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'id'            => '7',
                'category_id'   => '8',
                'user_id'       => '1',
                'highlight'     => 'Yes',
                'title'         => 'Download Page',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            
        ];

        DB::table('posts')->insert($posts);
    }

}