<?php

use Illuminate\Database\Seeder;
use App\Content;

class ContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Content::create([
            'title' => 'TITLE1',
            'content' => 'CONTENT1',
            'images' => '[{}]',
            'category_id' => '1',
            'visitor_count' => '0',
            'created_by' => '2',
            'updated_by' => '2',
            'status' => '1'
        ]);
        Content::create([
            'title' => 'TITLE2',
            'content' => 'CONTENT2',
            'images' => '[{}]',
            'category_id' => '1',
            'visitor_count' => '0',
            'created_by' => '2',
            'updated_by' => '2',
            'status' => '1'
        ]);
    }
}
