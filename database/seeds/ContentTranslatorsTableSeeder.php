<?php

use Illuminate\Database\Seeder;

class ContentTranslatorsTableSeeder extends Seeder
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
    }
}
