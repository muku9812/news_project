<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' =>'खेलकुद',
           'rank' => '1',
           ' slug'=>'खेलकुद',
           'status' => '1',
           'created_by' =>'1',
        ]);
        Category::create([
            'name' =>'अन्तर्राष्ट्रिय',
            'rank' => '1',
            ' slug'=>'अन्तर्राष्ट्रिय',
            'status' => '1',
            'created_by' =>'1',
        ]);
        Category::create([
            'name' =>'मनोरञ्जन',
            'rank' => '1',
            ' slug'=>'मनोरञ्जन',
            'status' => '1',
            'created_by' =>'1',
        ]);
        Category::create([
            'name' =>'राजनीति',
            'rank' => '1',
            ' slug'=>'राजनीति',
            'status' => '1',
            'created_by' =>'1',
        ]);

        Category::create([
            'name' =>'बैंकिंग',
            'rank' => '1',
            ' slug'=>'बैंकिंग',
            'status' => '1',
            'created_by' =>'1',
        ]);
        Category::create([
            'name' =>'शिक्षा',
            'rank' => '1',
            ' slug'=>'शिक्षा',
            'status' => '1',
            'created_by' =>'1',
        ]);

        Category::create([
            'name' =>'सेयर बजार',
            'rank' => '1',
            ' slug'=>'सेयर-बजार',
            'status' => '1',
            'created_by' =>'1',
        ]);

        Category::create([
            'name' =>'इन्स्योरेन्स',
            'rank' => '1',
            ' slug'=>'इन्स्योरेन्स',
            'status' => '1',
            'created_by' =>'1',
        ]);

        Category::create([
            'name' =>'उधोग',
            'rank' => '1',
            ' slug'=>'उधोग',
            'status' => '1',
            'created_by' =>'1',
        ]);

        Category::create([
            'name' =>'अन्य',
            'rank' => '1',
            ' slug'=>'अन्य',
            'status' => '1',
            'created_by' =>'1',
        ]);


    }
}
