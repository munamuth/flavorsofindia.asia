<?php

use Illuminate\Database\Seeder;
use App\IconCategory;
class tblIconCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	['name' => "Brand"],
        	['name' => "Chart"],
        	['name' => "Currency"],
        	['name' => "Directional"],
        	['name' => "File Type"],
        	['name' => "Form"],
        	['name' => "Gender"],
        	['name' => "Hand"],
        	['name' => "Medical"],
        	['name' => "Payment"],
        	['name' => "Spinner"],
        	['name' => "Text"],
        	['name' => "Transpotation"],
        	['name' => "Video"],
        	['name' => "Web Applications"],
        ];
        IconCategory::insert($data);

    }
}
