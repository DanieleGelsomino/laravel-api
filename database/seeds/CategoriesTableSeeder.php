<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = ['Lifestyle', 'Travel', 'Food', 'Health', 'Wellness', 'Sport'];

        foreach($categories as $category) {
            $new_category = new Category();
            $new_category-> name = $category;
            $new_category->slug = Str::slug($category);
            $new_category->save();
        }
    }
}
