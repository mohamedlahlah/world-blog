<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use Carbon\Carbon;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('posts')->truncate();
       $posts=[];
       $faker=Factory::create();
       $date=carbon::now()->modify('-1 year');
       for($i=1;$i<=37;$i++){

          $image="Post_Image_".rand(1,13).".jpg";
          $date->addDays(10);
          $publishedDate=clone($date);
          $createdDate=clone($date);


          $posts[]=[
             'auther_id'=>rand(1,3),
             'title'=>$faker->sentence(rand(8,12)),
             'excerpt'=>$faker->text(rand(250,300)),
             'body'=>$faker->paragraphs(rand(10,15),true),
             'slug'=>$faker->slug(),
    			// 'image'=>rand(0,1)==1 ? $image :NULL,
             'image'=>$image,

             'created_at'=>$createdDate,
             'updated_at'=>$createdDate,
             'published_at'=>$i < 30  ? $publishedDate : (rand(0,1)==0 ? NULL : $createdDate->addDays(4) ),
             'view_count'=>rand(1,10)*10

         ];

     }
     DB::table('posts')->insert($posts);

 }
}
