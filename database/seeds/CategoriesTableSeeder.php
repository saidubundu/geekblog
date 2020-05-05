<?php

use Illuminate\Database\Seeder;

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
        DB::table('categories')->truncate();

        DB::table('categories')->insert([
            [
                'name' => 'LifeStyle and Fashion',
            ],
            [
                'name' => 'Technology',

            ],
            [
                'name' => 'Sports',
            ],
            [
                'name' => 'Movies',
            ],
            [
                'name' => 'International',
            ],

            [
                'name' => 'Local',
            ],

            [
                'name' => 'Business',
            ],

            [
                'name' => 'Health and Food',
            ],

        ]);

        // update the posts data
        for ($post_id = 1; $post_id <= 30; $post_id++)
        {
            $category_id = rand(1,8);

            DB::table('posts')
                ->where('id', $post_id)
                ->update(['category_id' => $category_id]);
        }
    }
}
