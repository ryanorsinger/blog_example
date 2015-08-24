<?php

use Faker\Factory as Faker;

class PostsSeeder extends Seeder {

    public function run()
    {

        $faker = Faker::create();

        // delete all existing posts
        Post::truncate();

        for($i=0; $i<50000; $i++) {
            $post = new Post();
            $post->title = $faker->catchPhrase;
            $post->body = $faker->bs . ' and International' . $faker->bs;
            $post->save();
        }

    }
}
