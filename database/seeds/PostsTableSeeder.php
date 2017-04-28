<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Models\Post();
        $post->title = 'Guys... Theres still massive protests in Venezuela. It hasn\'t stopped.';
        $post->url = 'https://pbs.twimg.com/media/C-YHAZUXYAMv6Xi.jpg';
        $post->content = 'Some article about protests in Venezuela';
        $post->created_by = 3;
        $post->save();

        $post1 = new \App\Models\Post();
        $post1->title = 'Every day has its dog ...';
        $post1->url = 'http://i.imgur.com/3ZrjLy2.jpg';
        $post1->content = 'A photo of a dog';
        $post1->created_by = 2;
        $post1->save();


        $post2 = new \App\Models\Post();
        $post2->title = 'Every day has its dog ...';
        $post2->url = 'http://i.imgur.com/3ZrjLy2.jpg';
        $post2->content = 'A photo of a dog';
        $post2->created_by = 2;
        $post2->save();


        $post3 = new \App\Models\Post();
        $post3->title = 'Once a gymnast, always a gymnast';
        $post3->url = 'https://i.imgur.com/gZmWYyL.gifv';
        $post3->content = 'Some old gymnast guy';
        $post3->created_by = 5;
        $post3->save();


        $post4 = new \App\Models\Post();
        $post4->title = 'Every day has its dog ...';
        $post4->url = 'http://i.imgur.com/3ZrjLy2.jpg';
        $post4->content = 'A photo of a dog';
        $post4->created_by = 2;
        $post4->save();


        $post5 = new \App\Models\Post();
        $post5->title = 'I colorize black and white TV shows, and I just finished this scene from I Love Lucy (1953)';
        $post5->url = 'https://youtu.be/IbL-VUZmL30';
        $post5->content = 'OHHH WOWWW';
        $post5->created_by = 6;
        $post5->save();


        $post6 = new \App\Models\Post();
        $post6->title = 'The rare stroke of genius at Activision.';
        $post6->url = 'https://i.imgflip.com/1o20g7.jpg';
        $post6->content = 'Example content';
        $post6->created_by = 7;
        $post6->save();


        $post7 = new \App\Models\Post();
        $post7->title = 'Firefighting Drones are Saving Lives as Next Advancement in Public Safety Technology';
        $post7->url = 'https://www.newsledge.com/drones-public-safety-technology/';
        $post7->content = 'Example Content';
        $post7->created_by = 7;
        $post7->save();


        $post8 = new \App\Models\Post();
        $post8->title = 'My Car Makes Noise: A library of car noises which can be used to diagnose car problems';
        $post8->url = 'http://mycarmakesnoise.com/';
        $post8->content = 'Example Content';
        $post8->created_by = 9;
        $post8->save();


        $post9 = new \App\Models\Post();
        $post9->title = 'The Office- Toby Snaps';
        $post9->url = 'https://youtu.be/7s3D8f1x5V8';
        $post9->content = 'Example Content';
        $post9->created_by = 1;
        $post9->save();

    }
}