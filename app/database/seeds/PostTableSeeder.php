<?php

class PostTableSeeder extends Seeder {

    public function run()
    {
        $user = User::all()->random();

        $post1 = new Post;
        $post1->title = 'New Title';
        $post1->description = 'Some body content';
        $post1->user_id = $user->id;
        $post1->save();

        $user = User::all()->random();

        $post2 = new Post;
        $post2->title = 'New Title';
        $post2->description = 'Some other body content';
        $post2->user_id = $user->id;
        $post2->save();

        $user = User::all()->random();

        $post3 = new Post;
        $post3->title = 'New Title';
        $post3->description = 'Some more body content';
        $post3->user_id = $user->id;
        $post3->save();

        $user = User::all()->random();

        $post4 = new Post;
        $post4->title = 'New Title';
        $post4->description = 'Some body content other';
        $post4->user_id = $user->id;
        $post4->save();

        $user = User::all()->random();

        $post5 = new Post;
        $post5->title = 'New Title';
        $post5->description = 'Some body content other than more';
        $post5->user_id = $user->id;
        $post5->save();

    }
}