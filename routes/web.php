<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Rian Asri Damanik",
        "email" => "rianasridamanik0@gmail.com"
    ]);
});



Route::get('/blog', function () {
     $blog_posts=[
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

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts=[
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

$new_post = [];
foreach($blog_posts as $post) {
    if($post["slug"] === $slug) {
        $new_post = $post;

    }
}
        return view('post', [
            "title" => "Single Post",
            "post" => $new_post
        ]);
});