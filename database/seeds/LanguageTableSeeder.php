<?php

use Illuminate\Database\Seeder;
use App\Language;
class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::create([
            'id' => 'kh',
            'full_word' => 'Khmer',
            'logo' => 'khmer.png',
            'status' => 1,
            'created_by' => 1,
            'updated_by' => 1
        ]);
        
        Language::create([
            'id' => 'en',
            'full_word' => 'English',
            'logo' => 'english.png',
            'status' => 1,
            'created_by' => 1,
            'updated_by' => 1
        ]);
    }
}
