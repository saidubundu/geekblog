<?php

use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('posts')->truncate();

        $posts= [];
        $faker = Factory::create();
        $date = Carbon::create(2020, 3,18, 9);

        for($i = 1; $i <= 50; $i++){
            $image = "post-img-" . rand(1,27) . ".jpg";
            $date->addDays(1);
            $publishedDate = clone($date);
            $createdDate = clone ($date);
            $posts[]=[
                'user_id' => rand(1,3),
                'title' => $faker->sentence(rand(8, 12)),
                'body' => $faker->paragraph(rand(40, 80), true),
                'image' =>  $image,
                'created_at' => $createdDate,
                'updated_at' => $createdDate,
                'published_at' => $i > 5 ? $publishedDate : ( rand(0,1) == 0 ? NULL : $publishedDate->addDays(+4)),
                'view_count' => rand(1,10) *10,
                'category_id' => rand(1,8)
            ];
        }

        DB::table('posts')->insert($posts);
    }
}
