<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Post');

        for($i = 1; $i <= 20; $i++){
            DB::table('posts')->insert([
                'title' => $faker->sentence,
                'body' => $faker->paragraph
            ]);
        }
    }
}
