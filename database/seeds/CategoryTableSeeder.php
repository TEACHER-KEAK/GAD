<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'title' => 'CATEGORY1',
            'description' => 'DESCRIPTION1',
            'parent_id' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'status' => true
        ]);
        Category::create([
            'title' => 'CATEGORY2',
            'description' => 'DESCRIPTION2',
            'parent_id' => NULL,
            'created_by' => 1,
            'updated_by' => 1,
            'status' => false
        ]);
    }
}
