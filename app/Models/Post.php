<?php

namespace App\Models;



    class Post  
{
   private static $blog_posts = [
    [
    "title" => "Post Judul Pertama",
    "slug" => "post-judul-pertama",
    "author" => "Rian Asri Damanik",
    "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. A architecto nihil necessitatibus? Suscipit hic quidem tempore ratione enim eligendi obcaecati repellat cum nulla a laborum quasi quia veniam, sapiente, magni quam debitis dolores iure amet. Laboriosam, eligendi. Esse consectetur similique velit maxime libero error optio sunt molestias ad obcaecati, omnis officia necessitatibus excepturi delectus dolore ducimus provident veritatis saepe explicabo commodi vitae blanditiis? Omnis ullam animi a illum in quasi dolorem, possimus soluta earum quas ex! Dolores rem porro libero."
    ],
    [
    "title" => "Post Judul Kedua",
    "slug" => "post-judul-kedua",
    "author" => "Rian Asri",
    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae assumenda nobis natus molestias voluptatum magnam porro doloribus quidem dolore quisquam praesentium explicabo libero, quam sequi ab commodi nulla minima veritatis quaerat, modi necessitatibus similique laudantium aliquid! Vitae cum sed repudiandae. Voluptatibus, harum. Ducimus illum ullam tempore nemo, id enim perferendis. Quis provident minima odio eveniet, porro, voluptatum repellat vero aperiam illo earum excepturi delectus fugiat error architecto expedita maxime consectetur hic alias nisi nulla aliquid doloremque recusandae. Corporis dolore quasi laboriosam minus iste animi velit aut, placeat delectus harum atque? Ea laboriosam saepe, earum temporibus nisi eaque quasi asperiores esse!"
    ],
]; 

public static function all()
{
    return self::$blog_posts;
}

public static function find($slug)
{
    $posts = self::$blog_posts;
    $post = [];
foreach($posts as $p) {
    if($p["slug"] === $slug) {
        $post = $p;

    }
}
return $post;
}
}
